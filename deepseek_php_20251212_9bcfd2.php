<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$config = [
    'token' => '4564564asf78954e65g4a7g98a4ga6s5g48as7g98as8g456',
    'admin_ids' => ['7500103239', '7104718080'],
    'db_file' => 'database.json'
];

// Token tekshirish
function verifyToken($input_token) {
    global $config;
    return $input_token === $config['token'];
}

// Database o'qish
function readDatabase() {
    global $config;
    if (!file_exists($config['db_file'])) {
        return ['users' => []];
    }
    
    $content = file_get_contents($config['db_file']);
    if (empty($content)) {
        return ['users' => []];
    }
    
    return json_decode($content, true) ?: ['users' => []];
}

// Database yozish
function writeDatabase($data) {
    global $config;
    file_put_contents($config['db_file'], json_encode($data, JSON_PRETTY_PRINT));
}

// Foydalanuvchi topish yoki yaratish
function getUser($user_id, $username = '') {
    $db = readDatabase();
    
    foreach ($db['users'] as &$user) {
        if ($user['id'] === $user_id) {
            return $user;
        }
    }
    
    // Yangi foydalanuvchi yaratish
    $new_user = [
        'id' => $user_id,
        'username' => $username ?: "User$user_id",
        'balance' => 0,
        'ads_count' => 0,
        'last_ad_date' => '',
        'created_at' => date('Y-m-d H:i:s'),
        'today_ads' => 0
    ];
    
    $db['users'][] = $new_user;
    writeDatabase($db);
    
    return $new_user;
}

// Foydalanuvchini yangilash
function updateUser($user_data) {
    $db = readDatabase();
    
    foreach ($db['users'] as &$user) {
        if ($user['id'] === $user_data['id']) {
            $user = array_merge($user, $user_data);
            writeDatabase($db);
            return true;
        }
    }
    
    return false;
}

// Kunlik reklama limitini tekshirish
function canWatchAd($user_id) {
    $user = getUser($user_id);
    
    // Agar bugungi sana o'zgagan bo'lsa, counter ni nolga tushirish
    $today = date('Y-m-d');
    if ($user['last_ad_date'] !== $today) {
        $user['today_ads'] = 0;
        $user['last_ad_date'] = $today;
        updateUser($user);
    }
    
    // Kunlik limit (masalan, 50 ta)
    $daily_limit = 50;
    return $user['today_ads'] < $daily_limit;
}

// Asosiy request handler
$request = json_decode(file_get_contents('php://input'), true);

if (!$request || !isset($request['action']) || !isset($request['token'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
    exit;
}

if (!verifyToken($request['token'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid token']);
    exit;
}

$action = $request['action'];

switch ($action) {
    case 'get_balance':
        if (!isset($request['user_id'])) {
            echo json_encode(['success' => false, 'error' => 'User ID required']);
            exit;
        }
        
        $user = getUser($request['user_id']);
        echo json_encode([
            'success' => true,
            'balance' => $user['balance'],
            'today_ads' => $user['today_ads']
        ]);
        break;
        
    case 'add_diamond':
        if (!isset($request['user_id'])) {
            echo json_encode(['success' => false, 'error' => 'User ID required']);
            exit;
        }
        
        $user_id = $request['user_id'];
        
        // Kunlik limitni tekshirish
        if (!canWatchAd($user_id)) {
            echo json_encode(['success' => false, 'error' => 'Kunlik limit tugadi']);
            exit;
        }
        
        $user = getUser($user_id);
        
        // Balansni oshirish
        $user['balance']++;
        $user['ads_count']++;
        $user['today_ads']++;
        $user['last_ad_date'] = date('Y-m-d');
        
        updateUser($user);
        
        echo json_encode([
            'success' => true,
            'balance' => $user['balance'],
            'today_ads' => $user['today_ads']
        ]);
        break;
        
    case 'get_stats':
        // Admin huquqini tekshirish
        if (!isset($request['admin_id']) || !in_array($request['admin_id'], $config['admin_ids'])) {
            echo json_encode(['success' => false, 'error' => 'Admin access required']);
            exit;
        }
        
        $db = readDatabase();
        
        // Statistikani hisoblash
        $total_users = count($db['users']);
        $total_ads = 0;
        
        foreach ($db['users'] as $user) {
            $total_ads += $user['ads_count'];
        }
        
        // Foydalanuvchilar ro'yxatini tayyorlash
        $users_list = [];
        foreach ($db['users'] as $user) {
            $users_list[] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'balance' => $user['balance'],
                'ads_count' => $user['ads_count'],
                'created_at' => $user['created_at']
            ];
        }
        
        // Balans bo'yicha tartiblash
        usort($users_list, function($a, $b) {
            return $b['balance'] - $a['balance'];
        });
        
        echo json_encode([
            'success' => true,
            'total_users' => $total_users,
            'total_ads' => $total_ads,
            'users' => array_slice($users_list, 0, 20) // Faqat top 20
        ]);
        break;
        
    default:
        echo json_encode(['success' => false, 'error' => 'Unknown action']);
        break;
}
?>