<!doctype html>
<html lang="uz">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Diamond Rewards</title><!-- Telegram WebApp SDK -->
  <script src="https://telegram.org/js/telegram-web-app.js"></script><!-- Adsgram SDK -->
  <script src="https://sad.adsgram.ai/js/sad.min.js"></script>
  <style>
      body {
        box-sizing: border-box;
      }

      * {
        box-sizing: inherit;
        margin: 0;
        padding: 0;
      }

      html,
      body {
        width: 100%;
        height: 100%;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", sans-serif;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #f1f5f9;
      }

      body {
        display: flex;
        justify-content: center;
        align-items: stretch;
      }

      .app-wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: stretch;
        padding: 20px;
        overflow-y: auto;
      }

      .app-container {
        width: 100%;
        max-width: 440px;
        background: #1e293b;
        border-radius: 24px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        align-self: flex-start;
        border: 1px solid #334155;
      }

      header {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
      }

      .brand {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .logo-circle {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: linear-gradient(135deg, #8b5cf6, #6366f1);
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .logo-icon {
        font-size: 22px;
      }

      .brand-text {
        display: flex;
        flex-direction: column;
        gap: 2px;
      }

      .brand-title {
        font-size: 18px;
        font-weight: 700;
        color: #f8fafc;
      }

      .brand-subtitle {
        font-size: 12px;
        color: #94a3b8;
      }

      .admin-button {
        padding: 8px 14px;
        border-radius: 12px;
        border: none;
        background: linear-gradient(135deg, #8b5cf6, #6366f1);
        color: #ffffff;
        font-size: 12px;
        font-weight: 600;
        display: none;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
      }

      .admin-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(139, 92, 246, 0.4);
      }

      .admin-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #10b981;
      }

      .status-banner {
        font-size: 13px;
        padding: 12px 16px;
        border-radius: 16px;
        background: rgba(139, 92, 246, 0.15);
        border: 2px solid rgba(139, 92, 246, 0.25);
        color: #cbd5e1;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .status-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #f59e0b;
        animation: pulse 2s infinite;
      }

      @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
      }

      .status-text {
        flex: 1;
        font-weight: 500;
      }

      .status-badge {
        padding: 4px 10px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        background: rgba(139, 92, 246, 0.25);
        color: #a78bfa;
      }

      main {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }

      .user-card {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px;
        border-radius: 16px;
        background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
        box-shadow: 0 4px 16px rgba(139, 92, 246, 0.3);
      }

      .avatar {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        font-weight: 700;
        font-size: 18px;
        flex-shrink: 0;
        position: relative;
      }

      .avatar-badge {
        position: absolute;
        right: -3px;
        bottom: -3px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #10b981;
        border: 2px solid #8b5cf6;
      }

      .user-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 4px;
      }

      .user-name {
        font-size: 16px;
        font-weight: 700;
        color: #ffffff;
      }

      .user-username {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.9);
      }

      .user-id {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
      }

      .balance-pill {
        padding: 10px 14px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
        gap: 2px;
        color: #ffffff;
        font-size: 11px;
        border: 2px solid rgba(255, 255, 255, 0.25);
      }

      .balance-label {
        opacity: 0.9;
        font-weight: 500;
      }

      .balance-value {
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 700;
        font-size: 18px;
      }

      .diamond-icon {
        font-size: 18px;
      }

      .balance-sync {
        font-size: 9px;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 1px;
      }

      .section-card {
        border-radius: 16px;
        padding: 18px;
        background: #2d3748;
        display: flex;
        flex-direction: column;
        gap: 14px;
        border: 1px solid #4a5568;
      }

      .section-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 10px;
      }

      .section-title {
        font-size: 17px;
        font-weight: 700;
        color: #f8fafc;
        margin-bottom: 3px;
      }

      .section-subtitle {
        font-size: 12px;
        color: #94a3b8;
        line-height: 1.4;
      }

      .tag-pill {
        padding: 6px 12px;
        border-radius: 12px;
        background: linear-gradient(135deg, #8b5cf6, #6366f1);
        font-size: 12px;
        color: #ffffff;
        font-weight: 600;
        white-space: nowrap;
      }

      .primary-button {
        width: 100%;
        border: none;
        outline: none;
        border-radius: 16px;
        padding: 16px 20px;
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        background: linear-gradient(135deg, #8b5cf6, #6366f1);
        color: #ffffff;
        box-shadow: 0 8px 20px rgba(139, 92, 246, 0.4);
        transition: all 0.3s ease;
      }

      .primary-button:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none !important;
      }

      .primary-button:not(:disabled):hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(139, 92, 246, 0.5);
      }

      .primary-button:not(:disabled):active {
        transform: translateY(0);
      }

      .button-icon {
        font-size: 20px;
      }

      .ad-section {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(99, 102, 241, 0.1));
        border: 2px solid rgba(139, 92, 246, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 180px;
      }

      .ad-preview {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px;
        text-align: center;
        gap: 16px;
      }

      .ad-emoji {
        font-size: 48px;
        animation: float 3s ease-in-out infinite;
      }

      @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
      }

      .ad-title {
        font-size: 20px;
        font-weight: 700;
        color: #f8fafc;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
      }

      .ad-subtitle {
        font-size: 14px;
        color: #cbd5e1;
        max-width: 300px;
        line-height: 1.5;
      }

      .ad-bonus {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #fbbf24;
        background: rgba(251, 191, 36, 0.1);
        padding: 8px 16px;
        border-radius: 12px;
        border: 1px solid rgba(251, 191, 36, 0.3);
      }

      .section-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: #94a3b8;
        padding-top: 8px;
        border-top: 1px solid #4a5568;
      }

      .pill {
        border-radius: 10px;
        padding: 4px 10px;
        background: rgba(139, 92, 246, 0.15);
        color: #a78bfa;
        font-weight: 600;
      }

      .toast {
        position: fixed;
        left: 50%;
        bottom: 20px;
        transform: translateX(-50%);
        max-width: 380px;
        width: calc(100% - 40px);
        padding: 16px 20px;
        border-radius: 16px;
        background: #1e293b;
        font-size: 14px;
        color: #ffffff;
        display: none;
        align-items: center;
        gap: 12px;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
        z-index: 1000;
        animation: slideUp 0.3s ease;
        border: 1px solid #4a5568;
      }

      @keyframes slideUp {
        from {
          transform: translateX(-50%) translateY(20px);
          opacity: 0;
        }
        to {
          transform: translateX(-50%) translateY(0);
          opacity: 1;
        }
      }

      .toast-icon {
        font-size: 24px;
      }

      .toast-text {
        flex: 1;
        font-weight: 500;
      }

      .toast-close {
        width: 28px;
        height: 28px;
        border-radius: 8px;
        border: none;
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.2s ease;
      }

      .toast-close:hover {
        background: rgba(255, 255, 255, 0.2);
      }

      .toast-success {
        background: linear-gradient(135deg, #10b981, #059669);
        border: 1px solid rgba(16, 185, 129, 0.3);
      }

      .toast-error {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        border: 1px solid rgba(239, 68, 68, 0.3);
      }

      .admin-panel-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(8px);
        display: none;
        justify-content: center;
        align-items: center;
        padding: 20px;
        z-index: 999;
      }

      .admin-panel {
        width: 100%;
        max-width: 480px;
        max-height: 90%;
        background: #1e293b;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        padding: 24px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        overflow-y: auto;
        border: 1px solid #4a5568;
      }

      .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        padding-bottom: 16px;
        border-bottom: 2px solid #4a5568;
      }

      .admin-title {
        font-size: 20px;
        font-weight: 700;
        color: #f8fafc;
      }

      .admin-badge {
        font-size: 12px;
        color: #94a3b8;
      }

      .admin-close {
        width: 36px;
        height: 36px;
        border-radius: 12px;
        border: none;
        background: #334155;
        color: #cbd5e1;
        font-size: 20px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.2s ease;
      }

      .admin-close:hover {
        background: #475569;
      }

      .admin-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
      }

      .admin-stat {
        border-radius: 16px;
        padding: 16px;
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.15), rgba(99, 102, 241, 0.15));
        border: 1px solid rgba(139, 92, 246, 0.25);
        display: flex;
        flex-direction: column;
        gap: 8px;
      }

      .admin-stat-label {
        font-size: 12px;
        color: #94a3b8;
        font-weight: 600;
      }

      .admin-stat-value {
        font-size: 24px;
        font-weight: 700;
        color: #f8fafc;
      }

      .admin-stat-footnote {
        font-size: 11px;
        color: #64748b;
      }

      .admin-top-list {
        border-radius: 16px;
        padding: 16px;
        background: #2d3748;
        display: flex;
        flex-direction: column;
        gap: 12px;
        border: 1px solid #4a5568;
      }

      .admin-list-title {
        font-size: 14px;
        font-weight: 700;
        color: #f8fafc;
      }

      .user-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        font-size: 13px;
        color: #cbd5e1;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      }

      .user-row:last-child {
        border-bottom: none;
      }

      .user-row-main {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .rank-badge {
        width: 24px;
        height: 24px;
        border-radius: 8px;
        background: linear-gradient(135deg, #8b5cf6, #6366f1);
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        font-size: 12px;
        font-weight: 700;
      }

      .user-row-amount {
        font-size: 14px;
        font-weight: 700;
        color: #f8fafc;
        display: flex;
        align-items: center;
        gap: 6px;
      }

      footer {
        margin-top: 8px;
        font-size: 12px;
        color: #64748b;
        text-align: center;
        padding-top: 16px;
        border-top: 1px solid #4a5568;
      }

      @media (max-width: 480px) {
        .app-wrapper {
          padding: 12px;
        }

        .app-container {
          padding: 20px;
          border-radius: 24px;
        }

        .section-card {
          padding: 16px;
        }
      }
    </style>
 </head>
 <body>
  <div class="app-wrapper">
   <div class="app-container" id="app">
    <header>
     <div class="top-bar">
      <div class="brand">
       <div class="logo-circle" aria-hidden="true">
        <div class="logo-icon">
         💎
        </div>
       </div>
       <div class="brand-text">
        <div class="brand-title" id="appTitle">
         Diamond Rewards
        </div>
        <div class="brand-subtitle" id="appSubtitle">
         Olmos yig'ing va mukofot oling
        </div>
       </div>
      </div><button id="adminButton" class="admin-button" type="button" aria-label="Admin panelni ochish"> <span class="admin-dot"></span> <span>Admin</span> </button>
     </div>
     <div class="status-banner" id="envBanner">
      <div class="status-dot" id="envDot"></div>
      <div class="status-text" id="envText">
       Telegram Mini App ichida ishga tushiring
      </div>
      <div class="status-badge" id="envBadge">
       WEB
      </div>
     </div>
    </header>
    <main aria-live="polite"><!-- USER CARD -->
     <section class="user-card" id="userCard">
      <div class="avatar" id="avatar" aria-hidden="true"><span id="avatarInitials">TG</span> <span class="avatar-badge"></span>
      </div>
      <div class="user-info">
       <div class="user-name" id="userName">
        Foydalanuvchi
       </div>
       <div class="user-username" id="userUsername">
        @username
       </div>
       <div class="user-id" id="userId">
        ID: -
       </div>
      </div>
      <div class="balance-pill" aria-label="Olmos balansi"><span class="balance-label">Balans</span>
       <div class="balance-value">
        <div class="diamond-icon">
         💎
        </div><span id="balanceValue">0</span>
       </div>
       <div class="balance-sync" id="balanceSyncText">
        Yuklanmoqda...
       </div>
      </div>
     </section><!-- REKLAMA / EARN -->
     <section class="section-card" id="earnSection">
      <div class="section-header">
       <div>
        <div class="section-title">
         🎬 Reklama ko'ring
        </div>
        <div class="section-subtitle">
         Reklamani oching va click qiling
        </div>
       </div>
       <div class="tag-pill">
        +1 💎
       </div>
      </div>
      <div class="ad-section">
       <div class="ad-preview">
        <div class="ad-emoji">
         📱
        </div>
        <div class="ad-title">
         Yangi reklama tayyor!
        </div>
        <div class="ad-subtitle">
         Quyidagi tugma orqali reklamani oching va click qiling
        </div>
        <div class="ad-bonus">
         <span>Bonus:</span>
         <span>+1 olmos</span>
         <span>💎</span>
        </div>
       </div>
      </div><button id="showAdButton" class="primary-button" type="button"> <span class="button-icon">▶️</span> <span>Reklamani ochish</span> </button>
      <div class="section-footer"><span id="adInfoText"> Reklamaga click qilinganda mukofot beriladi </span> <span class="pill" id="adCounter"> Bugun: <span id="adTodayCount">0</span> </span>
      </div>
     </section>
    </main>
    <footer>
     Telegram Mini App • Server sinxronizatsiyasi
    </footer>
   </div>
  </div><!-- TOAST -->
  <div class="toast" id="toast">
   <div class="toast-icon" id="toastIcon">
    ✓
   </div>
   <div class="toast-text" id="toastMessage">
    Xabar matni
   </div><button class="toast-close" id="toastClose" type="button"> × </button>
  </div><!-- ADMIN PANEL -->
  <div class="admin-panel-overlay" id="adminOverlay" role="dialog" aria-modal="true">
   <div class="admin-panel">
    <div class="admin-header">
     <div>
      <div class="admin-title">
       📊 Admin Panel
      </div>
      <div class="admin-badge">
       Statistika va boshqaruv
      </div>
     </div><button class="admin-close" id="adminClose" type="button" aria-label="Yopish"> × </button>
    </div>
    <div class="admin-grid">
     <div class="admin-stat">
      <div class="admin-stat-label">
       Jami foydalanuvchilar
      </div>
      <div class="admin-stat-value" id="statTotalUsers">
       0
      </div>
     </div>
     <div class="admin-stat">
      <div class="admin-stat-label">
       Jami reklamalar
      </div>
      <div class="admin-stat-value" id="statTotalAds">
       0
      </div>
     </div>
    </div>
    <div class="admin-top-list">
     <div class="admin-list-title">
      📊 Foydalanuvchilar statistikasi
     </div>
     <div id="userStatsList"></div>
    </div>
   </div>
  </div>
  <script>
      (function () {
        // === KONFIG ===
        var ADSGRAM_BLOCK_ID = "18961";
        var BALANCE_API_URL = "https://68ed1ab05ca4e.myxvest1.ru/Test/balance.php";
        var TOKEN_PARTS = ["4564564asf78954e65g4a7g98a4ga6s5g48as7g98as8g456"];
        var API_TOKEN = TOKEN_PARTS[0];
        var ADMIN_IDS = ["7500103239", "7104718080"];

        var currentUser = null;
        var balance = 0;
        var adViewCountToday = 0;
        var lastAdTimestamp = 0;
        var AdController = null;
        var adClicked = false;

        // === ELEMENTLAR ===
        var envBanner = document.getElementById("envBanner");
        var envDot = document.getElementById("envDot");
        var envText = document.getElementById("envText");
        var envBadge = document.getElementById("envBadge");

        var userCard = document.getElementById("userCard");
        var avatarInitials = document.getElementById("avatarInitials");
        var userNameEl = document.getElementById("userName");
        var userUsernameEl = document.getElementById("userUsername");
        var userIdEl = document.getElementById("userId");
        var balanceValueEl = document.getElementById("balanceValue");
        var balanceSyncText = document.getElementById("balanceSyncText");

        var adContainer = document.querySelector(".ad-section");
        var showAdButton = document.getElementById("showAdButton");
        var adTodayCountEl = document.getElementById("adTodayCount");
        var adInfoText = document.getElementById("adInfoText");

        var adminButton = document.getElementById("adminButton");
        var adminOverlay = document.getElementById("adminOverlay");
        var adminClose = document.getElementById("adminClose");
        var statTotalUsers = document.getElementById("statTotalUsers");
        var statTotalAds = document.getElementById("statTotalAds");
        var userStatsList = document.getElementById("userStatsList");

        var toastEl = document.getElementById("toast");
        var toastIcon = document.getElementById("toastIcon");
        var toastMessage = document.getElementById("toastMessage");
        var toastClose = document.getElementById("toastClose");

        // === YORDAMCHI FUNKSIYALAR ===
        function showToast(message, type) {
          toastMessage.textContent = message;
          toastEl.className = "toast";
          
          if (type === "error") {
            toastEl.classList.add("toast-error");
            toastIcon.textContent = "✕";
          } else {
            toastEl.classList.add("toast-success");
            toastIcon.textContent = "✓";
          }
          
          toastEl.style.display = "flex";

          setTimeout(function () {
            toastEl.style.display = "none";
          }, 4000);
        }

        toastClose.addEventListener("click", function () {
          toastEl.style.display = "none";
        });

        function isTelegramEnv() {
          return (
            typeof window !== "undefined" &&
            window.Telegram &&
            window.Telegram.WebApp &&
            window.Telegram.WebApp.initDataUnsafe &&
            window.Telegram.WebApp.initDataUnsafe.user
          );
        }

        // LocalStorage'dan balansni olish
        function loadBalanceFromLocal(userId) {
          var key = "diamond_balance_" + userId;
          var raw = null;
          try {
            raw = window.localStorage.getItem(key);
          } catch (e) {
            raw = null;
          }
          var num = parseInt(raw || "0", 10);
          if (isNaN(num) || num < 0) num = 0;
          return num;
        }

        // LocalStorage'ga balansni saqlash
        function saveBalanceToLocal(userId, value) {
          var key = "diamond_balance_" + userId;
          try {
            window.localStorage.setItem(key, String(value));
            
            // Foydalanuvchi ma'lumotlarini ham yangilash
            if (currentUser) {
              var userNameKey = "user_name_" + userId;
              var displayName = currentUser.username || currentUser.first_name || "User" + userId;
              localStorage.setItem(userNameKey, displayName);
            }
          } catch (e) {
            console.error("Balansni saqlashda xatolik:", e);
          }
        }

        // LocalStorage'dan reklama hisobini olish
        function loadAdsCountFromLocal(userId) {
          var key = "user_ads_" + userId;
          var raw = null;
          try {
            raw = window.localStorage.getItem(key);
          } catch (e) {
            raw = null;
          }
          var num = parseInt(raw || "0", 10);
          if (isNaN(num) || num < 0) num = 0;
          return num;
        }

        function updateBalanceUI() {
          balanceValueEl.textContent = balance;
        }

        // Serverdan balansni yuklash
        function loadBalanceFromServer(userId) {
          balanceSyncText.textContent = "Yuklanmoqda...";
          
          // Avval local balansni ko'rsatamiz
          var localBalance = loadBalanceFromLocal(userId);
          balance = localBalance;
          updateBalanceUI();
          
          // Local reklama hisobini yuklash
          var localAdsCount = loadAdsCountFromLocal(userId);
          adViewCountToday = localAdsCount;
          adTodayCountEl.textContent = localAdsCount;
          
          // Keyin serverga so'rov yuboramiz
          fetch(BALANCE_API_URL, {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              action: "get_balance",
              user_id: userId,
              token: API_TOKEN
            })
          })
          .then(function(response) {
            if (!response.ok) {
              throw new Error('Server xatosi: ' + response.status);
            }
            return response.json();
          })
          .then(function(data) {
            console.log("Server javobi:", data);
            if (data && data.success && typeof data.balance === "number") {
              var serverBalance = data.balance;
              balance = Math.max(serverBalance, localBalance);
              updateBalanceUI();
              saveBalanceToLocal(userId, balance);
              
              if (serverBalance < balance) {
                saveBalanceToServer(userId, balance);
              }
              
              balanceSyncText.textContent = "✓ Onlayn";
            } else if (data && data.error) {
              console.error("Server xatosi:", data.error);
              balanceSyncText.textContent = "✓ Local";
            } else {
              console.error("Noto'g'ri server javobi:", data);
              balanceSyncText.textContent = "✓ Local";
            }
          })
          .catch(function(error) {
            console.error("Fetch xatosi:", error);
            balanceSyncText.textContent = "✓ Local";
          });
        }

        // Serverga balansni saqlash
        function saveBalanceToServer(userId, newBalance) {
          fetch(BALANCE_API_URL, {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              action: "update_balance",
              user_id: userId,
              balance: newBalance,
              token: API_TOKEN
            })
          })
          .then(function(response) {
            return response.json();
          })
          .then(function(data) {
            if (data && data.success) {
              console.log("Balans serverga saqlandi");
            } else {
              console.warn("Balans serverga saqlanmadi:", data);
            }
          })
          .catch(function(error) {
            console.error("Serverga saqlash xatosi:", error);
          });
        }

        // Barcha foydalanuvchilar ma'lumotlarini olish
        function getAllUsersData() {
          var users = [];
          try {
            for (var i = 0; i < localStorage.length; i++) {
              var key = localStorage.key(i);
              if (key && key.startsWith("user_ads_")) {
                var userId = key.replace("user_ads_", "");
                var adsCount = parseInt(localStorage.getItem(key) || "0", 10);
                var username = localStorage.getItem("user_name_" + userId) || "User" + userId;
                var userBalance = parseInt(localStorage.getItem("diamond_balance_" + userId) || "0", 10);
                users.push({ 
                  id: userId, 
                  username: username, 
                  adsCount: adsCount,
                  balance: userBalance
                });
              }
            }
            
            if (currentUser && users.length === 0 && currentUser.id) {
              var userAdsKey = "user_ads_" + currentUser.id;
              var currentAdsCount = parseInt(localStorage.getItem(userAdsKey) || "0", 10);
              var userNameKey = "user_name_" + currentUser.id;
              var displayName = currentUser.username || currentUser.first_name || "User" + currentUser.id;
              var userBalanceKey = "diamond_balance_" + currentUser.id;
              var userBalanceValue = parseInt(localStorage.getItem(userBalanceKey) || "0", 10);
              
              localStorage.setItem(userAdsKey, String(currentAdsCount));
              localStorage.setItem(userNameKey, displayName);
              localStorage.setItem(userBalanceKey, String(userBalanceValue));
              
              users.push({ 
                id: currentUser.id, 
                username: displayName, 
                adsCount: currentAdsCount,
                balance: userBalanceValue
              });
            }
          } catch (e) {
            console.error("Foydalanuvchi ma'lumotlarini olishda xatolik:", e);
          }
          return users.sort(function(a, b) { 
            return b.adsCount - a.adsCount || b.balance - a.balance; 
          });
        }

        function formatNumber(num) {
          return String(num).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }

        function updateAdminPanel() {
          var allUsers = getAllUsersData();
          var totalAds = 0;
          var totalBalance = 0;
          
          allUsers.forEach(function(user) {
            totalAds += user.adsCount;
            totalBalance += user.balance;
          });

          statTotalUsers.textContent = formatNumber(allUsers.length);
          statTotalAds.textContent = formatNumber(totalAds);

          userStatsList.innerHTML = "";
          
          if (allUsers.length === 0) {
            var emptyMsg = document.createElement("div");
            emptyMsg.style.textAlign = "center";
            emptyMsg.style.color = "#94a3b8";
            emptyMsg.style.padding = "20px";
            emptyMsg.style.fontSize = "13px";
            emptyMsg.textContent = "Hozircha foydalanuvchilar yo'q";
            userStatsList.appendChild(emptyMsg);
            return;
          }

          allUsers.forEach(function (user, index) {
            var row = document.createElement("div");
            row.className = "user-row";

            var main = document.createElement("div");
            main.className = "user-row-main";

            var rank = document.createElement("div");
            rank.className = "rank-badge";
            rank.textContent = index + 1;

            var userInfo = document.createElement("div");
            userInfo.style.display = "flex";
            userInfo.style.flexDirection = "column";
            userInfo.style.gap = "2px";

            var nameEl = document.createElement("div");
            nameEl.style.fontWeight = "600";
            nameEl.style.color = "#f8fafc";
            nameEl.textContent = user.username;

            var idEl = document.createElement("div");
            idEl.style.fontSize = "11px";
            idEl.style.color = "#94a3b8";
            idEl.textContent = "ID: " + user.id;

            userInfo.appendChild(nameEl);
            userInfo.appendChild(idEl);

            main.appendChild(rank);
            main.appendChild(userInfo);

            var amount = document.createElement("div");
            amount.className = "user-row-amount";
            amount.innerHTML = "🎬 " + user.adsCount + " ta | 💎 " + user.balance;

            row.appendChild(main);
            row.appendChild(amount);

            userStatsList.appendChild(row);
          });
        }

        function openAdminPanel() {
          updateAdminPanel();
          adminOverlay.style.display = "flex";
        }

        function closeAdminPanel() {
          adminOverlay.style.display = "none";
        }

        adminButton.addEventListener("click", openAdminPanel);
        adminClose.addEventListener("click", closeAdminPanel);
        adminOverlay.addEventListener("click", function (e) {
          if (e.target === adminOverlay) {
            closeAdminPanel();
          }
        });

        // === REKLAMA TIZIMI ===
        function grantDiamondForAdClick() {
          if (!currentUser) return;

          var now = Date.now();
          if (now - lastAdTimestamp < 5000) {
            return;
          }

          lastAdTimestamp = now;
          balance += 1;
          updateBalanceUI();
          saveBalanceToLocal(currentUser.id, balance);
          saveBalanceToServer(currentUser.id, balance);

          adViewCountToday += 1;
          adTodayCountEl.textContent = adViewCountToday;

          // Reklama statistikasini saqlash
          try {
            var userAdsKey = "user_ads_" + currentUser.id;
            var currentAdsCount = parseInt(localStorage.getItem(userAdsKey) || "0", 10);
            localStorage.setItem(userAdsKey, String(currentAdsCount + 1));
            
            var userNameKey = "user_name_" + currentUser.id;
            var displayName = currentUser.username || currentUser.first_name || "User" + currentUser.id;
            localStorage.setItem(userNameKey, displayName);
          } catch (e) {}

          // Admin panelni yangilash
          if (ADMIN_IDS.indexOf(currentUser.id) !== -1) {
            updateAdminPanel();
          }

          showToast("🎉 Reklamaga click qildingiz! +1 olmos qo'shildi", "success");
          adClicked = false;
        }

        function initAdsgramSDK() {
          if (typeof window.Adsgram === "undefined") {
            console.warn("Adsgram SDK yuklanmadi");
            adInfoText.textContent = "Reklama tizimi yuklanmadi";
            return false;
          }

          try {
            AdController = window.Adsgram.init({ blockId: ADSGRAM_BLOCK_ID });
            
            // Reklama ochilganda
            AdController.addEventListener('onOpen', function() {
              console.log("Reklama ochildi");
              adInfoText.textContent = "Reklama ochildi. Click qiling...";
              showAdButton.disabled = true;
              showAdButton.innerHTML = '<span class="button-icon">⏳</span><span>Reklama ochildi...</span>';
            });
            
            // Reklama click qilinganda (asosiy hodisa)
            AdController.addEventListener('onClick', function() {
              console.log("Reklama click qilindi");
              adClicked = true;
              adInfoText.textContent = "Reklamaga click qildingiz! Bonus berilmoqda...";
              
              // Click qilgandan keyin 1 soniya kutib, bonus beramiz
              setTimeout(function() {
                if (adClicked) {
                  grantDiamondForAdClick();
                }
              }, 1000);
            });
            
            // Reklama yopilganda
            AdController.addEventListener('onClose', function() {
              console.log("Reklama yopildi");
              showAdButton.disabled = false;
              showAdButton.innerHTML = '<span class="button-icon">▶️</span><span>Reklamani ochish</span>';
              
              if (adClicked) {
                adInfoText.textContent = "Reklamaga click qildingiz! Mukofot qo'shildi.";
              } else {
                adInfoText.textContent = "Reklama yopildi. Click qilmadingiz.";
                adClicked = false;
              }
            });
            
            // Xatolik bo'lsa
            AdController.addEventListener('onError', function(error) {
              console.error("Reklama xatosi:", error);
              showAdButton.disabled = false;
              showAdButton.innerHTML = '<span class="button-icon">▶️</span><span>Reklamani ochish</span>';
              adInfoText.textContent = "Reklama yuklashda xatolik. Qayta urinib ko'ring.";
              showToast("Reklama yuklanishda xatolik", "error");
            });

            console.log("Adsgram SDK muvaffaqiyatli ishga tushdi");
            return true;
          } catch (e) {
            console.error("SDK ishga tushmadi:", e);
            adInfoText.textContent = "Reklama tizimi ishga tushmadi";
            return false;
          }
        }

        // Reklama ochish tugmasi
        showAdButton.addEventListener("click", function () {
          if (!isTelegramEnv() || !currentUser) {
            showToast("Faqat Telegram WebApp ichida ishlaydi", "error");
            return;
          }

          if (!AdController) {
            showToast("Reklama tizimi tayyor emas", "error");
            return;
          }

          adClicked = false;
          adInfoText.textContent = "Reklama ochilmoqda...";

          showAdButton.disabled = true;
          showAdButton.innerHTML = '<span class="button-icon">⏳</span><span>Yuklanmoqda...</span>';

          AdController.show()
            .then(function (result) {
              console.log("Reklama show() natijasi:", result);
            })
            .catch(function (error) {
              console.error("Reklama show() xatosi:", error);
              showAdButton.disabled = false;
              showAdButton.innerHTML = '<span class="button-icon">▶️</span><span>Reklamani ochish</span>';
              adInfoText.textContent = "Reklama ochishda xatolik. Qayta urinib ko'ring.";
              showToast("Reklama ochishda xatolik", "error");
            });
        });

        // === TELEGRAM INIT ===
        function initApp() {
          if (!isTelegramEnv()) {
            envDot.style.background = "#ef4444";
            envBadge.textContent = "BRAUZER";
            envText.textContent = "Faqat Telegram WebApp ichida ishlaydi";
            userCard.style.opacity = "0.5";
            showAdButton.disabled = true;
            // Test rejimi
            currentUser = {
              id: "test_user_" + Date.now(),
              first_name: "Test",
              username: "testuser"
            };
            balance = loadBalanceFromLocal(currentUser.id);
            updateBalanceUI();
            balanceSyncText.textContent = "✓ Test rejim";
            adInfoText.textContent = "Test rejimi: Faqat Telegramda ishlaydi";
            return;
          }

          var tg = window.Telegram.WebApp;
          tg.ready();
          var user = tg.initDataUnsafe.user;

          if (!user || !user.id) {
            envDot.style.background = "#ef4444";
            envText.textContent = "Foydalanuvchi aniqlanmadi";
            return;
          }

          currentUser = {
            id: String(user.id),
            first_name: user.first_name || "",
            last_name: user.last_name || "",
            username: user.username || "",
          };

          var fullName =
            (currentUser.first_name || "") +
            (currentUser.last_name ? " " + currentUser.last_name : "");
          if (!fullName.trim()) {
            fullName = "Telegram User";
          }

          userNameEl.textContent = fullName;
          userUsernameEl.textContent = currentUser.username
            ? "@" + currentUser.username
            : "@user";
          userIdEl.textContent = "ID: " + currentUser.id;

          var initials = "";
          if (currentUser.first_name) {
            initials += currentUser.first_name[0].toUpperCase();
          }
          if (currentUser.last_name) {
            initials += currentUser.last_name[0].toUpperCase();
          }
          if (!initials) {
            initials = "TG";
          }
          avatarInitials.textContent = initials;

          // Balans va reklama hisobini yuklash
          balance = loadBalanceFromLocal(currentUser.id);
          adViewCountToday = loadAdsCountFromLocal(currentUser.id);
          updateBalanceUI();
          adTodayCountEl.textContent = adViewCountToday;
          balanceSyncText.textContent = "✓ Local";
          
          // Serverdan yangilash
          setTimeout(function() {
            loadBalanceFromServer(currentUser.id);
          }, 500);

          envDot.style.background = "#10b981";
          envBadge.textContent = "TELEGRAM";
          envText.textContent = "✓ Muvaffaqiyatli ulandi";

          // Admin tugmasini ko'rsatish
          if (ADMIN_IDS.indexOf(currentUser.id) !== -1) {
            adminButton.style.display = "inline-flex";
          } else {
            adminButton.style.display = "none";
          }

          // Adsgram SDK ni ishga tushirish
          initAdsgramSDK();

          try {
            tg.setHeaderColor("#8b5cf6");
            tg.setBackgroundColor("#1e293b");
          } catch (e) {}
        }

        if (document.readyState === "loading") {
          document.addEventListener("DOMContentLoaded", initApp);
        } else {
          initApp();
        }
      })();
    </script>
 </body>
</html>
