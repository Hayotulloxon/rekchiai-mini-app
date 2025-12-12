<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Rewards</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: #f1f5f9;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 400px;
            background: #1e293b;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            border: 1px solid #334155;
        }
        
        .header {
            text-align: center;
            margin-bottom: 24px;
        }
        
        .logo {
            font-size: 48px;
            margin-bottom: 12px;
        }
        
        .title {
            font-size: 28px;
            font-weight: bold;
            color: #f8fafc;
            margin-bottom: 6px;
        }
        
        .subtitle {
            font-size: 14px;
            color: #94a3b8;
        }
        
        .user-card {
            background: linear-gradient(135deg, #8b5cf6, #6366f1);
            border-radius: 16px;
            padding: 18px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
        
        .user-info {
            flex: 1;
        }
        
        .user-name {
            font-weight: bold;
            font-size: 18px;
            color: white;
        }
        
        .user-id {
            font-size: 13px;
            color: rgba(255,255,255,0.8);
            margin-top: 4px;
        }
        
        .balance-card {
            background: #2d3748;
            border-radius: 16px;
            padding: 24px;
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid #4a5568;
        }
        
        .balance-label {
            font-size: 14px;
            color: #94a3b8;
            margin-bottom: 10px;
        }
        
        .balance-value {
            font-size: 42px;
            font-weight: bold;
            color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        
        .ad-button {
            width: 100%;
            background: linear-gradient(135deg, #8b5cf6, #6366f1);
            color: white;
            border: none;
            border-radius: 16px;
            padding: 20px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: transform 0.2s;
        }
        
        .ad-button:hover {
            transform: translateY(-2px);
        }
        
        .ad-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }
        
        .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 13px;
            color: #94a3b8;
        }
        
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: #10b981;
            color: white;
            padding: 16px 24px;
            border-radius: 12px;
            font-weight: 500;
            z-index: 1000;
            display: none;
            max-width: 90%;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .admin-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(139, 92, 246, 0.15);
            color: #a78bfa;
            border: 1px solid rgba(139, 92, 246, 0.3);
            border-radius: 10px;
            padding: 10px 16px;
            font-size: 14px;
            cursor: pointer;
            display: none;
        }
    </style>
</head>
<body>
    <button class="admin-btn" id="adminBtn">Admin</button>
    
    <div class="container">
        <div class="header">
            <div class="logo">💎</div>
            <div class="title">Diamond Rewards</div>
            <div class="subtitle">Olmos yig'ing va mukofot oling</div>
        </div>
        
        <div class="user-card">
            <div class="avatar" id="avatar">TG</div>
            <div class="user-info">
                <div class="user-name" id="userName">Foydalanuvchi</div>
                <div class="user-id" id="userId">ID: -</div>
            </div>
        </div>
        
        <div class="balance-card">
            <div class="balance-label">Joriy balans</div>
            <div class="balance-value">
                <span>💎</span>
                <span id="balance">0</span>
            </div>
            <div class="stats">
                <span>Bugun: <span id="todayAds">0</span> ta</span>
                <span>Jami: <span id="totalAds">0</span> ta</span>
            </div>
        </div>
        
        <button class="ad-button" id="watchAdBtn">
            <span>▶️</span>
            <span>Reklamani ko'rish (+1 💎)</span>
        </button>
    </div>
    
    <div class="toast" id="toast">Xabar</div>

    <script>
        // Konfiguratsiya
        const CONFIG = {
            adminIds: [], // GitHub uchun bo'sh
            token: 'YOUR_TOKEN_HERE' // GitHubda haqiqiy token qo'ymang!
        };
        
        // DOM elementlari
        const avatarEl = document.getElementById('avatar');
        const userNameEl = document.getElementById('userName');
        const userIdEl = document.getElementById('userId');
        const balanceEl = document.getElementById('balance');
        const todayAdsEl = document.getElementById('todayAds');
        const totalAdsEl = document.getElementById('totalAds');
        const watchAdBtn = document.getElementById('watchAdBtn');
        const toastEl = document.getElementById('toast');
        const adminBtn = document.getElementById('adminBtn');
        
        // Foydalanuvchi ma'lumotlari
        let userData = {
            id: null,
            name: '',
            balance: 0,
            adsToday: 0,
            adsTotal: 0
        };
        
        // Xabar ko'rsatish
        function showMessage(text, isError = false) {
            toastEl.textContent = text;
            toastEl.style.background = isError ? '#ef4444' : '#10b981';
            toastEl.style.display = 'block';
            
            setTimeout(() => {
                toastEl.style.display = 'none';
            }, 3000);
        }
        
        // Telegram muhitini tekshirish
        function isTelegramWebApp() {
            return window.Telegram?.WebApp?.initDataUnsafe?.user;
        }
        
        // Foydalanuvchini sozlash
        function setupUser() {
            if (!isTelegramWebApp()) {
                showMessage('Faqat Telegram WebApp ichida ishlaydi', true);
                watchAdBtn.disabled = true;
                return;
            }
            
            const tg = window.Telegram.WebApp;
            tg.ready();
            
            const tgUser = tg.initDataUnsafe.user;
            if (!tgUser) {
                showMessage('Foydalanuvchi topilmadi', true);
                return;
            }
            
            // Foydalanuvchi ma'lumotlari
            userData.id = String(tgUser.id);
            userData.name = tgUser.first_name || 'Foydalanuvchi';
            
            if (tgUser.last_name) {
                userData.name += ' ' + tgUser.last_name;
            }
            
            // UI ni yangilash
            userNameEl.textContent = userData.name;
            userIdEl.textContent = `ID: ${userData.id}`;
            
            // Avatar bosh harflari
            let initials = '';
            if (tgUser.first_name) initials += tgUser.first_name[0];
            if (tgUser.last_name) initials += tgUser.last_name[0];
            avatarEl.textContent = initials.toUpperCase() || 'TG';
            
            // Admin tekshirish
            if (CONFIG.adminIds.includes(userData.id)) {
                adminBtn.style.display = 'block';
            }
            
            // Telegram UI sozlamalari
            try {
                tg.setHeaderColor('#8b5cf6');
                tg.setBackgroundColor('#1e293b');
            } catch (e) {}
            
            // Ma'lumotlarni yuklash
            loadUserData();
        }
        
        // Ma'lumotlarni yuklash (localStorage dan)
        function loadUserData() {
            if (!userData.id) return;
            
            const key = `user_${userData.id}`;
            const saved = localStorage.getItem(key);
            
            if (saved) {
                const data = JSON.parse(saved);
                userData.balance = data.balance || 0;
                userData.adsToday = data.adsToday || 0;
                userData.adsTotal = data.adsTotal || 0;
                updateUI();
            }
        }
        
        // UI ni yangilash
        function updateUI() {
            balanceEl.textContent = userData.balance;
            todayAdsEl.textContent = userData.adsToday;
            totalAdsEl.textContent = userData.adsTotal;
        }
        
        // Ma'lumotlarni saqlash
        function saveUserData() {
            if (!userData.id) return;
            
            const key = `user_${userData.id}`;
            localStorage.setItem(key, JSON.stringify({
                balance: userData.balance,
                adsToday: userData.adsToday,
                adsTotal: userData.adsTotal,
                lastUpdated: new Date().toISOString()
            }));
        }
        
        // Olmos qo'shish (simulyatsiya)
        function addDiamond() {
            // Kunlik limit (50 ta)
            if (userData.adsToday >= 50) {
                showMessage('Kunlik limit tugadi!', true);
                return false;
            }
            
            userData.balance += 1;
            userData.adsToday += 1;
            userData.adsTotal += 1;
            
            updateUI();
            saveUserData();
            
            showMessage('🎉 +1 olmos qo\'shildi!');
            return true;
        }
        
        // Reklama ko'rish (simulyatsiya)
        function watchAd() {
            watchAdBtn.disabled = true;
            watchAdBtn.innerHTML = '<span>⏳</span><span>Yuklanmoqda...</span>';
            
            // 2 soniya kutish (reklama simulyatsiyasi)
            setTimeout(() => {
                const success = addDiamond();
                
                if (success) {
                    // 5 soniyalik "reklama" simulyatsiyasi
                    watchAdBtn.innerHTML = '<span>📺</span><span>Reklama ko\'rilmoqda...</span>';
                    
                    setTimeout(() => {
                        watchAdBtn.disabled = false;
                        watchAdBtn.innerHTML = '<span>▶️</span><span>Reklamani ko\'rish (+1 💎)</span>';
                    }, 5000);
                } else {
                    watchAdBtn.disabled = false;
                    watchAdBtn.innerHTML = '<span>▶️</span><span>Reklamani ko\'rish (+1 💎)</span>';
                }
            }, 2000);
        }
        
        // Admin panel
        adminBtn.addEventListener('click', () => {
            showMessage('Admin panel GitHub demo versiyasida mavjud emas');
        });
        
        // Event listenerlar
        watchAdBtn.addEventListener('click', watchAd);
        
        // Ilk yuklash
        document.addEventListener('DOMContentLoaded', setupUser);
        
        // Kunlik reset
        function checkDailyReset() {
            const today = new Date().toDateString();
            const lastReset = localStorage.getItem('last_reset');
            
            if (lastReset !== today) {
                // Barcha foydalanuvchilarni reset qilish
                for (let i = 0; i < localStorage.length; i++) {
                    const key = localStorage.key(i);
                    if (key.startsWith('user_')) {
                        try {
                            const data = JSON.parse(localStorage.getItem(key));
                            data.adsToday = 0;
                            localStorage.setItem(key, JSON.stringify(data));
                        } catch (e) {}
                    }
                }
                localStorage.setItem('last_reset', today);
            }
        }
        
        // Har soat reset ni tekshirish
        setInterval(checkDailyReset, 3600000);
        checkDailyReset();
    </script>
</body>
</html>
