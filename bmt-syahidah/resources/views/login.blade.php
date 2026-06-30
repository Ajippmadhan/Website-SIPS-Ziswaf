<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMT Syahidah IKALUIN — Masuk ke Portal</title>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
/* ════════════════════════════════════════
   DESIGN TOKENS & BASE
════════════════════════════════════════ */
:root {
  --teal-950: #071f1c;
  --teal-900: #0c3b35;
  --teal-700: #145e53;
  --teal-500: #1d8a78;
  --teal-300: #4db8a5;
  --teal-100: #d4f0eb;
  --teal-50:  #edf9f7;
  --gold:     #c9953a;
  --gold-light:#e8b96a;
  --gold-pale:#fef3dc;
  --cream:    #faf7f2;
  --cream-d:  #f0ebe0;
  --sand:     #e0d8c8;
  --white:    #ffffff;
  --ink:      #111827;
  --ink-mid:  #374151;
  --muted:    #6b7280;
  --faint:    #9ca3af;
  --border:   rgba(20,94,83,0.13);
  --danger:   #dc2626;
  --success:  #059669;
  --radius-xl: 20px;
  --radius-lg: 16px;
  --radius-md: 10px;
  --radius-sm: 7px;
  --shadow: 0 8px 30px rgba(12,59,53,0.08);
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
  font-family: 'Plus Jakarta Sans', sans-serif;
  background: var(--cream);
  color: var(--ink);
  min-height: 100vh;
  display: flex;
}

a { text-decoration: none; color: inherit; }

/* ════════ SPLIT LAYOUT ════════ */
.left-panel {
  width: 480px;
  background: linear-gradient(135deg, var(--teal-950) 0%, var(--teal-900) 100%);
  display: flex;
  flex-direction: column;
  padding: 48px;
  position: relative;
  overflow: hidden;
  color: #fff;
  flex-shrink: 0;
}

/* Ornamen Islami & Geometris */
.left-panel::before {
  content: '';
  position: absolute; bottom: -100px; right: -100px;
  width: 400px; height: 400px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,149,58,0.15) 0%, transparent 70%);
  pointer-events: none;
}
.left-panel::after {
  content: '';
  position: absolute; top: -60px; left: -60px;
  width: 250px; height: 250px; border-radius: 50%;
  background: rgba(255,255,255,0.03);
  pointer-events: none;
}
.arabic-bg {
  font-family: 'Amiri', serif;
  font-size: 80px; color: rgba(255,255,255,0.03);
  position: absolute; right: -20px; top: 40%;
  transform: translateY(-50%) rotate(-90deg);
  white-space: nowrap; pointer-events: none;
}

.brand { margin-bottom: auto; position: relative; z-index: 1; }
.brand-arabic {
  font-family: 'Amiri', serif; font-size: 20px; color: var(--gold-light);
  margin-bottom: 8px; letter-spacing: 1px;
}
.brand-name { font-size: 24px; font-weight: 800; line-height: 1.1; }
.brand-sub { font-size: 12px; color: rgba(255,255,255,0.6); margin-top: 4px; }

.welcome-text { position: relative; z-index: 1; margin-bottom: auto; }
.welcome-title { font-size: 32px; font-weight: 800; margin-bottom: 16px; line-height: 1.2; }
.welcome-desc { font-size: 15px; color: rgba(255,255,255,0.7); line-height: 1.6; max-width: 340px; }

.panel-footer { position: relative; z-index: 1; font-size: 12px; color: rgba(255,255,255,0.4); }

/* ════════ RIGHT PANEL (FORM) ════════ */
.right-panel {
  flex: 1;
  display: flex;
  flex-direction: column;
  position: relative;
}

.nav-back {
  position: absolute; top: 32px; right: 40px;
  font-size: 13px; font-weight: 600; color: var(--muted);
  display: flex; align-items: center; gap: 6px; transition: color 0.2s;
}
.nav-back:hover { color: var(--teal-700); }

.form-wrapper {
  margin: auto;
  width: 100%;
  max-width: 400px;
  padding: 40px 0;
}

.form-header { margin-bottom: 32px; text-align: center; }
.form-title { font-size: 26px; font-weight: 800; color: var(--ink); margin-bottom: 8px; }
.form-sub { font-size: 14px; color: var(--muted); }

/* Elements */
.field { display: flex; flex-direction: column; gap: 6px; margin-bottom: 20px; }
.flabel { font-size: 13px; font-weight: 600; color: var(--ink-mid); }
.finput {
  padding: 14px 16px;
  border: 1.5px solid var(--sand);
  border-radius: var(--radius-md);
  font-family: inherit; font-size: 14px;
  color: var(--ink); background: var(--white);
  outline: none; transition: all 0.2s;
  width: 100%;
}
.finput:focus { border-color: var(--teal-500); box-shadow: 0 0 0 3px rgba(29,138,120,0.12); }
.finput::placeholder { color: var(--faint); }

.input-wrap { position: relative; }
.input-action {
  position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
  font-size: 12px; font-weight: 700; color: var(--teal-500);
  cursor: pointer; padding: 4px 8px; border-radius: 6px;
  transition: background 0.15s;
}
.input-action:hover { background: var(--teal-50); }

.form-options {
  display: flex; justify-content: space-between; align-items: center;
  margin-bottom: 28px; font-size: 13px;
}
.checkbox-wrap { display: flex; align-items: center; gap: 8px; cursor: pointer; color: var(--ink-mid); font-weight: 500; }
.checkbox-wrap input { width: 16px; height: 16px; accent-color: var(--teal-700); cursor: pointer; }
.forgot-link { color: var(--teal-700); font-weight: 600; transition: color 0.2s; }
.forgot-link:hover { color: var(--teal-900); text-decoration: underline; }

.btn-primary {
  width: 100%; padding: 16px;
  background: var(--teal-900); color: #fff;
  border: none; border-radius: var(--radius-md);
  font-family: inherit; font-size: 15px; font-weight: 700;
  cursor: pointer; transition: all 0.2s;
  display: flex; justify-content: center; align-items: center; gap: 8px;
}
.btn-primary:hover { background: var(--teal-700); transform: translateY(-2px); box-shadow: var(--shadow); }

.register-prompt {
  text-align: center; margin-top: 32px;
  font-size: 13.5px; color: var(--muted);
}
.register-link { color: var(--gold); font-weight: 700; cursor: pointer; transition: color 0.2s; }
.register-link:hover { color: #b8720a; text-decoration: underline; }

/* Toast Notification */
.toast {
  position: fixed; top: 32px; right: 50%; transform: translateX(50%) translateY(-20px);
  background: var(--teal-900); color: #fff;
  padding: 14px 24px; border-radius: var(--radius-md);
  font-size: 14px; font-weight: 600;
  box-shadow: 0 12px 36px rgba(12,59,53,0.2);
  z-index: 999; opacity: 0; visibility: hidden;
  transition: all 0.3s cubic-bezier(0.34,1.56,0.64,1);
  display: flex; align-items: center; gap: 10px;
}
.toast.show { transform: translateX(50%) translateY(0); opacity: 1; visibility: visible; }

/* Responsive */
@media (max-width: 900px) {
  .left-panel { display: none; }
  .right-panel { padding: 24px; justify-content: center; }
  .nav-back { top: 24px; right: 24px; }
}
</style>
</head>
<body>

  <!-- ════ LEFT PANEL (BRANDING) ════ -->
  <aside class="left-panel">
    <div class="arabic-bg">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</div>
    
    <div class="brand">
      <div class="brand-arabic">بيت المال والتمويل</div>
      <div class="brand-name">BMT Syahidah</div>
      <div class="brand-sub">Koperasi Syariah IKALUIN</div>
    </div>

    <div class="welcome-text">
      <h1 class="welcome-title">Selamat Datang Kembali.</h1>
      <p class="welcome-desc">Masuk ke portal digital untuk memantau portofolio simpanan, mengelola pembiayaan, dan menyalurkan ZIS Anda secara transparan.</p>
    </div>

    <div class="panel-footer">
      &copy; 2026 BMT Syahidah IKALUIN. Hak Cipta Dilindungi.
    </div>
  </aside>

  <!-- ════ RIGHT PANEL (FORM) ════ -->
  <main class="right-panel">
    <a href="index.html" class="nav-back">← Kembali ke Beranda</a>

    <div class="form-wrapper">
      <div class="form-header">
        <h2 class="form-title">Masuk Akun</h2>
        <p class="form-sub">Masukkan kredensial akun BMT Anda</p>
      </div>

      <form id="loginForm" onsubmit="handleLogin(event)">
        <div class="field">
          <label class="flabel">No. Anggota / Email</label>
          <input type="text" class="finput" id="emailInput" placeholder="Contoh: BMT-2024-0029 atau email" required>
        </div>

        <div class="field">
          <label class="flabel">Kata Sandi</label>
          <div class="input-wrap">
            <input type="password" class="finput" id="pwInput" placeholder="Masukkan kata sandi Anda" required>
            <span class="input-action" onclick="togglePw()">Lihat</span>
          </div>
        </div>

        <div class="form-options">
          <label class="checkbox-wrap">
            <input type="checkbox" id="rememberMe"> Ingat Saya
          </label>
          <a href="#" class="forgot-link" onclick="toast('Tautan reset kata sandi telah dikirim ke email Anda.')">Lupa Kata Sandi?</a>
        </div>

        <button type="submit" class="btn-primary" id="loginBtn">Masuk ke Portal</button>
      </form>

      <div class="register-prompt">
        Belum menjadi anggota? 
        <a href="registrasi.html" class="register-link">Daftar Sekarang</a>
      </div>
    </div>
  </main>

  <div class="toast" id="toast-el">✅ Berhasil masuk! Mengalihkan...</div>

  <script>
    // Toggle Password Visibility
    function togglePw() {
      const pwInput = document.getElementById('pwInput');
      const actionBtn = document.querySelector('.input-action');
      
      if (pwInput.type === 'password') {
        pwInput.type = 'text';
        actionBtn.textContent = 'Tutup';
      } else {
        pwInput.type = 'password';
        actionBtn.textContent = 'Lihat';
      }
    }

    // Handle Login Submit
    function handleLogin(e) {
      e.preventDefault(); // Mencegah form reload bawaan browser
      
      const btn = document.getElementById('loginBtn');
      const email = document.getElementById('emailInput').value;
      const pw = document.getElementById('pwInput').value;

      if(email && pw) {
        // Efek loading pada tombol
        btn.innerHTML = 'Memverifikasi...';
        btn.style.opacity = '0.8';
        btn.style.cursor = 'wait';

        // Tampilkan toast
        toast('✅ Kredensial valid! Mengalihkan ke portal anggota...');

        // Simulasi proses jaringan (delay 1.5 detik), lalu pindah ke halaman anggota
        setTimeout(() => {
          window.location.href = '/portal';
        }, 1500);
      }
    }

    // Toast Notification System
    let tTimer;
    function toast(msg) {
      const el = document.getElementById('toast-el');
      el.textContent = msg;
      el.classList.add('show');
      
      clearTimeout(tTimer);
      tTimer = setTimeout(() => {
        el.classList.remove('show');
      }, 3000);
    }
  </script>
</body>
</html>