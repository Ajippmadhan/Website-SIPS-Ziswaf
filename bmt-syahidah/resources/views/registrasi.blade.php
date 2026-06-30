<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMT Syahidah IKALUIN — Daftar Akun</title>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
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
  --danger-bg:#fef2f2;
  --success:  #059669;
  --success-bg:#ecfdf5;
  --r-lg: 16px;
  --r-md: 10px;
  --r-sm: 7px;
  --shadow: 0 4px 28px rgba(12,59,53,0.10);
}

* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family: 'Plus Jakarta Sans', sans-serif;
  min-height: 100vh;
  display: flex;
  background: var(--cream);
  color: var(--ink);
}

/* ════ SPLIT LAYOUT ════ */
.left-panel {
  width: 420px;
  flex-shrink: 0;
  background: var(--teal-900);
  display: flex;
  flex-direction: column;
  padding: 48px 44px;
  position: fixed;
  top: 0; left: 0; bottom: 0;
  overflow: hidden;
}

/* Geometric ornament */
.left-panel::before {
  content: '';
  position: absolute; bottom: -80px; right: -80px;
  width: 320px; height: 320px; border-radius: 50%;
  background: rgba(201,149,58,0.10);
  pointer-events: none;
}
.left-panel::after {
  content: '';
  position: absolute; top: -60px; left: -60px;
  width: 220px; height: 220px; border-radius: 50%;
  background: rgba(255,255,255,0.03);
  pointer-events: none;
}

.brand {
  margin-bottom: 52px;
  position: relative; z-index: 1;
}
.brand-arabic {
  font-family: 'Amiri', serif;
  font-size: 20px;
  color: var(--gold-light);
  opacity: 0.85;
  margin-bottom: 10px;
  letter-spacing: 1px;
}
.brand-name {
  font-size: 22px; font-weight: 800; color: #fff; line-height: 1.1;
}
.brand-sub {
  font-size: 12px; color: rgba(255,255,255,0.5); margin-top: 5px; font-weight: 400;
  line-height: 1.5;
}

/* Stepper */
.stepper {
  display: flex; flex-direction: column; gap: 0;
  position: relative; z-index: 1; flex: 1;
}
.step-item {
  display: flex; gap: 16px; align-items: flex-start;
  padding-bottom: 32px;
  position: relative;
}
.step-item:last-child { padding-bottom: 0; }
.step-item:not(:last-child)::before {
  content: '';
  position: absolute;
  left: 15px; top: 36px;
  width: 2px;
  height: calc(100% - 28px);
  background: rgba(255,255,255,0.12);
}
.step-item.done:not(:last-child)::before { background: rgba(201,149,58,0.4); }
.step-item.active:not(:last-child)::before { background: rgba(255,255,255,0.12); }

.step-circle {
  width: 32px; height: 32px; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 13px; font-weight: 700;
  flex-shrink: 0;
  border: 2px solid rgba(255,255,255,0.18);
  color: rgba(255,255,255,0.4);
  background: transparent;
  transition: all 0.3s;
  position: relative; z-index: 1;
}
.step-item.done .step-circle {
  background: var(--gold);
  border-color: var(--gold);
  color: #fff;
}
.step-item.active .step-circle {
  background: var(--white);
  border-color: var(--white);
  color: var(--teal-900);
}

.step-text { padding-top: 4px; }
.step-label {
  font-size: 13px; font-weight: 700;
  color: rgba(255,255,255,0.35);
  transition: color 0.3s;
}
.step-item.done .step-label { color: var(--gold-light); }
.step-item.active .step-label { color: #fff; }
.step-desc {
  font-size: 11.5px; color: rgba(255,255,255,0.25);
  margin-top: 2px; line-height: 1.5;
}
.step-item.active .step-desc { color: rgba(255,255,255,0.55); }

.panel-footer {
  position: relative; z-index: 1;
  margin-top: auto; padding-top: 32px;
  border-top: 1px solid rgba(255,255,255,0.08);
}
.panel-footer-text { font-size: 12px; color: rgba(255,255,255,0.35); line-height: 1.6; }
.panel-footer-link { color: var(--gold-light); cursor: pointer; font-weight: 600; }
.panel-footer-link:hover { text-decoration: underline; }

/* ════ RIGHT PANEL ════ */
.right-panel {
  margin-left: 420px;
  flex: 1;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  padding: 48px 40px;
  min-height: 100vh;
}

.form-container {
  width: 100%;
  max-width: 540px;
}

/* Step Header */
.step-header { margin-bottom: 32px; }
.step-eyebrow {
  font-size: 11px; font-weight: 700; letter-spacing: 1.2px;
  text-transform: uppercase; color: var(--teal-500);
  margin-bottom: 8px;
}
.step-main-title {
  font-size: 26px; font-weight: 800; color: var(--ink);
  line-height: 1.2; margin-bottom: 8px;
}
.step-main-desc { font-size: 13.5px; color: var(--muted); line-height: 1.6; }

/* Progress bar */
.progress-bar-top {
  height: 4px; background: var(--cream-d);
  border-radius: 99px; overflow: hidden;
  margin-bottom: 36px;
}
.progress-fill {
  height: 100%; border-radius: 99px;
  background: linear-gradient(90deg, var(--teal-700), var(--teal-300));
  transition: width 0.5s cubic-bezier(0.4,0,0.2,1);
}

/* ════ FORM ELEMENTS ════ */
.form-section { margin-bottom: 24px; }
.section-title-sm {
  font-size: 12px; font-weight: 700; color: var(--muted);
  text-transform: uppercase; letter-spacing: 0.8px;
  margin-bottom: 14px;
  padding-bottom: 8px;
  border-bottom: 1px solid var(--border);
}

.field-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.field { display: flex; flex-direction: column; gap: 5px; }
.field.full { grid-column: 1 / -1; }

.flabel {
  font-size: 12px; font-weight: 600; color: var(--ink-mid);
  display: flex; align-items: center; gap: 5px;
}
.required-star { color: var(--danger); font-size: 13px; line-height: 1; }
.optional-tag {
  font-size: 10px; font-weight: 500; color: var(--faint);
  background: var(--cream-d); padding: 1px 6px; border-radius: 4px;
}

.finput, .fselect, .ftextarea {
  padding: 11px 14px;
  border: 1.5px solid var(--sand);
  border-radius: var(--r-md);
  font-family: inherit; font-size: 13.5px;
  color: var(--ink); background: var(--white);
  outline: none;
  transition: border-color 0.18s, box-shadow 0.18s;
  width: 100%;
}
.finput:focus, .fselect:focus, .ftextarea:focus {
  border-color: var(--teal-500);
  box-shadow: 0 0 0 3px rgba(29,138,120,0.12);
}
.finput::placeholder, .ftextarea::placeholder { color: var(--faint); }
.finput.error { border-color: var(--danger); box-shadow: 0 0 0 3px rgba(220,38,38,0.10); }
.finput.valid { border-color: var(--success); }
.ftextarea { resize: vertical; min-height: 80px; }

/* Input with icon */
.input-wrap { position: relative; }
.input-icon {
  position: absolute; left: 13px; top: 50%; transform: translateY(-50%);
  color: var(--faint); font-size: 16px; pointer-events: none;
}
.input-wrap .finput { padding-left: 38px; }
.input-suffix {
  position: absolute; right: 13px; top: 50%; transform: translateY(-50%);
  font-size: 12px; font-weight: 600; color: var(--muted);
  pointer-events: none;
}
.input-wrap.has-suffix .finput { padding-right: 48px; }
.input-action {
  position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
  font-size: 12px; font-weight: 700; color: var(--teal-500);
  cursor: pointer; padding: 3px 6px; border-radius: 5px;
  transition: background 0.12s;
}
.input-action:hover { background: var(--teal-50); }

.field-hint { font-size: 11px; color: var(--faint); line-height: 1.5; margin-top: 3px; }
.field-error { font-size: 11.5px; color: var(--danger); margin-top: 3px; display: none; }
.field-error.show { display: block; }

/* NIK check result */
.nik-result {
  display: flex; align-items: center; gap: 8px;
  padding: 10px 12px; border-radius: var(--r-sm);
  font-size: 12px; margin-top: 8px; display: none;
}
.nik-result.show { display: flex; }
.nik-result.ok { background: var(--success-bg); color: var(--success); border: 1px solid rgba(5,150,105,0.2); }
.nik-result.err { background: var(--danger-bg); color: var(--danger); border: 1px solid rgba(220,38,38,0.15); }

/* Status Keanggotaan tiles */
.membership-tiles { display: grid; grid-template-columns: repeat(3,1fr); gap: 10px; }
.mem-tile {
  border: 1.5px solid var(--sand);
  border-radius: var(--r-md);
  padding: 14px 12px;
  cursor: pointer; transition: all 0.18s;
  text-align: center;
}
.mem-tile:hover { border-color: var(--teal-300); background: var(--teal-50); }
.mem-tile.selected {
  border-color: var(--teal-700);
  background: var(--teal-50);
  box-shadow: 0 0 0 3px rgba(29,138,120,0.12);
}
.mem-icon { font-size: 24px; margin-bottom: 6px; display: block; }
.mem-label { font-size: 12px; font-weight: 700; color: var(--ink-mid); }
.mem-sub { font-size: 10.5px; color: var(--faint); margin-top: 2px; }

/* Password strength */
.pw-strength-bar {
  display: flex; gap: 4px; margin-top: 8px;
}
.pw-seg { height: 4px; flex: 1; border-radius: 99px; background: var(--sand); transition: background 0.3s; }
.pw-seg.weak { background: var(--danger); }
.pw-seg.medium { background: var(--gold); }
.pw-seg.strong { background: var(--success); }
.pw-strength-label { font-size: 11px; margin-top: 4px; color: var(--faint); }

/* ════ UPLOAD ZONE ════ */
.upload-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.upload-zone {
  border: 2px dashed var(--sand);
  border-radius: var(--r-lg);
  padding: 22px 16px;
  text-align: center;
  cursor: pointer;
  transition: all 0.2s;
  background: var(--white);
  position: relative;
}
.upload-zone:hover { border-color: var(--teal-300); background: var(--teal-50); }
.upload-zone.has-file { border-color: var(--success); border-style: solid; background: var(--success-bg); }
.upload-zone input[type=file] {
  position: absolute; inset: 0; opacity: 0; cursor: pointer;
}
.upload-icon { font-size: 28px; margin-bottom: 8px; }
.upload-title { font-size: 12.5px; font-weight: 700; color: var(--ink-mid); margin-bottom: 4px; }
.upload-hint { font-size: 11px; color: var(--faint); line-height: 1.4; }
.upload-check { font-size: 20px; display: none; margin-bottom: 6px; }
.upload-filename { font-size: 11px; font-weight: 600; color: var(--success); display: none; }
.upload-zone.has-file .upload-icon { display: none; }
.upload-zone.has-file .upload-check { display: block; }
.upload-zone.has-file .upload-filename { display: block; }
.upload-zone.has-file .upload-title { color: var(--success); }
.upload-zone.has-file .upload-hint { display: none; }

/* Selfie frame */
.selfie-zone {
  border: 2px dashed var(--sand);
  border-radius: 50%;
  width: 120px; height: 120px;
  margin: 0 auto 16px;
  display: flex; align-items: center; justify-content: center;
  flex-direction: column; cursor: pointer;
  transition: all 0.2s; position: relative;
  background: var(--cream);
}
.selfie-zone:hover { border-color: var(--teal-300); background: var(--teal-50); }
.selfie-zone input { position: absolute; inset: 0; opacity: 0; cursor: pointer; border-radius: 50%; }
.selfie-icon { font-size: 32px; }
.selfie-label { font-size: 10.5px; color: var(--faint); text-align: center; margin-top: 4px; line-height: 1.3; }

/* ════ PRODUK STEP ════ */
.product-grid { display: flex; flex-direction: column; gap: 10px; }
.prod-option {
  border: 1.5px solid var(--sand);
  border-radius: var(--r-lg);
  padding: 16px 18px;
  cursor: pointer; transition: all 0.18s;
  display: flex; gap: 14px; align-items: flex-start;
  background: var(--white);
}
.prod-option:hover { border-color: var(--teal-300); }
.prod-option.selected {
  border-color: var(--teal-700);
  background: var(--teal-50);
  box-shadow: 0 0 0 3px rgba(29,138,120,0.10);
}
.prod-radio {
  width: 18px; height: 18px; border-radius: 50%;
  border: 2px solid var(--sand);
  margin-top: 2px; flex-shrink: 0;
  display: flex; align-items: center; justify-content: center;
  transition: all 0.18s;
}
.prod-option.selected .prod-radio {
  border-color: var(--teal-700);
  background: var(--teal-700);
}
.prod-option.selected .prod-radio::after {
  content: '';
  width: 6px; height: 6px; border-radius: 50%; background: #fff;
}
.prod-icon-lg { font-size: 28px; flex-shrink: 0; }
.prod-info { flex: 1; }
.prod-name { font-size: 14px; font-weight: 700; color: var(--ink); margin-bottom: 2px; }
.prod-akad-badge {
  display: inline-block; font-size: 10px; font-weight: 700;
  padding: 2px 7px; border-radius: 20px;
  background: var(--teal-100); color: var(--teal-700);
  margin-bottom: 5px; letter-spacing: 0.3px;
}
.prod-desc { font-size: 12px; color: var(--muted); line-height: 1.5; }
.prod-rate {
  text-align: right; flex-shrink: 0;
}
.prod-rate-val { font-size: 16px; font-weight: 800; color: var(--teal-700); }
.prod-rate-label { font-size: 10px; color: var(--faint); margin-top: 1px; }

.setoran-box {
  background: var(--gold-pale);
  border: 1px solid rgba(201,149,58,0.22);
  border-radius: var(--r-md);
  padding: 14px 16px;
  margin-top: 14px;
}
.setoran-label { font-size: 11px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }

/* ════ KONFIRMASI STEP ════ */
.konfirm-section { margin-bottom: 20px; }
.konfirm-title {
  font-size: 11px; font-weight: 700; text-transform: uppercase;
  letter-spacing: 0.8px; color: var(--muted);
  padding: 12px 16px; background: var(--cream);
  border-radius: var(--r-sm) var(--r-sm) 0 0;
  border: 1px solid var(--border);
  border-bottom: none;
}
.konfirm-body {
  border: 1px solid var(--border);
  border-radius: 0 0 var(--r-sm) var(--r-sm);
  overflow: hidden;
}
.konfirm-row {
  display: flex; align-items: center;
  padding: 11px 16px;
  border-bottom: 1px solid var(--border);
}
.konfirm-row:last-child { border-bottom: none; }
.konfirm-row-label { font-size: 12px; color: var(--muted); width: 160px; flex-shrink: 0; }
.konfirm-row-val { font-size: 13px; font-weight: 600; color: var(--ink); flex: 1; }
.konfirm-row-badge {
  font-size: 10.5px; font-weight: 700;
  padding: 2px 8px; border-radius: 20px;
}
.badge-green { background: var(--teal-100); color: var(--teal-700); }
.badge-gold { background: var(--gold-pale); color: var(--gold); }

/* Akad box */
.akad-consent {
  background: var(--cream);
  border: 1px solid var(--border);
  border-radius: var(--r-md);
  padding: 16px 18px;
  margin-bottom: 20px;
}
.akad-arabic {
  font-family: 'Amiri', serif;
  font-size: 18px; color: var(--teal-900);
  text-align: center; margin-bottom: 8px; line-height: 1.8;
}
.akad-text { font-size: 12px; color: var(--ink-mid); line-height: 1.7; }

/* Checkbox */
.check-row {
  display: flex; align-items: flex-start; gap: 10px;
  margin-bottom: 12px;
}
.check-row input[type=checkbox] {
  width: 16px; height: 16px;
  margin-top: 2px; flex-shrink: 0;
  accent-color: var(--teal-700);
  cursor: pointer;
}
.check-label { font-size: 12.5px; color: var(--ink-mid); line-height: 1.6; cursor: pointer; }
.check-link { color: var(--teal-500); font-weight: 600; text-decoration: underline; cursor: pointer; }

/* ════ BUTTONS ════ */
.btn-row { display: flex; gap: 12px; margin-top: 28px; }
.btn-next {
  flex: 1; padding: 14px 24px;
  background: var(--teal-900); color: #fff;
  border: none; border-radius: var(--r-md);
  font-family: inherit; font-size: 14px; font-weight: 700;
  cursor: pointer; transition: all 0.2s;
  display: flex; align-items: center; justify-content: center; gap: 8px;
}
.btn-next:hover { background: var(--teal-700); transform: translateY(-1px); box-shadow: 0 4px 18px rgba(12,59,53,0.22); }
.btn-next:disabled { background: var(--sand); color: var(--faint); cursor: not-allowed; transform: none; box-shadow: none; }
.btn-back {
  padding: 14px 20px;
  background: transparent; color: var(--teal-700);
  border: 1.5px solid var(--teal-300);
  border-radius: var(--r-md);
  font-family: inherit; font-size: 14px; font-weight: 600;
  cursor: pointer; transition: all 0.15s;
  display: flex; align-items: center; gap: 6px;
}
.btn-back:hover { background: var(--teal-50); }

/* ════ SUCCESS STATE ════ */
.success-screen {
  text-align: center; padding: 20px 0 40px;
}
.success-ring {
  width: 90px; height: 90px; border-radius: 50%;
  background: var(--teal-100);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 24px;
  font-size: 40px;
  animation: popIn 0.4s cubic-bezier(0.34,1.56,0.64,1) both;
}
@keyframes popIn { from {transform:scale(0.5);opacity:0} to {transform:scale(1);opacity:1} }
.success-title { font-size: 24px; font-weight: 800; color: var(--ink); margin-bottom: 8px; }
.success-sub { font-size: 13.5px; color: var(--muted); line-height: 1.7; max-width: 380px; margin: 0 auto 28px; }
.no-anggota-box {
  background: var(--teal-900);
  border-radius: var(--r-lg); padding: 22px 28px;
  margin-bottom: 24px; text-align: left;
  display: flex; align-items: center; justify-content: space-between; gap: 20px;
}
.no-anggota-label { font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
.no-anggota-val {
  font-size: 22px; font-weight: 800; color: #fff;
  font-family: 'DM Mono', monospace; letter-spacing: 2px;
}
.success-steps { text-align: left; }
.success-step { display: flex; gap: 12px; padding: 10px 0; border-bottom: 1px solid var(--border); }
.success-step:last-child { border-bottom: none; }
.ss-num {
  width: 22px; height: 22px; border-radius: 50%;
  background: var(--teal-100); color: var(--teal-700);
  font-size: 11px; font-weight: 700;
  display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px;
}
.ss-text { font-size: 13px; color: var(--ink-mid); line-height: 1.5; }
.btn-masuk {
  width: 100%; padding: 14px;
  background: var(--teal-900); color: #fff;
  border: none; border-radius: var(--r-md);
  font-family: inherit; font-size: 15px; font-weight: 700;
  cursor: pointer; transition: all 0.2s; margin-top: 24px;
}
.btn-masuk:hover { background: var(--teal-700); transform: translateY(-1px); }

/* Already have account */
.login-hint {
  text-align: center; margin-top: 24px;
  font-size: 13px; color: var(--muted);
}
.login-link { color: var(--teal-500); font-weight: 700; cursor: pointer; }
.login-link:hover { text-decoration: underline; }

/* OTP boxes */
.otp-row { display: flex; gap: 10px; margin: 18px 0; }
.otp-box {
  flex: 1; height: 54px;
  border: 1.5px solid var(--sand); border-radius: var(--r-md);
  font-size: 22px; font-weight: 700; text-align: center;
  font-family: 'DM Mono', monospace; color: var(--teal-900);
  outline: none; transition: all 0.15s;
  background: var(--white);
}
.otp-box:focus { border-color: var(--teal-500); box-shadow: 0 0 0 3px rgba(29,138,120,0.12); }

/* Toast */
.toast {
  position: fixed; bottom: 24px; right: 24px;
  background: var(--teal-900); color: #fff;
  padding: 13px 18px; border-radius: var(--r-md);
  font-size: 13px; font-weight: 500;
  box-shadow: 0 8px 28px rgba(12,59,53,0.28);
  z-index: 999;
  transform: translateY(70px); opacity: 0;
  transition: all 0.3s cubic-bezier(0.34,1.56,0.64,1);
  display: flex; align-items: center; gap: 8px;
  max-width: 340px;
}
.toast.show { transform: translateY(0); opacity: 1; }

/* Scrollbar */
::-webkit-scrollbar { width: 5px; }
::-webkit-scrollbar-track { background: transparent; }
::-webkit-scrollbar-thumb { background: var(--sand); border-radius: 99px; }
</style>
</head>
<body>

<!-- ════ LEFT PANEL ════ -->
<aside class="left-panel">
  <div class="brand">
    <div class="brand-arabic">بيت المال والتمويل</div>
    <div class="brand-name">BMT Syahidah<br>IKALUIN</div>
    <div class="brand-sub">Koperasi Syariah Alumni<br>UIN Syarif Hidayatullah Jakarta</div>
  </div>

  <div class="stepper" id="stepper">
    <div class="step-item active" id="step-item-1">
      <div class="step-circle" id="sc-1">1</div>
      <div class="step-text">
        <div class="step-label">Data Diri</div>
        <div class="step-desc">Identitas dan kontak pribadi</div>
      </div>
    </div>
    <div class="step-item" id="step-item-2">
      <div class="step-circle" id="sc-2">2</div>
      <div class="step-text">
        <div class="step-label">Dokumen</div>
        <div class="step-desc">Upload KTP, KK, dan pas foto</div>
      </div>
    </div>
    <div class="step-item" id="step-item-3">
      <div class="step-circle" id="sc-3">3</div>
      <div class="step-text">
        <div class="step-label">Pilih Produk</div>
        <div class="step-desc">Produk simpanan & setoran awal</div>
      </div>
    </div>
    <div class="step-item" id="step-item-4">
      <div class="step-circle" id="sc-4">4</div>
      <div class="step-text">
        <div class="step-label">Konfirmasi</div>
        <div class="step-desc">Baca akad & kirim pendaftaran</div>
      </div>
    </div>
  </div>

  <div class="panel-footer">
    <div class="panel-footer-text">
      Sudah punya akun?<br>
      <span class="panel-footer-link" onclick="window.location.href='/login'">Masuk ke Portal Anggota →</span>
    </div>
  </div>
</aside>

<!-- ════ RIGHT PANEL ════ -->
<main class="right-panel">
  <div class="form-container">

    <!-- Progress bar -->
    <div class="progress-bar-top">
      <div class="progress-fill" id="progress-fill" style="width:25%"></div>
    </div>

    <!-- ═══ STEP 1: DATA DIRI ═══ -->
    <div id="step-1">
      <div class="step-header">
        <div class="step-eyebrow">Langkah 1 dari 4</div>
        <div class="step-main-title">Isi Data Diri Anda</div>
        <div class="step-main-desc">Pastikan data sesuai dengan KTP yang berlaku. Data ini akan diverifikasi oleh tim BMT Syahidah.</div>
      </div>

      <!-- Identitas -->
      <div class="form-section">
        <div class="section-title-sm">Identitas Diri</div>
        <div class="field-grid">
          <div class="field full">
            <label class="flabel">Nama Lengkap (sesuai KTP) <span class="required-star">*</span></label>
            <input class="finput" type="text" placeholder="Contoh: Muhammad Rizky Pratama" id="f-nama">
          </div>
          <div class="field">
            <label class="flabel">Nomor Induk Kependudukan (NIK) <span class="required-star">*</span></label>
            <div class="input-wrap">
              <input class="finput" type="text" placeholder="16 digit angka" id="f-nik" maxlength="16" oninput="checkNik(this)">
              <span class="input-action" onclick="verifyNik()" id="nik-verify-btn" style="display:none">Verifikasi</span>
            </div>
            <div class="nik-result" id="nik-result-ok">✓ NIK valid dan belum terdaftar</div>
            <div class="nik-result err" id="nik-result-err" style="display:none">✕ NIK sudah terdaftar dalam sistem</div>
          </div>
          <div class="field">
            <label class="flabel">Tempat Lahir <span class="required-star">*</span></label>
            <input class="finput" type="text" placeholder="Kota/Kabupaten" id="f-ttl-tempat">
          </div>
          <div class="field">
            <label class="flabel">Tanggal Lahir <span class="required-star">*</span></label>
            <input class="finput" type="date" id="f-ttl-tgl">
          </div>
          <div class="field">
            <label class="flabel">Jenis Kelamin <span class="required-star">*</span></label>
            <select class="fselect">
              <option value="">— Pilih —</option>
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
          </div>
          <div class="field">
            <label class="flabel">Agama <span class="required-star">*</span></label>
            <select class="fselect">
              <option value="">— Pilih —</option>
              <option selected>Islam</option>
              <option>Lainnya</option>
            </select>
          </div>
          <div class="field full">
            <label class="flabel">Alamat Sesuai KTP <span class="required-star">*</span></label>
            <textarea class="ftextarea" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos" id="f-alamat"></textarea>
          </div>
        </div>
      </div>

      <!-- Status Keanggotaan -->
      <div class="form-section">
        <div class="section-title-sm">Status Keanggotaan</div>
        <div class="membership-tiles" id="membership-tiles">
          <div class="mem-tile selected" onclick="selectMem(this)">
            <span class="mem-icon">🎓</span>
            <div class="mem-label">Alumni</div>
            <div class="mem-sub">Lulusan UIN Jakarta</div>
          </div>
          <div class="mem-tile" onclick="selectMem(this)">
            <span class="mem-icon">📚</span>
            <div class="mem-label">Mahasiswa</div>
            <div class="mem-sub">Mahasiswa aktif</div>
          </div>
          <div class="mem-tile" onclick="selectMem(this)">
            <span class="mem-icon">👔</span>
            <div class="mem-label">Dosen/Pegawai</div>
            <div class="mem-sub">Sivitas akademika</div>
          </div>
          <div class="mem-tile" onclick="selectMem(this)">
            <span class="mem-icon">🌍</span>
            <div class="mem-label">Umum</div>
            <div class="mem-sub">Masyarakat sekitar</div>
          </div>
          <div class="mem-tile" onclick="selectMem(this)">
            <span class="mem-icon">🏢</span>
            <div class="mem-label">Institusi</div>
            <div class="mem-sub">Lembaga/Yayasan</div>
          </div>
          <div class="mem-tile" onclick="selectMem(this)">
            <span class="mem-icon">🕌</span>
            <div class="mem-label">Pesantren</div>
            <div class="mem-sub">Santri/Ustaz</div>
          </div>
        </div>
      </div>

      <!-- Kontak & Akun -->
      <div class="form-section">
        <div class="section-title-sm">Kontak & Akun</div>
        <div class="field-grid">
          <div class="field">
            <label class="flabel">Nomor Handphone <span class="required-star">*</span></label>
            <div class="input-wrap">
              <input class="finput" type="tel" placeholder="08xx-xxxx-xxxx" id="f-hp">
              <span class="input-suffix">+62</span>
            </div>
            <div class="field-hint">Nomor aktif untuk menerima OTP</div>
          </div>
          <div class="field">
            <label class="flabel">Alamat Email <span class="required-star">*</span></label>
            <input class="finput" type="email" placeholder="nama@email.com" id="f-email">
          </div>
          <div class="field">
            <label class="flabel">Kata Sandi <span class="required-star">*</span></label>
            <div class="input-wrap">
              <input class="finput" type="password" placeholder="Min. 8 karakter" id="f-pw" oninput="checkPw(this)">
              <span class="input-action" onclick="togglePw('f-pw')" id="pw-toggle">Lihat</span>
            </div>
            <div class="pw-strength-bar">
              <div class="pw-seg" id="ps1"></div>
              <div class="pw-seg" id="ps2"></div>
              <div class="pw-seg" id="ps3"></div>
              <div class="pw-seg" id="ps4"></div>
            </div>
            <div class="pw-strength-label" id="pw-label">Masukkan kata sandi</div>
          </div>
          <div class="field">
            <label class="flabel">Konfirmasi Kata Sandi <span class="required-star">*</span></label>
            <div class="input-wrap">
              <input class="finput" type="password" placeholder="Ulangi kata sandi" id="f-pw2">
              <span class="input-action" onclick="togglePw('f-pw2')">Lihat</span>
            </div>
            <div class="field-error show" id="pw-match-err" style="display:none">Kata sandi tidak cocok</div>
          </div>
          <div class="field">
            <label class="flabel">Nomor Referral <span class="optional-tag">Opsional</span></label>
            <input class="finput" type="text" placeholder="Kode dari anggota lain">
            <div class="field-hint">Masukkan jika Anda direkrut oleh anggota BMT</div>
          </div>
        </div>
      </div>

      <div class="btn-row">
        <button class="btn-next" onclick="goStep(2)">Lanjut: Upload Dokumen →</button>
      </div>
      <div class="login-hint">Sudah punya akun? <span class="login-link" onclick="window.location.href='/login'">Masuk sekarang</span></div>
    </div>

    <!-- ═══ STEP 2: DOKUMEN ═══ -->
    <div id="step-2" style="display:none">
      <div class="step-header">
        <div class="step-eyebrow">Langkah 2 dari 4</div>
        <div class="step-main-title">Upload Dokumen</div>
        <div class="step-main-desc">Upload dokumen identitas Anda dalam format JPG, PNG, atau PDF. Pastikan foto jelas dan tidak buram.</div>
      </div>

      <div class="form-section">
        <div class="section-title-sm">Dokumen Wajib</div>
        <div class="upload-grid">
          <div class="upload-zone" id="uz-ktp">
            <input type="file" accept="image/*,application/pdf" onchange="fileSelected(this,'uz-ktp','fn-ktp')">
            <div class="upload-check">✅</div>
            <div class="upload-icon">🪪</div>
            <div class="upload-title">KTP (e-KTP)</div>
            <div class="upload-hint">Foto KTP asli, semua teks terbaca jelas<br>Maks. 5 MB</div>
            <div class="upload-filename" id="fn-ktp"></div>
          </div>
          <div class="upload-zone" id="uz-kk">
            <input type="file" accept="image/*,application/pdf" onchange="fileSelected(this,'uz-kk','fn-kk')">
            <div class="upload-check">✅</div>
            <div class="upload-icon">📄</div>
            <div class="upload-title">Kartu Keluarga (KK)</div>
            <div class="upload-hint">Foto/scan KK, halaman pertama<br>Maks. 5 MB</div>
            <div class="upload-filename" id="fn-kk"></div>
          </div>
        </div>
      </div>

      <div class="form-section">
        <div class="section-title-sm">Pas Foto</div>
        <div style="text-align:center">
          <div class="selfie-zone" id="uz-foto">
            <input type="file" accept="image/*" capture="user" onchange="fileSelected(this,'uz-foto','fn-foto')">
            <div class="upload-check" id="selfie-check">✅</div>
            <div class="selfie-icon" id="selfie-icon">🤳</div>
            <div class="selfie-label" id="selfie-label">Pas Foto<br>3×4</div>
          </div>
          <div class="upload-filename" id="fn-foto" style="margin-top:6px"></div>
          <div class="field-hint" style="margin-top:6px">Foto terbaru, latar polos. Format JPG/PNG, maks. 2 MB.</div>
        </div>
      </div>

      <div class="form-section">
        <div class="section-title-sm">Dokumen Pendukung (Opsional)</div>
        <div class="upload-grid">
          <div class="upload-zone" id="uz-ijazah">
            <input type="file" accept="image/*,application/pdf" onchange="fileSelected(this,'uz-ijazah','fn-ijazah')">
            <div class="upload-check">✅</div>
            <div class="upload-icon">🎓</div>
            <div class="upload-title">Ijazah/Transkip</div>
            <div class="upload-hint">Untuk anggota Alumni/Mahasiswa<br>Maks. 5 MB</div>
            <div class="upload-filename" id="fn-ijazah"></div>
          </div>
          <div class="upload-zone" id="uz-slip">
            <input type="file" accept="image/*,application/pdf" onchange="fileSelected(this,'uz-slip','fn-slip')">
            <div class="upload-check">✅</div>
            <div class="upload-icon">💼</div>
            <div class="upload-title">Slip Gaji / SIUP</div>
            <div class="upload-hint">Untuk kelengkapan profil ekonomi<br>Maks. 5 MB</div>
            <div class="upload-filename" id="fn-slip"></div>
          </div>
        </div>
      </div>

      <div style="background:var(--teal-50);border:1px solid var(--teal-100);border-radius:var(--r-md);padding:14px 16px;font-size:12.5px;color:var(--teal-900);line-height:1.6;margin-bottom:4px">
        🔒 <strong>Privasi terjamin.</strong> Dokumen Anda dienkripsi dan hanya digunakan untuk keperluan verifikasi keanggotaan BMT Syahidah IKALUIN sesuai ketentuan perlindungan data pribadi.
      </div>

      <div class="btn-row">
        <button class="btn-back" onclick="goStep(1)">← Kembali</button>
        <button class="btn-next" onclick="goStep(3)">Lanjut: Pilih Produk →</button>
      </div>
    </div>

    <!-- ═══ STEP 3: PRODUK ═══ -->
    <div id="step-3" style="display:none">
      <div class="step-header">
        <div class="step-eyebrow">Langkah 3 dari 4</div>
        <div class="step-main-title">Pilih Produk Simpanan</div>
        <div class="step-main-desc">Pilih satu produk simpanan utama untuk memulai keanggotaan. Anda dapat menambah produk lain setelah akun aktif.</div>
      </div>

      <div class="form-section">
        <div class="section-title-sm">Produk Simpanan Tersedia</div>
        <div class="product-grid" id="product-grid">
          <div class="prod-option selected" onclick="selectProd(this,'simpanan-syahida')">
            <div class="prod-radio"></div>
            <div class="prod-icon-lg">💼</div>
            <div class="prod-info">
              <div class="prod-name">Simpanan Syahida</div>
              <div class="prod-akad-badge">Wadiah Yad Dhamanah</div>
              <div class="prod-desc">Simpanan utama yang fleksibel — bisa disetor dan ditarik kapan saja. Cocok sebagai rekening transaksi sehari-hari.</div>
            </div>
            <div class="prod-rate">
              <div class="prod-rate-val">Bonus</div>
              <div class="prod-rate-label">per bulan</div>
            </div>
          </div>
          <div class="prod-option" onclick="selectProd(this,'si-cerdas')">
            <div class="prod-radio"></div>
            <div class="prod-icon-lg">🎓</div>
            <div class="prod-info">
              <div class="prod-name">Si Cerdas (Pendidikan)</div>
              <div class="prod-akad-badge">Mudharabah Muthlaqah</div>
              <div class="prod-desc">Simpanan khusus dana pendidikan anak. Hanya dapat diambil saat kebutuhan pendidikan tiba.</div>
            </div>
            <div class="prod-rate">
              <div class="prod-rate-val">60:40</div>
              <div class="prod-rate-label">nisbah</div>
            </div>
          </div>
          <div class="prod-option" onclick="selectProd(this,'si-mabrur')">
            <div class="prod-radio"></div>
            <div class="prod-icon-lg">🕌</div>
            <div class="prod-info">
              <div class="prod-name">Si Mabrur (Haji & Umrah)</div>
              <div class="prod-akad-badge">Mudharabah Muthlaqah</div>
              <div class="prod-desc">Simpanan berjangka untuk mewujudkan perjalanan haji dan umrah impian Anda bersama keluarga.</div>
            </div>
            <div class="prod-rate">
              <div class="prod-rate-val">60:40</div>
              <div class="prod-rate-label">nisbah</div>
            </div>
          </div>
          <div class="prod-option" onclick="selectProd(this,'si-fitri')">
            <div class="prod-radio"></div>
            <div class="prod-icon-lg">🌙</div>
            <div class="prod-info">
              <div class="prod-name">Si Fitri (Hari Raya)</div>
              <div class="prod-akad-badge">Mudharabah Muthlaqah</div>
              <div class="prod-desc">Simpanan berjangka yang dapat dicairkan menjelang Idul Fitri. Bantu persiapkan hari raya lebih baik.</div>
            </div>
            <div class="prod-rate">
              <div class="prod-rate-val">60:40</div>
              <div class="prod-rate-label">nisbah</div>
            </div>
          </div>
          <div class="prod-option" onclick="selectProd(this,'deposito')">
            <div class="prod-radio"></div>
            <div class="prod-icon-lg">📈</div>
            <div class="prod-info">
              <div class="prod-name">Deposito Syariah (Si Berkah)</div>
              <div class="prod-akad-badge">Mudharabah Muthlaqah</div>
              <div class="prod-desc">Investasi berjangka 3, 6, atau 12 bulan dengan nisbah bagi hasil tertinggi. Minimum Rp 1.000.000.</div>
            </div>
            <div class="prod-rate">
              <div class="prod-rate-val">65:35</div>
              <div class="prod-rate-label">nisbah</div>
            </div>
          </div>
        </div>
      </div>

      <div class="setoran-box">
        <div class="setoran-label">💰 Setoran Awal & Simpanan Pokok Wajib</div>
        <div class="field-grid" style="margin-top:10px">
          <div class="field">
            <label class="flabel">Simpanan Pokok (sekali)</label>
            <div class="input-wrap has-suffix">
              <input class="finput" type="text" value="50.000" readonly style="background:var(--cream-d)">
              <span class="input-suffix">Rp</span>
            </div>
          </div>
          <div class="field">
            <label class="flabel">Simpanan Wajib/bulan</label>
            <div class="input-wrap has-suffix">
              <input class="finput" type="text" value="10.000" readonly style="background:var(--cream-d)">
              <span class="input-suffix">Rp</span>
            </div>
          </div>
          <div class="field full">
            <label class="flabel">Setoran Awal Simpanan (min. Rp 10.000) <span class="required-star">*</span></label>
            <div class="input-wrap">
              <input class="finput" type="number" placeholder="Masukkan nominal" id="f-setoran" min="10000">
            </div>
            <div class="field-hint">Setoran awal akan dibayar setelah akun diverifikasi dan disetujui admin.</div>
          </div>
        </div>
      </div>

      <div class="btn-row">
        <button class="btn-back" onclick="goStep(2)">← Kembali</button>
        <button class="btn-next" onclick="goStep(4)">Lanjut: Konfirmasi →</button>
      </div>
    </div>

    <!-- ═══ STEP 4: KONFIRMASI ═══ -->
    <div id="step-4" style="display:none">
      <div class="step-header">
        <div class="step-eyebrow">Langkah 4 dari 4</div>
        <div class="step-main-title">Periksa & Konfirmasi</div>
        <div class="step-main-desc">Periksa kembali data Anda, baca akad keanggotaan, dan kirim pendaftaran.</div>
      </div>

      <!-- Ringkasan Data -->
      <div class="konfirm-section">
        <div class="konfirm-title">Data Diri</div>
        <div class="konfirm-body">
          <div class="konfirm-row">
            <span class="konfirm-row-label">Nama Lengkap</span>
            <span class="konfirm-row-val" id="k-nama">Musyaffa Abdullah</span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">NIK</span>
            <span class="konfirm-row-val" style="font-family:'DM Mono',monospace;font-size:12px" id="k-nik">36740000 0000 0000</span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Status Keanggotaan</span>
            <span class="konfirm-row-val"><span class="konfirm-row-badge badge-green" id="k-status">Alumni</span></span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Nomor HP</span>
            <span class="konfirm-row-val" id="k-hp">+62 812-xxxx-0029</span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Email</span>
            <span class="konfirm-row-val" id="k-email">musyaffa@email.com</span>
          </div>
        </div>
      </div>

      <div class="konfirm-section">
        <div class="konfirm-title">Dokumen Terupload</div>
        <div class="konfirm-body">
          <div class="konfirm-row">
            <span class="konfirm-row-label">KTP (e-KTP)</span>
            <span class="konfirm-row-val"><span class="konfirm-row-badge badge-green">✓ Terupload</span></span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Kartu Keluarga</span>
            <span class="konfirm-row-val"><span class="konfirm-row-badge badge-green">✓ Terupload</span></span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Pas Foto</span>
            <span class="konfirm-row-val"><span class="konfirm-row-badge badge-green">✓ Terupload</span></span>
          </div>
        </div>
      </div>

      <div class="konfirm-section">
        <div class="konfirm-title">Produk & Setoran</div>
        <div class="konfirm-body">
          <div class="konfirm-row">
            <span class="konfirm-row-label">Produk Dipilih</span>
            <span class="konfirm-row-val" id="k-produk">Simpanan Syahida</span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Akad</span>
            <span class="konfirm-row-val"><span class="konfirm-row-badge badge-green" id="k-akad">Wadiah Yad Dhamanah</span></span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Simpanan Pokok</span>
            <span class="konfirm-row-val">Rp 50.000</span>
          </div>
          <div class="konfirm-row">
            <span class="konfirm-row-label">Setoran Awal</span>
            <span class="konfirm-row-val" style="font-weight:700;color:var(--teal-700)"><span class="konfirm-row-badge badge-gold" id="k-setoran">Rp 500.000</span></span>
          </div>
        </div>
      </div>

      <!-- Akad Keanggotaan -->
      <div class="akad-consent">
        <div style="font-size:11px;font-weight:700;color:var(--muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:10px">Akad Keanggotaan Digital</div>
        <div class="akad-arabic">إِنَّمَا الْأَعْمَالُ بِالنِّيَّاتِ</div>
        <div class="akad-text">
          Saya, <strong id="k-nama-akad">Musyaffa Abdullah</strong>, dengan ini menyatakan dengan penuh kesadaran bahwa saya mendaftarkan diri sebagai anggota <strong>BMT Syahidah IKALUIN — Koperasi Syariah Alumni UIN Syarif Hidayatullah Jakarta</strong>, dan bersedia untuk:
          <br><br>
          1. Mematuhi Anggaran Dasar dan Anggaran Rumah Tangga (AD/ART) IKALUIN BMT Syahidah.<br>
          2. Membayar simpanan pokok Rp 50.000 (sekali) dan simpanan wajib Rp 10.000/bulan.<br>
          3. Menjalankan seluruh transaksi sesuai dengan prinsip-prinsip syariah Islam.
        </div>
      </div>

      <!-- Checkboxes -->
      <div class="check-row">
        <input type="checkbox" id="chk-akad">
        <label class="check-label" for="chk-akad">Saya telah membaca, memahami, dan menyetujui <span class="check-link">Akad Keanggotaan</span> dan <span class="check-link">Syarat & Ketentuan</span> BMT Syahidah IKALUIN.</label>
      </div>
      <div class="check-row">
        <input type="checkbox" id="chk-privacy">
        <label class="check-label" for="chk-privacy">Saya menyetujui <span class="check-link">Kebijakan Privasi</span> dan memberikan izin kepada BMT Syahidah IKALUIN untuk memproses data pribadi saya sesuai ketentuan yang berlaku.</label>
      </div>
      <div class="check-row">
        <input type="checkbox" id="chk-data">
        <label class="check-label" for="chk-data">Saya menyatakan bahwa seluruh data dan dokumen yang saya berikan adalah <strong>benar dan asli</strong>. Pemalsuan data dapat mengakibatkan pembatalan keanggotaan.</label>
      </div>

      <div class="btn-row">
        <button class="btn-back" onclick="goStep(3)">← Kembali</button>
        <button class="btn-next" onclick="kirimPendaftaran()">🤲 Kirim Pendaftaran</button>
      </div>
    </div>

    <!-- ═══ STEP 5: VERIFIKASI OTP ═══ -->
    <div id="step-5" style="display:none">
      <div class="step-header">
        <div class="step-eyebrow">Verifikasi Nomor HP</div>
        <div class="step-main-title">Masukkan Kode OTP</div>
        <div class="step-main-desc">Kode 6 digit telah dikirim ke nomor <strong>+62 812-xxxx-0029</strong>. Kode berlaku selama 5 menit.</div>
      </div>

      <div style="text-align:center;padding:10px 0 24px">
        <div class="otp-row">
          <input class="otp-box" maxlength="1" type="text" id="otp1" oninput="moveOtp(this,null,'otp2')">
          <input class="otp-box" maxlength="1" type="text" id="otp2" oninput="moveOtp(this,'otp1','otp3')">
          <input class="otp-box" maxlength="1" type="text" id="otp3" oninput="moveOtp(this,'otp2','otp4')">
          <input class="otp-box" maxlength="1" type="text" id="otp4" oninput="moveOtp(this,'otp3','otp5')">
          <input class="otp-box" maxlength="1" type="text" id="otp5" oninput="moveOtp(this,'otp4','otp6')">
          <input class="otp-box" maxlength="1" type="text" id="otp6" oninput="moveOtp(this,'otp5',null)">
        </div>
        <div style="font-size:12.5px;color:var(--muted);margin-top:8px">
          Tidak menerima kode? <span style="color:var(--teal-500);font-weight:700;cursor:pointer" onclick="toast('📲 Kode OTP baru dikirim ulang ke HP Anda!')">Kirim ulang</span>
          <span style="color:var(--faint)"> (59 detik)</span>
        </div>
      </div>

      <div class="btn-row" style="flex-direction:column">
        <button class="btn-next" onclick="verifikasiOtp()">Verifikasi & Selesai →</button>
        <div style="text-align:center;font-size:12px;color:var(--faint);margin-top:8px">Nomor HP salah? <span style="color:var(--teal-500);cursor:pointer;font-weight:600" onclick="goStep(1)">Kembali dan ubah</span></div>
      </div>
    </div>

    <!-- ═══ STEP 6: SUKSES ═══ -->
    <div id="step-6" style="display:none">
      <div class="success-screen">
        <div class="success-ring">🎉</div>
        <div style="font-family:'Amiri',serif;font-size:20px;color:var(--teal-700);margin-bottom:12px">أَهْلاً وَسَهْلاً</div>
        <div class="success-title">Pendaftaran Berhasil!</div>
        <div class="success-sub">Selamat datang di keluarga besar BMT Syahidah IKALUIN. Akun Anda sedang dalam proses verifikasi oleh tim kami.</div>

        <div class="no-anggota-box">
          <div>
            <div class="no-anggota-label">Nomor Registrasi Anda</div>
            <div class="no-anggota-val">REG-2026-0892</div>
          </div>
          <div style="text-align:right">
            <div class="no-anggota-label">Estimasi Aktivasi</div>
            <div style="font-size:15px;font-weight:700;color:rgba(255,255,255,0.8)">1 × 24 Jam</div>
          </div>
        </div>

        <div class="success-steps">
          <div style="font-size:13px;font-weight:700;color:var(--ink);margin-bottom:10px">Langkah Selanjutnya:</div>
          <div class="success-step">
            <div class="ss-num">1</div>
            <div class="ss-text">Tim BMT Syahidah akan memverifikasi dokumen dan data Anda dalam <strong>1×24 jam kerja</strong>.</div>
          </div>
          <div class="success-step">
            <div class="ss-num">2</div>
            <div class="ss-text">Anda akan menerima <strong>email dan SMS konfirmasi</strong> berisi nomor anggota dan username login.</div>
          </div>
          <div class="success-step">
            <div class="ss-num">3</div>
            <div class="ss-text">Login ke Portal Anggota dan lakukan <strong>setoran awal</strong> via Virtual Account untuk mengaktifkan rekening.</div>
          </div>
          <div class="success-step">
            <div class="ss-num">4</div>
            <div class="ss-text">Rekening aktif dan Anda dapat <strong>menikmati seluruh layanan digital</strong> BMT Syahidah IKALUIN.</div>
          </div>
        </div>

        <button class="btn-masuk" onclick="window.location.href='/login'">Masuk ke Portal Anggota →</button>
        <div style="margin-top:12px;font-size:12px;color:var(--muted)">Ada pertanyaan? Hubungi kami di <strong>bmt@ikaluin.ac.id</strong></div>
      </div>
    </div>

  </div><!-- /form-container -->
</main><!-- /right-panel -->

<div class="toast" id="toast-el"></div>

<script>
let currentStep = 1;
let selectedProduk = { name: 'Simpanan Syahida', akad: 'Wadiah Yad Dhamanah' };

/* ── STEP NAV ── */
function goStep(n) {
  document.getElementById('step-' + currentStep).style.display = 'none';
  currentStep = n;
  document.getElementById('step-' + n).style.display = 'block';
  updateStepper(n);
  updateProgress(n);
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function updateStepper(n) {
  for (let i = 1; i <= 4; i++) {
    const item = document.getElementById('step-item-' + i);
    const circle = document.getElementById('sc-' + i);
    item.className = 'step-item';
    if (i < n) {
      item.classList.add('done');
      circle.textContent = '✓';
    } else if (i === n) {
      item.classList.add('active');
      circle.textContent = i;
    } else {
      circle.textContent = i;
    }
  }
}

function updateProgress(n) {
  const pcts = { 1:25, 2:50, 3:75, 4:100, 5:100, 6:100 };
  document.getElementById('progress-fill').style.width = (pcts[n] || 25) + '%';
}

/* ── MEMBERSHIP TILE ── */
function selectMem(el) {
  document.querySelectorAll('.mem-tile').forEach(t => t.classList.remove('selected'));
  el.classList.add('selected');
}

/* ── FILE UPLOAD ── */
function fileSelected(input, zoneId, fnId) {
  if (!input.files[0]) return;
  const zone = document.getElementById(zoneId);
  const fn = document.getElementById(fnId);
  zone.classList.add('has-file');
  fn.textContent = input.files[0].name.substring(0,28) + (input.files[0].name.length>28?'…':'');
  if (zoneId === 'uz-foto') {
    document.getElementById('selfie-check').style.display = 'block';
    document.getElementById('selfie-icon').style.display = 'none';
    document.getElementById('selfie-label').style.display = 'none';
  }
}

/* ── PRODUCT SELECT ── */
const prodData = {
  'simpanan-syahida': { name: 'Simpanan Syahida', akad: 'Wadiah Yad Dhamanah' },
  'si-cerdas': { name: 'Si Cerdas (Pendidikan)', akad: 'Mudharabah Muthlaqah' },
  'si-mabrur': { name: 'Si Mabrur (Haji & Umrah)', akad: 'Mudharabah Muthlaqah' },
  'si-fitri': { name: 'Si Fitri (Hari Raya)', akad: 'Mudharabah Muthlaqah' },
  'deposito': { name: 'Deposito Syariah (Si Berkah)', akad: 'Mudharabah Muthlaqah' },
};

function selectProd(el, key) {
  document.querySelectorAll('.prod-option').forEach(p => p.classList.remove('selected'));
  el.classList.add('selected');
  selectedProduk = prodData[key];
}

/* ── NIK CHECK ── */
function checkNik(input) {
  const len = input.value.replace(/\D/g,'').length;
  document.getElementById('nik-verify-btn').style.display = len === 16 ? 'block' : 'none';
  document.getElementById('nik-result-ok').classList.remove('show');
  document.getElementById('nik-result-err').style.display = 'none';
}

function verifyNik() {
  document.getElementById('nik-result-ok').classList.add('show');
  document.getElementById('nik-verify-btn').style.display = 'none';
  toast('✓ NIK terverifikasi dan belum terdaftar');
}

/* ── PASSWORD ── */
function checkPw(input) {
  const v = input.value;
  let score = 0;
  if (v.length >= 8) score++;
  if (/[A-Z]/.test(v)) score++;
  if (/[0-9]/.test(v)) score++;
  if (/[^A-Za-z0-9]/.test(v)) score++;
  const segs = ['ps1','ps2','ps3','ps4'];
  const levels = ['','weak','medium','medium','strong'];
  segs.forEach((id,i) => {
    const el = document.getElementById(id);
    el.className = 'pw-seg ' + (i < score ? levels[score] : '');
  });
  const labels = ['Masukkan kata sandi','Terlalu lemah','Cukup','Cukup kuat','Kata sandi kuat ✓'];
  const label = document.getElementById('pw-label');
  label.textContent = labels[score];
  const colors = ['#9ca3af','#dc2626','#c9953a','#c9953a','#059669'];
  label.style.color = colors[score];
}

function togglePw(id) {
  const el = document.getElementById(id);
  el.type = el.type === 'password' ? 'text' : 'password';
}

/* ── SUBMIT ── */
function kirimPendaftaran() {
  const checks = ['chk-akad','chk-privacy','chk-data'];
  for (const id of checks) {
    if (!document.getElementById(id).checked) {
      toast('⚠️ Harap centang semua persetujuan sebelum melanjutkan.');
      return;
    }
  }
  updateKonfirmasi();
  goStep(5);
}

function updateKonfirmasi() {
  const nama = document.getElementById('f-nama').value || 'Musyaffa Abdullah';
  const nik  = document.getElementById('f-nik').value  || '3674xxxx xxxx xxxx';
  const hp   = document.getElementById('f-hp').value   || '0812-xxxx-0029';
  const email= document.getElementById('f-email').value|| 'musyaffa@email.com';
  const setoran = document.getElementById('f-setoran').value;
  const memEl = document.querySelector('.mem-tile.selected .mem-label');
  const memStatus = memEl ? memEl.textContent : 'Alumni';

  document.getElementById('k-nama').textContent = nama;
  document.getElementById('k-nama-akad').textContent = nama;
  document.getElementById('k-nik').textContent = nik;
  document.getElementById('k-hp').textContent = '+62 ' + hp;
  document.getElementById('k-email').textContent = email;
  document.getElementById('k-status').textContent = memStatus;
  document.getElementById('k-produk').textContent = selectedProduk.name;
  document.getElementById('k-akad').textContent = selectedProduk.akad;
  if (setoran) {
    document.getElementById('k-setoran').textContent = 'Rp ' + parseInt(setoran).toLocaleString('id-ID');
  }
}

/* ── OTP ── */
function moveOtp(el, prevId, nextId) {
  if (el.value && nextId) document.getElementById(nextId).focus();
  if (!el.value && prevId) document.getElementById(prevId).focus();
}

function verifikasiOtp() {
  const digits = ['otp1','otp2','otp3','otp4','otp5','otp6'].map(id => document.getElementById(id).value);
  if (digits.some(d => !d)) { toast('⚠️ Masukkan 6 digit kode OTP terlebih dahulu.'); return; }
  goStep(6);
  document.getElementById('stepper').style.display = 'none';
  document.getElementById('progress-fill').style.width = '100%';
}

/* ── TOAST ── */
let tTimer;
function toast(msg) {
  const el = document.getElementById('toast-el');
  el.textContent = msg;
  el.classList.add('show');
  clearTimeout(tTimer);
  tTimer = setTimeout(() => el.classList.remove('show'), 3500);
}
</script>
</body>
</html>
