<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'BMT Syahidah — Portal Anggota')</title>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
/* ════════════════════════════════════════
   DESIGN TOKENS
   Palette: deep teal (trustworthy Islamic finance)
   + warm sand (welcoming personal finance)
   + saffron accent (Islamic heritage, action)
   Signature: floating glass "saldo card" with
   Arabic inscription — the one memorable element
════════════════════════════════════════ */
:root {
  --teal-900: #023e8a;
  --teal-700: #0077b6;
  --teal-500: #0096c7;
  --teal-300: #48cae4;
  --teal-100: #dbf0f8;
  --saffron: #00b4d8;
  --saffron-light: #90e0ef;
  --saffron-pale: #dcf3fa;
  --sand-100: #f4f9fc;
  --sand-200: #e7f1f7;
  --sand-300: #90e0ef;
  --white: #ffffff;
  --ink: #111827;
  --ink-mid: #374151;
  --ink-soft: #6b7280;
  --ink-faint: #9ca3af;
  --border: rgba(0,119,182,0.12);
  --card-shadow: 0 2px 16px rgba(2,62,138,0.08);
  --card-shadow-hover: 0 8px 36px rgba(2,62,138,0.14);
  --radius-xl: 20px;
  --radius-lg: 14px;
  --radius-md: 10px;
  --radius-sm: 7px;
}

/* ════════ DARK MODE TOKENS ════════ */
body.dark-mode {
  --sand-100: #0f172a;      /* Latar belakang utama (Sangat gelap) */
  --sand-200: #1e293b;      /* Elemen lapis 2 (Gelap) */
  --sand-300: #334155;
  --white: #1e293b;         /* Background Card */
  --ink: #f8fafc;           /* Teks Utama (Sangat terang) */
  --ink-mid: #cbd5e1;       /* Teks sekunder */
  --ink-soft: #94a3b8;
  --ink-faint: #64748b;
  --border: rgba(255, 255, 255, 0.1);
  --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
  --card-shadow-hover: 0 8px 36px rgba(0, 0, 0, 0.5);
}

/* Transisi halus saat ganti tema */
body, .header, .card, .modal, .finput, .fselect, .qa-btn, .prod-card, .dtab, .wp-item, .preset-btn, .pembiayaan-mini {
  transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
}

/* Penyesuaian khusus Dark Mode */
body.dark-mode .jatuh-tempo-alert {
  background: linear-gradient(135deg, rgba(0,180,216,0.15), rgba(0,180,216,0.05));
}
body.dark-mode .angsuran-tag {
  background: linear-gradient(135deg, rgba(0,180,216,0.15), var(--sand-200));
}
body.dark-mode .jadwal-table th { background: var(--sand-200); color: var(--ink-mid); }
body.dark-mode .jadwal-table tr:hover td { background: var(--sand-200); }
body.dark-mode .modal-overlay { background: rgba(0, 0, 0, 0.6); }

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
  font-family: 'DM Sans', sans-serif;
  background: var(--sand-100);
  color: var(--ink);
  min-height: 100vh;
}

/* ──────── LAYOUT SHELL ──────── */
.shell {
  display: flex;
  min-height: 100vh;
}

/* ──────── LEFT NAV ──────── */
.nav {
  width: 72px;
  background: var(--teal-900);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px 0 24px;
  position: fixed;
  top: 0; left: 0; bottom: 0;
  z-index: 100;
  gap: 0;
}

.nav-logo {
  width: 40px; height: 40px;
  background: var(--saffron);
  border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  font-family: 'Amiri', serif;
  font-size: 18px; color: #fff;
  margin-bottom: 32px;
  flex-shrink: 0;
}

.nav-items { display: flex; flex-direction: column; gap: 4px; flex: 1; align-items: center; }

.nav-btn {
  width: 48px; height: 48px;
  border-radius: 14px;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  cursor: pointer;
  transition: all 0.18s;
  position: relative;
  gap: 3px;
}
.nav-btn:hover { background: rgba(255,255,255,0.08); }
.nav-btn.active { background: var(--teal-700); }
.nav-btn.active::before {
  content: '';
  position: absolute; left: -1px; top: 12px; bottom: 12px;
  width: 3px; border-radius: 0 2px 2px 0;
  background: var(--saffron-light);
}
.nav-btn .ico { font-size: 19px; line-height: 1; }
.nav-btn .lbl {
  font-size: 8.5px; font-weight: 600; letter-spacing: 0.2px;
  color: rgba(255,255,255,0.45);
  text-align: center; line-height: 1;
}
.nav-btn.active .lbl { color: rgba(255,255,255,0.85); }

.nav-avatar {
  width: 38px; height: 38px; border-radius: 50%;
  background: var(--saffron);
  display: flex; align-items: center; justify-content: center;
  font-weight: 700; font-size: 13px; color: #fff;
  border: 2px solid rgba(255,255,255,0.2);
  cursor: pointer;
  margin-top: auto;
  flex-shrink: 0;
}

/* ──────── MAIN PANEL ──────── */
.main {
  margin-left: 72px;
  flex: 1;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

/* ──────── TOP HEADER ──────── */
.header {
  background: var(--white);
  border-bottom: 1px solid var(--border);
  padding: 0 32px;
  height: 60px;
  display: flex; align-items: center; justify-content: space-between;
  position: sticky; top: 0; z-index: 50;
}

.header-greeting { display: flex; flex-direction: column; }
.header-name {
  font-size: 14px; font-weight: 700; color: var(--ink);
  display: flex; align-items: center; gap: 8px;
}
.member-badge {
  background: var(--teal-100); color: var(--teal-700);
  font-size: 10px; font-weight: 700; letter-spacing: 0.5px;
  padding: 2px 7px; border-radius: 20px; text-transform: uppercase;
}
.header-no { font-size: 11px; color: var(--ink-soft); margin-top: 1px; font-family: 'DM Mono', monospace; }

.header-right { display: flex; align-items: center; gap: 10px; }
.hdr-btn {
  width: 36px; height: 36px; border-radius: 10px;
  border: 1px solid var(--border); background: var(--white);
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; font-size: 15px;
  transition: background 0.15s;
  position: relative;
}
.hdr-btn:hover { background: var(--sand-100); }
.notif-pip {
  position: absolute; top: 7px; right: 7px;
  width: 6px; height: 6px; border-radius: 50%;
  background: #f87171; border: 1.5px solid #fff;
}

/* ──────── PAGE CONTENT ──────── */
.page { display: none; padding: 28px 32px 40px; animation: slideUp 0.28s ease; }
.page.active { display: block; }
@keyframes slideUp { from { opacity:0; transform:translateY(10px); } to { opacity:1; transform:translateY(0); } }

/* ════════ BERANDA ════════ */

/* ── SALDO CARD (SIGNATURE ELEMENT) ── */
.saldo-card {
  background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-700) 55%, #0096c7 100%);
  border-radius: var(--radius-xl);
  padding: 28px 32px;
  color: #fff;
  position: relative;
  overflow: hidden;
  margin-bottom: 24px;
}
/* Geometric Islamic pattern overlay */
.saldo-card::before {
  content: '';
  position: absolute; top: 0; right: 0; bottom: 0;
  width: 55%;
  background:
    radial-gradient(circle at 80% 30%, rgba(0,180,216,0.18) 0%, transparent 60%),
    radial-gradient(circle at 90% 80%, rgba(255,255,255,0.06) 0%, transparent 50%);
  pointer-events: none;
}
/* Arabic script decoration */
.saldo-card::after {
  content: 'بَارَكَ اللهُ';
  font-family: 'Amiri', serif;
  font-size: 56px;
  color: rgba(255,255,255,0.05);
  position: absolute;
  right: 24px; top: 50%;
  transform: translateY(-50%);
  line-height: 1;
  pointer-events: none;
}

.saldo-top { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 24px; }
.saldo-label-row { display: flex; align-items: center; gap: 8px; margin-bottom: 6px; }
.saldo-label { font-size: 11.5px; font-weight: 500; opacity: 0.65; letter-spacing: 0.3px; }
.saldo-eye {
  width: 22px; height: 22px; border-radius: 6px;
  background: rgba(255,255,255,0.12);
  display: flex; align-items: center; justify-content: center;
  font-size: 11px; cursor: pointer;
  transition: background 0.15s;
}
.saldo-eye:hover { background: rgba(255,255,255,0.2); }
.saldo-amount {
  font-size: 34px; font-weight: 700; letter-spacing: -1px; line-height: 1;
  font-variant-numeric: tabular-nums;
}
.saldo-amount .currency { font-size: 18px; font-weight: 500; opacity: 0.7; margin-right: 4px; }

.saldo-chip {
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: 20px;
  padding: 5px 12px;
  font-size: 11px; font-weight: 600;
  display: flex; align-items: center; gap: 6px;
}
.saldo-chip-dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: #34d399;
  animation: blink 2s infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.4} }

.saldo-product-pills { display: flex; gap: 8px; flex-wrap: wrap; }
.saldo-pill {
  background: rgba(255,255,255,0.10);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: 8px;
  padding: 8px 14px;
  cursor: pointer;
  transition: all 0.15s;
}
.saldo-pill:hover { background: rgba(255,255,255,0.18); }
.saldo-pill.active-pill { background: rgba(0,180,216,0.30); border-color: var(--saffron-light); }
.saldo-pill .p-name { font-size: 10px; opacity: 0.65; margin-bottom: 3px; }
.saldo-pill .p-val { font-size: 14px; font-weight: 700; }

/* ── QUICK ACTIONS ── */
.quick-actions {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 12px;
  margin-bottom: 28px;
}
.qa-btn {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 16px 10px 14px;
  display: flex; flex-direction: column; align-items: center; gap: 8px;
  cursor: pointer;
  transition: all 0.18s;
  text-align: center;
}
.qa-btn:hover { transform: translateY(-2px); box-shadow: var(--card-shadow-hover); border-color: var(--teal-300); }
.qa-icon {
  width: 44px; height: 44px; border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  font-size: 20px;
}
.qa-label { font-size: 11.5px; font-weight: 600; color: var(--ink-mid); line-height: 1.3; }

.qa-btn.primary-action .qa-icon { background: var(--teal-900); }
.qa-btn.secondary-action .qa-icon { background: var(--sand-200); }
.qa-btn.gold-action .qa-icon { background: var(--saffron-pale); }

/* ── TWO-COL LOWER ── */
.beranda-lower { display: grid; grid-template-columns: 1fr 320px; gap: 20px; }

/* ── CARD BASE ── */
.card {
  background: var(--white);
  border-radius: var(--radius-xl);
  border: 1px solid var(--border);
  box-shadow: var(--card-shadow);
  overflow: hidden;
}
.card-head {
  padding: 18px 22px 14px;
  display: flex; align-items: center; justify-content: space-between;
  border-bottom: 1px solid var(--border);
}
.card-title { font-size: 14px; font-weight: 700; color: var(--ink); }
.card-sub { font-size: 11.5px; color: var(--ink-soft); margin-top: 2px; }
.card-link { font-size: 12px; font-weight: 600; color: var(--teal-500); cursor: pointer; }
.card-link:hover { text-decoration: underline; }
.card-body { padding: 18px 22px; }

/* ── MUTASI LIST ── */
.mutasi-list { display: flex; flex-direction: column; }
.mutasi-item {
  display: flex; align-items: center; gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid var(--border);
}
.mutasi-item:last-child { border-bottom: none; }
.mutasi-ico {
  width: 38px; height: 38px; border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  font-size: 16px; flex-shrink: 0;
}
.mutasi-ico.in { background: rgba(0,150,199,0.10); }
.mutasi-ico.out { background: rgba(248,113,113,0.10); }
.mutasi-ico.bagi { background: var(--saffron-pale); }
.mutasi-info { flex: 1; }
.mutasi-title { font-size: 13px; font-weight: 600; color: var(--ink); }
.mutasi-date { font-size: 11px; color: var(--ink-faint); margin-top: 1px; }
.mutasi-amount { font-size: 14px; font-weight: 700; text-align: right; }
.mutasi-amount.in { color: var(--teal-500); }
.mutasi-amount.out { color: #ef4444; }
.mutasi-amount.bagi { color: var(--saffron); }

/* ── INFO CARDS (right col) ── */
.info-stack { display: flex; flex-direction: column; gap: 16px; }

.pembiayaan-mini {
  background: linear-gradient(135deg, var(--sand-200), var(--sand-100));
  border-radius: var(--radius-lg);
  border: 1px solid var(--border);
  padding: 18px 20px;
}
.pm-label { font-size: 10.5px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase; color: var(--ink-soft); margin-bottom: 10px; }
.pm-akad { font-size: 13px; font-weight: 700; color: var(--ink); margin-bottom: 4px; }
.pm-sisa { font-size: 22px; font-weight: 700; color: var(--teal-700); margin-bottom: 14px; }
.pm-progress { height: 6px; background: var(--sand-300); border-radius: 99px; overflow: hidden; margin-bottom: 8px; }
.pm-fill { height: 100%; border-radius: 99px; background: linear-gradient(90deg, var(--teal-700), var(--teal-300)); }
.pm-meta { display: flex; justify-content: space-between; }
.pm-meta span { font-size: 11px; color: var(--ink-soft); }
.pm-meta strong { color: var(--ink); }

.jatuh-tempo-alert {
  background: linear-gradient(135deg, #e7f1f7, #f4f9fc);
  border: 1px solid rgba(0,180,216,0.25);
  border-radius: var(--radius-lg);
  padding: 16px 18px;
  display: flex; gap: 12px; align-items: flex-start;
}
.jt-icon { font-size: 22px; flex-shrink: 0; }
.jt-text {}
.jt-title { font-size: 12.5px; font-weight: 700; color: var(--saffron); margin-bottom: 3px; }
.jt-body { font-size: 11.5px; color: var(--ink-mid); line-height: 1.5; }
.jt-btn {
  margin-top: 10px;
  display: inline-flex; align-items: center; gap: 5px;
  background: var(--saffron); color: #fff;
  padding: 7px 14px; border-radius: 8px;
  font-size: 12px; font-weight: 700; cursor: pointer;
  border: none; font-family: inherit;
  transition: background 0.15s;
}
.jt-btn:hover { background: #0077b6; }

/* ── BAGI HASIL ESTIMASI ── */
.bagi-card {
  background: var(--teal-900);
  border-radius: var(--radius-lg);
  padding: 18px 20px;
  color: #fff;
}
.bagi-lbl { font-size: 10.5px; font-weight: 600; opacity: 0.6; letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 6px; }
.bagi-amount { font-size: 24px; font-weight: 700; color: var(--saffron-light); margin-bottom: 4px; }
.bagi-sub { font-size: 11px; opacity: 0.55; }
.bagi-nisbah {
  margin-top: 14px;
  background: rgba(255,255,255,0.08);
  border-radius: 8px;
  padding: 10px 12px;
  display: flex; justify-content: space-between; align-items: center;
}
.bagi-nisbah span { font-size: 11px; opacity: 0.6; }
.bagi-nisbah strong { font-size: 13px; color: var(--saffron-light); }

/* ════════ SIMPANAN PAGE ════════ */
.product-tabs {
  display: flex; gap: 8px; margin-bottom: 20px; flex-wrap: wrap;
}
.ptab {
  padding: 8px 16px; border-radius: 20px;
  font-size: 12.5px; font-weight: 600;
  border: 1.5px solid var(--border);
  background: var(--white);
  cursor: pointer; color: var(--ink-soft);
  transition: all 0.15s;
}
.ptab.active { background: var(--teal-900); color: #fff; border-color: var(--teal-900); }
.ptab:hover:not(.active) { border-color: var(--teal-300); color: var(--teal-700); }

.product-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; margin-bottom: 24px; }
.prod-card {
  border-radius: var(--radius-lg);
  border: 1.5px solid var(--border);
  background: var(--white);
  padding: 18px;
  cursor: pointer; transition: all 0.18s;
  position: relative; overflow: hidden;
}
.prod-card:hover { box-shadow: var(--card-shadow-hover); transform: translateY(-2px); border-color: var(--teal-300); }
.prod-card.selected { border-color: var(--teal-700); background: rgba(0,150,199,0.04); }
.prod-stripe {
  position: absolute; top: 0; left: 0; right: 0;
  height: 4px; border-radius: 14px 14px 0 0;
}
.prod-icon { font-size: 26px; margin: 8px 0 10px; }
.prod-name { font-size: 13px; font-weight: 700; color: var(--ink); margin-bottom: 2px; }
.prod-akad { font-size: 10.5px; color: var(--ink-soft); margin-bottom: 10px; }
.prod-saldo { font-size: 18px; font-weight: 700; color: var(--teal-700); }
.prod-saldo .currency { font-size: 12px; font-weight: 500; opacity: 0.7; }

/* Form Transaksi */
.transaksi-form {
  display: grid; grid-template-columns: 1fr 1fr; gap: 16px;
}
.fg { display: flex; flex-direction: column; gap: 5px; }
.fg.full { grid-column: 1/-1; }
.flabel { font-size: 12px; font-weight: 600; color: var(--ink-mid); }
.finput, .fselect {
  padding: 11px 14px;
  border: 1.5px solid var(--border);
  border-radius: var(--radius-md);
  font-family: inherit; font-size: 13px;
  color: var(--ink); background: var(--white);
  outline: none; transition: border-color 0.15s;
}
.finput:focus, .fselect:focus { border-color: var(--teal-500); }
.finput::placeholder { color: var(--ink-faint); }

.btn-primary {
  background: var(--teal-900); color: #fff;
  padding: 12px 24px; border-radius: var(--radius-md);
  border: none; font-family: inherit; font-size: 13.5px; font-weight: 700;
  cursor: pointer; transition: all 0.18s;
  display: inline-flex; align-items: center; gap: 7px;
}
.btn-primary:hover { background: var(--teal-700); transform: translateY(-1px); box-shadow: 0 4px 16px rgba(2,62,138,0.25); }
.btn-outline {
  background: transparent; color: var(--teal-700);
  padding: 11px 22px; border-radius: var(--radius-md);
  border: 1.5px solid var(--teal-300);
  font-family: inherit; font-size: 13px; font-weight: 600;
  cursor: pointer; transition: all 0.15s;
}
.btn-outline:hover { background: var(--teal-100); }
.btn-saffron {
  background: var(--saffron); color: #fff;
  padding: 12px 24px; border-radius: var(--radius-md);
  border: none; font-family: inherit; font-size: 13.5px; font-weight: 700;
  cursor: pointer; transition: all 0.18s;
  display: inline-flex; align-items: center; gap: 7px;
}
.btn-saffron:hover { background: #0077b6; transform: translateY(-1px); }

/* ════════ PEMBIAYAAN PAGE ════════ */
.pembiayaan-status-card {
  background: var(--white);
  border-radius: var(--radius-xl);
  border: 1px solid var(--border);
  box-shadow: var(--card-shadow);
  padding: 24px 28px;
  margin-bottom: 20px;
  display: grid; grid-template-columns: 1fr auto;
  gap: 20px; align-items: start;
}
.pb-title { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.6px; color: var(--ink-soft); margin-bottom: 6px; }
.pb-akad-name { font-size: 20px; font-weight: 700; color: var(--ink); margin-bottom: 4px; }
.pb-tujuan { font-size: 12.5px; color: var(--ink-soft); margin-bottom: 18px; }

.pb-progress-wrap { margin-bottom: 12px; }
.pb-progress-bar { height: 10px; background: var(--sand-200); border-radius: 99px; overflow: hidden; }
.pb-fill { height: 100%; border-radius: 99px; background: linear-gradient(90deg, var(--teal-900), var(--teal-300)); }
.pb-labels { display: flex; justify-content: space-between; margin-top: 6px; }
.pb-labels span { font-size: 11px; color: var(--ink-soft); }

.pb-stats { display: flex; gap: 20px; flex-wrap: wrap; }
.pb-stat { }
.pb-stat-label { font-size: 10.5px; color: var(--ink-faint); margin-bottom: 2px; }
.pb-stat-val { font-size: 16px; font-weight: 700; color: var(--ink); }

.angsuran-tag {
  background: linear-gradient(135deg, var(--saffron-pale), #fff);
  border: 1px solid rgba(0,180,216,0.2);
  border-radius: var(--radius-lg);
  padding: 20px 22px;
  text-align: center;
}
.at-label { font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: var(--saffron); margin-bottom: 6px; }
.at-amount { font-size: 26px; font-weight: 700; color: var(--teal-900); line-height: 1; margin-bottom: 4px; }
.at-due { font-size: 11.5px; color: var(--ink-soft); margin-bottom: 14px; }

.jadwal-table { width: 100%; border-collapse: collapse; }
.jadwal-table th { font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: var(--ink-soft); padding: 8px 12px; text-align: left; background: var(--sand-100); border-bottom: 1px solid var(--border); }
.jadwal-table td { padding: 11px 12px; border-bottom: 1px solid var(--border); font-size: 12.5px; }
.jadwal-table tr:last-child td { border-bottom: none; }
.jadwal-table tr:hover td { background: var(--sand-100); }
.pill-lunas { background: var(--teal-100); color: var(--teal-700); padding: 2px 8px; border-radius: 20px; font-size: 10.5px; font-weight: 700; }
.pill-belum { background: var(--sand-200); color: var(--ink-soft); padding: 2px 8px; border-radius: 20px; font-size: 10.5px; font-weight: 700; }
.pill-jatuh { background: rgba(0,180,216,0.12); color: var(--saffron); padding: 2px 8px; border-radius: 20px; font-size: 10.5px; font-weight: 700; }

/* ════════ ZIS & WAKAF PAGE ════════ */
.donasi-tabs { display: flex; gap: 0; margin-bottom: 24px; background: var(--sand-200); border-radius: var(--radius-lg); padding: 4px; }
.dtab {
  flex: 1; padding: 10px; border-radius: var(--radius-md);
  font-size: 12.5px; font-weight: 600; cursor: pointer;
  text-align: center; transition: all 0.18s; color: var(--ink-soft);
}
.dtab.active { background: var(--white); color: var(--teal-900); box-shadow: 0 1px 8px rgba(2,62,138,0.10); }

.zis-form-wrap { display: grid; grid-template-columns: 1fr 320px; gap: 20px; }

.nominal-presets { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 8px; }
.preset-btn {
  padding: 7px 14px; border-radius: 8px;
  border: 1.5px solid var(--border); background: var(--white);
  font-size: 12px; font-weight: 600; cursor: pointer; color: var(--ink-mid);
  transition: all 0.15s; font-family: inherit;
}
.preset-btn:hover { border-color: var(--teal-300); color: var(--teal-700); background: var(--teal-100); }
.preset-btn.selected { border-color: var(--teal-700); background: var(--teal-100); color: var(--teal-900); }

.wakaf-programs { display: flex; flex-direction: column; gap: 12px; }
.wp-item {
  border: 1.5px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 16px 18px;
  cursor: pointer; transition: all 0.15s;
  background: var(--white);
}
.wp-item:hover { border-color: var(--teal-300); }
.wp-item.selected-prog { border-color: var(--teal-700); background: rgba(0,150,199,0.04); }
.wp-head { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px; }
.wp-name { font-size: 13px; font-weight: 700; color: var(--ink); }
.wp-cat { font-size: 10px; font-weight: 700; padding: 2px 7px; border-radius: 20px; }
.wp-cat.pend { background: rgba(59,130,246,0.1); color: #3b82f6; }
.wp-cat.ekon { background: rgba(0,150,199,0.1); color: var(--teal-700); }
.wp-cat.sehat { background: rgba(239,68,68,0.1); color: #ef4444; }
.wp-progress { height: 5px; background: var(--sand-200); border-radius: 99px; overflow: hidden; margin-bottom: 5px; }
.wp-fill { height: 100%; border-radius: 99px; background: linear-gradient(90deg, var(--teal-700), var(--teal-300)); }
.wp-meta { display: flex; justify-content: space-between; }
.wp-meta span { font-size: 10.5px; color: var(--ink-soft); }

/* Riwayat ZIS */
.zis-riwayat { display: flex; flex-direction: column; gap: 0; }
.zr-item { display: flex; gap: 12px; align-items: center; padding: 12px 0; border-bottom: 1px solid var(--border); }
.zr-item:last-child { border-bottom: none; }
.zr-ico { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0; }
.zr-info { flex: 1; }
.zr-name { font-size: 12.5px; font-weight: 600; color: var(--ink); }
.zr-date { font-size: 11px; color: var(--ink-faint); }
.zr-amount { font-size: 13.5px; font-weight: 700; color: var(--saffron); }

/* ════════ PROFIL PAGE ════════ */
.profil-hero {
  background: linear-gradient(135deg, var(--teal-900), var(--teal-700));
  border-radius: var(--radius-xl);
  padding: 28px 32px;
  display: flex; gap: 24px; align-items: center;
  margin-bottom: 24px; color: #fff;
  position: relative; overflow: hidden;
}
.profil-hero::before {
  content: '';
  position: absolute; right: -20px; top: -30px;
  width: 160px; height: 160px; border-radius: 50%;
  background: rgba(0,180,216,0.12);
}
.profil-av {
  width: 72px; height: 72px; border-radius: 50%;
  background: var(--saffron);
  display: flex; align-items: center; justify-content: center;
  font-size: 28px; font-weight: 700; color: #fff;
  border: 3px solid rgba(255,255,255,0.25);
  flex-shrink: 0;
}
.profil-info {}
.profil-name { font-size: 22px; font-weight: 700; margin-bottom: 4px; }
.profil-no { font-size: 12px; opacity: 0.6; font-family: 'DM Mono', monospace; margin-bottom: 8px; }
.profil-tags { display: flex; gap: 8px; flex-wrap: wrap; }
.profil-tag {
  background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.18);
  border-radius: 20px; padding: 3px 10px; font-size: 11px; font-weight: 600;
}

.profil-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }

.info-list { display: flex; flex-direction: column; gap: 0; }
.info-row { display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid var(--border); }
.info-row:last-child { border-bottom: none; }
.info-label { width: 150px; font-size: 12px; color: var(--ink-soft); flex-shrink: 0; }
.info-value { font-size: 13px; font-weight: 500; color: var(--ink); flex: 1; }
.info-edit { font-size: 11.5px; color: var(--teal-500); cursor: pointer; font-weight: 600; }

.ring-section { padding: 16px 0; }
.ring-wrap { display: flex; align-items: center; gap: 24px; }
.ring-svg { flex-shrink: 0; }
.ring-legend-v { display: flex; flex-direction: column; gap: 8px; }
.rl-item { display: flex; align-items: center; gap: 8px; }
.rl-dot { width: 9px; height: 9px; border-radius: 3px; flex-shrink: 0; }
.rl-label { font-size: 12px; color: var(--ink-soft); flex: 1; }
.rl-val { font-size: 12.5px; font-weight: 700; color: var(--ink); }

/* ════════ TOAST ════════ */
.toast {
  position: fixed; bottom: 24px; right: 24px;
  background: var(--teal-900); color: #fff;
  padding: 13px 18px; border-radius: var(--radius-lg);
  font-size: 13px; font-weight: 500;
  box-shadow: 0 8px 28px rgba(2,62,138,0.28);
  display: flex; align-items: center; gap: 8px;
  z-index: 999; max-width: 340px;
  transform: translateY(70px); opacity: 0;
  transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  pointer-events: none;
}
.toast.show { transform: translateY(0); opacity: 1; pointer-events: auto; }

/* ════════ MODAL OVERLAY ════════ */
.modal-overlay {
  position: fixed; inset: 0;
  background: rgba(2,62,138,0.35);
  backdrop-filter: blur(4px);
  z-index: 200;
  display: none; align-items: center; justify-content: center;
}
.modal-overlay.open { display: flex; }
.modal {
  background: var(--white);
  border-radius: var(--radius-xl);
  padding: 28px 32px;
  max-width: 440px; width: 90%;
  box-shadow: 0 24px 64px rgba(2,62,138,0.2);
  animation: popIn 0.25s cubic-bezier(0.34,1.56,0.64,1);
}
@keyframes popIn { from { transform: scale(0.92); opacity: 0; } to { transform: scale(1); opacity: 1; } }
.modal-title { font-size: 17px; font-weight: 700; color: var(--ink); margin-bottom: 4px; }
.modal-sub { font-size: 12.5px; color: var(--ink-soft); margin-bottom: 20px; line-height: 1.5; }
.modal-actions { display: flex; gap: 10px; margin-top: 20px; }
.modal-close { position: absolute; display: none; }

/* ════════ OTP INPUT ════════ */
.otp-wrap { display: flex; gap: 10px; justify-content: center; margin: 16px 0; }
.otp-digit {
  width: 48px; height: 56px;
  border: 2px solid var(--border); border-radius: var(--radius-md);
  font-size: 22px; font-weight: 700; text-align: center;
  font-family: 'DM Mono', monospace; color: var(--teal-900);
  outline: none; transition: border-color 0.15s;
}
.otp-digit:focus { border-color: var(--teal-500); }

/* ══ SECTION DIVIDER ══ */
.sec-div { display: flex; align-items: center; gap: 10px; margin: 20px 0 14px; }
.sec-div-line { flex: 1; height: 1px; background: var(--border); }
.sec-div-label { font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; color: var(--ink-faint); white-space: nowrap; }

/* ══ HIDDEN AMOUNT ══ */
.amount-hidden { letter-spacing: 4px; }

/* ══ LOADING SKELETON (aesthetic) ══ */
.skel { background: linear-gradient(90deg, var(--sand-200) 25%, var(--sand-100) 50%, var(--sand-200) 75%); background-size: 200% 100%; animation: skel 1.5s infinite; border-radius: 6px; }
@keyframes skel { 0%{background-position:200%} 100%{background-position:-200%} }

/* ════ TAMBAHAN VARIABEL WARNA (EMERALD) ════ */
:root {
  --emerald: #023e8a;
  --emerald-mid: #0077b6;
  --emerald-light: #0096c7;
  --surface: #ffffff;
  --gold: #00b4d8;
  --gold-light: #90e0ef;
  --cream: #f4f9fc;
  --cream-dark: #e7f1f7;
  --muted: #6b7280;
  --shadow: 0 2px 16px rgba(2,62,138,0.08);
}

/* ════ SIDEBAR BARU (PENGGANTI .nav LAMA) ════ */
.sidebar {
  position: fixed; left: 0; top: 0; bottom: 0;
  width: 260px;
  background: var(--emerald);
  display: flex; flex-direction: column;
  z-index: 100;
  overflow: hidden;
}
.sidebar::before {
  content: ''; position: absolute; top: -80px; right: -80px;
  width: 220px; height: 220px; border-radius: 50%;
  background: rgba(0,180,216,0.12); pointer-events: none;
}
.sidebar::after {
  content: ''; position: absolute; bottom: -60px; left: -60px;
  width: 180px; height: 180px; border-radius: 50%;
  background: rgba(255,255,255,0.04); pointer-events: none;
}

.sidebar-brand { padding: 28px 24px 22px; border-bottom: 1px solid rgba(255,255,255,0.10); }
.brand-arabic { font-family: 'Amiri', serif; font-size: 13px; color: var(--gold-light); letter-spacing: 0.5px; margin-bottom: 6px; opacity: 0.9; }
.brand-name { font-weight: 800; font-size: 16px; color: #ffffff; line-height: 1.2; }
.brand-sub { font-size: 10.5px; color: rgba(255,255,255,0.55); margin-top: 4px; font-weight: 400; letter-spacing: 0.3px; }

.sidebar-nav { flex: 1; padding: 16px 0; overflow-y: auto; }
.nav-section-label { font-size: 9.5px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(255,255,255,0.35); padding: 14px 24px 6px; }
.nav-item {
  display: flex; align-items: center; gap: 12px; padding: 11px 24px;
  cursor: pointer; transition: all 0.2s; position: relative;
  color: rgba(255,255,255,0.65); font-size: 13.5px; font-weight: 500;
}
.nav-item:hover { color: #fff; background: rgba(255,255,255,0.06); }
.nav-item.active { color: #fff; background: rgba(255,255,255,0.10); }
.nav-item.active::before { content: ''; position: absolute; left: 0; top: 4px; bottom: 4px; width: 3px; background: var(--gold); border-radius: 0 2px 2px 0; }
.nav-icon {
  width: 34px; height: 34px; display: flex; align-items: center; justify-content: center;
  border-radius: 8px; background: rgba(255,255,255,0.08); font-size: 15px; flex-shrink: 0;
}
.nav-item.active .nav-icon { background: rgba(0,180,216,0.25); }

.sidebar-footer { padding: 18px 24px; border-top: 1px solid rgba(255,255,255,0.10); }
.user-card { display: flex; align-items: center; gap: 10px; cursor: pointer;}
.user-avatar { width: 36px; height: 36px; border-radius: 50%; background: var(--gold); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; color: #fff; flex-shrink: 0; }
.user-info { flex: 1; min-width: 0; }
.user-name { font-size: 12.5px; font-weight: 600; color: #fff; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.user-role { font-size: 10.5px; color: rgba(255,255,255,0.45); }

/* ════ PENYESUAIAN MAIN PANEL ════ */
/* Karena sidebar sekarang lebar (260px), kita geser main panel-nya */
.main { margin-left: 260px; }

/* ════ CSS KHUSUS DASHBOARD WAKAF & HALAMAN BARU ════ */
.wakaf-hero { background: linear-gradient(135deg, var(--emerald) 0%, var(--emerald-mid) 50%, #0096c7 100%); border-radius: 20px; padding: 36px 40px; color: #fff; position: relative; overflow: hidden; margin-bottom: 28px; }
.wakaf-hero::before { content: ''; position: absolute; top: -40px; right: -40px; width: 250px; height: 250px; border-radius: 50%; background: rgba(0,180,216,0.15); }
.wakaf-hero::after { content: ''; position: absolute; bottom: -60px; right: 160px; width: 180px; height: 180px; border-radius: 50%; background: rgba(255,255,255,0.05); }
.hero-arabic { font-family: 'Amiri', serif; font-size: 18px; color: var(--gold-light); margin-bottom: 10px; opacity: 0.9; }
.hero-title { font-size: 26px; font-weight: 800; line-height: 1.2; margin-bottom: 8px; }
.hero-subtitle { font-size: 13.5px; opacity: 0.7; max-width: 480px; line-height: 1.6; }
.hero-meta { display: flex; gap: 24px; margin-top: 24px; }
.hero-meta-item .label { font-size: 10.5px; opacity: 0.6; font-weight: 500; letter-spacing: 0.5px; text-transform: uppercase; }
.hero-meta-item .value { font-size: 22px; font-weight: 800; margin-top: 2px; color: var(--gold-light); }
.hero-meta-item .unit { font-size: 12px; opacity: 0.7; }

.kpi-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 28px; }
.kpi-card { background: var(--surface); border-radius: 16px; padding: 22px 22px 18px; border: 1px solid var(--border); box-shadow: var(--shadow); position: relative; overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; cursor: default; }
.kpi-card:hover { transform: translateY(-2px); box-shadow: 0 8px 40px rgba(2,62,138,0.14); }
.kpi-icon { width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 18px; margin-bottom: 14px; }
.kpi-icon.green { background: rgba(2,62,138,0.10); }
.kpi-icon.gold { background: rgba(0,180,216,0.12); }
.kpi-icon.blue { background: rgba(59,130,246,0.10); }
.kpi-icon.red { background: rgba(239,68,68,0.10); }
.kpi-label { font-size: 11.5px; color: var(--muted); font-weight: 500; letter-spacing: 0.2px; }
.kpi-value { font-size: 24px; font-weight: 800; color: var(--ink); margin: 6px 0 4px; line-height: 1; }
.kpi-change { display: inline-flex; align-items: center; gap: 4px; font-size: 11px; font-weight: 600; border-radius: 20px; padding: 2px 8px; }
.kpi-change.up { color: var(--emerald); background: rgba(2,62,138,0.08); }
.kpi-change.down { color: #ef4444; background: rgba(239,68,68,0.08); }

.content-grid { display: grid; grid-template-columns: 1fr 360px; gap: 20px; margin-bottom: 28px; }
.card-header { padding: 18px 22px 14px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border); }
.program-list { display: flex; flex-direction: column; gap: 18px; }
.program-item { }
.program-top { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 8px; }
.program-name { font-size: 13px; font-weight: 600; color: var(--ink); }
.program-category { font-size: 10px; font-weight: 600; letter-spacing: 0.5px; padding: 2px 8px; border-radius: 20px; text-transform: uppercase; }
.cat-pendidikan { background: rgba(59,130,246,0.10); color: #3b82f6; }
.cat-kesehatan { background: rgba(239,68,68,0.10); color: #ef4444; }
.cat-ekonomi { background: rgba(2,62,138,0.10); color: var(--emerald); }
.cat-sosial { background: rgba(0,180,216,0.12); color: var(--gold); }
.program-amounts { display: flex; align-items: baseline; gap: 4px; margin-bottom: 8px; }
.prog-collected { font-size: 16px; font-weight: 800; color: var(--emerald); }
.prog-target { font-size: 11.5px; color: var(--muted); }
.progress-bar-wrap { height: 8px; background: var(--cream-dark); border-radius: 99px; overflow: hidden; }
.progress-bar-fill { height: 100%; border-radius: 99px; background: linear-gradient(90deg, var(--emerald), var(--emerald-light)); transition: width 1s; position: relative; }
.progress-bar-fill.gold-fill { background: linear-gradient(90deg, var(--gold), var(--gold-light)); }
.prog-footer { display: flex; justify-content: space-between; margin-top: 6px; }
.prog-pct { font-size: 11px; font-weight: 700; color: var(--emerald); }
.prog-wakif { font-size: 11px; color: var(--muted); }

.ring-chart-wrap { display: flex; flex-direction: column; align-items: center; padding: 10px 0; }
.ring-svg { overflow: visible; }
.ring-center { text-anchor: middle; }
.ring-legend { display: flex; flex-direction: column; gap: 8px; width: 100%; margin-top: 16px; }
.legend-item { display: flex; align-items: center; gap: 8px; }
.legend-dot { width: 10px; height: 10px; border-radius: 3px; flex-shrink: 0; }
.legend-label { font-size: 12px; color: var(--muted); flex: 1; }
.legend-val { font-size: 12px; font-weight: 700; color: var(--ink); }

.bottom-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.activity-list { display: flex; flex-direction: column; gap: 0; }
.activity-item { display: flex; gap: 12px; align-items: flex-start; padding: 12px 0; border-bottom: 1px solid var(--border); }
.activity-item:last-child { border-bottom: none; }
.activity-avatar { width: 34px; height: 34px; border-radius: 50%; background: var(--emerald); display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700; color: #fff; flex-shrink: 0; }
.activity-avatar.gold { background: var(--gold); }
.activity-avatar.blue { background: #3b82f6; }
.activity-info { flex: 1; }
.activity-name { font-size: 13px; font-weight: 600; color: var(--ink); }
.activity-desc { font-size: 11.5px; color: var(--muted); margin-top: 1px; line-height: 1.4; }
.activity-time { font-size: 10.5px; color: var(--muted); flex-shrink: 0; padding-top: 2px; }
.activity-amount { font-size: 12.5px; font-weight: 700; color: var(--emerald); white-space: nowrap; }

.bar-chart-wrap { padding: 8px 0; }
.bar-months { display: flex; gap: 6px; align-items: flex-end; height: 100px; }
.bar-col { flex: 1; display: flex; flex-direction: column; align-items: center; gap: 4px; }
.bar { width: 100%; border-radius: 5px 5px 0 0; background: var(--emerald); opacity: 0.85; transition: opacity 0.2s; min-height: 4px; }
.bar:hover { opacity: 1; }
.bar.gold { background: var(--gold); }
.bar-label { font-size: 9.5px; color: var(--muted); font-weight: 500; }

.prog-table { width: 100%; border-collapse: collapse; }
.prog-table th { font-size: 10.5px; font-weight: 700; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; text-align: left; padding: 8px 12px; background: var(--cream); border-bottom: 1px solid var(--border); }
.prog-table td { font-size: 12.5px; padding: 10px 12px; border-bottom: 1px solid var(--border); }
.prog-table tr:last-child td { border-bottom: none; }
.prog-table tr:hover td { background: var(--cream); }
.status-pill { display: inline-block; padding: 2px 8px; border-radius: 20px; font-size: 10.5px; font-weight: 600; }
.status-aktif { background: rgba(2,62,138,0.10); color: var(--emerald); }
.status-selesai { background: rgba(0,180,216,0.12); color: var(--gold); }
.status-baru { background: rgba(59,130,246,0.10); color: #3b82f6; }

.page-title-block { margin-bottom: 24px; }
.page-title-block h2 { font-size: 22px; font-weight: 800; color: var(--ink); }
.page-title-block p { font-size: 13px; color: var(--muted); margin-top: 4px; }
table.data-table { width: 100%; border-collapse: collapse; }
table.data-table th { background: var(--cream); font-size: 11px; font-weight: 700; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; padding: 10px 16px; text-align: left; border-bottom: 1px solid var(--border); }
table.data-table td { padding: 12px 16px; border-bottom: 1px solid var(--border); font-size: 13px; }
table.data-table tr:last-child td { border-bottom: none; }
table.data-table tr:hover td { background: var(--cream); }

</style>
</head>
<body>

<div class="shell">

  @include('partials.sidebar')

  <div class="main">
    
    @yield('konten')

  </div>
</div>

<script>
/* ── THEME TOGGLE ── */
function toggleTheme() {
  const isDark = document.body.classList.toggle('dark-mode');
  const btn = document.getElementById('theme-toggle');
  btn.textContent = isDark ? '☀️' : '🌙';
  localStorage.setItem('bmt_theme', isDark ? 'dark' : 'light');
}

/* ── NAV ── */
function goPage(id) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('page-' + id).classList.add('active');
  document.querySelectorAll('.nav-btn').forEach(b => {
    if (b.getAttribute('onclick') && b.getAttribute('onclick').includes("'" + id + "'")) b.classList.add('active');
  });
}

/* ── SALDO HIDE/SHOW ── */
let hidden = false;
function toggleHide() {
  hidden = !hidden;
  const el = document.getElementById('saldo-val');
  el.textContent = hidden ? '••••••••' : '7.240.500';
  document.getElementById('eye-btn').textContent = hidden ? '🙈' : '👁';
}

function selectPill(el, name, val) {
  document.querySelectorAll('.saldo-pill').forEach(p => p.classList.remove('active-pill'));
  el.classList.add('active-pill');
}

/* ── PRODUCT SELECT ── */
function selectProd(el) {
  document.querySelectorAll('.prod-card').forEach(c => c.classList.remove('selected'));
  el.classList.add('selected');
}

/* ── AKAD ANGGOTA ── */
function selectAkadAnggota(el, nama) {
  document.querySelectorAll('#page-pembiayaan .prod-card').forEach(c => c.classList.remove('selected'));
  el.classList.add('selected');
  document.getElementById('new-pb-title').textContent = 'Formulir Pengajuan — ' + nama;
  document.getElementById('akad-select').value = nama;
}

/* ── SIMULASI ── */
function hitungSimulasi() {
  const n = parseFloat(document.getElementById('pb-nominal').value) || 0;
  const t = parseFloat(document.getElementById('pb-tenor').value) || 12;
  const box = document.getElementById('sim-box');
  if (n > 0) {
    box.style.display = 'block';
    const margin = n * 0.03 * (t/12);
    const angs = (n + margin) / t;
    document.getElementById('s-pokok').textContent = 'Rp ' + fmt(n);
    document.getElementById('s-margin').textContent = 'Rp ' + fmt(margin);
    document.getElementById('s-angs').textContent = 'Rp ' + fmt(angs) + '/bln';
  } else {
    box.style.display = 'none';
  }
}
function fmt(n) {
  if (n >= 1e6) return (n/1e6).toFixed(2) + ' jt';
  if (n >= 1e3) return (n/1e3).toFixed(0) + ' rb';
  return n.toFixed(0);
}

/* ── DONASI TABS ── */
function switchDonasi(el, tabId) {
  document.querySelectorAll('.donasi-tabs .dtab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
  ['tab-zis','tab-wakaf','tab-riwayat'].forEach(id => {
    document.getElementById(id).style.display = (id === tabId) ? 'block' : 'none';
  });
}

/* ── ZIS TYPE ── */
function switchZisType(el) {
  document.querySelectorAll('#zis-type-tabs .ptab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

/* ── PRESET ── */
function setPreset(btn, val) {
  document.querySelectorAll('.nominal-presets .preset-btn').forEach(b => b.classList.remove('selected'));
  btn.classList.add('selected');
  if (val !== 'custom') document.getElementById('zis-nominal').value = val;
}
function setPresetWakaf(btn, val) {
  btn.closest('.nominal-presets').querySelectorAll('.preset-btn').forEach(b => b.classList.remove('selected'));
  btn.classList.add('selected');
  document.getElementById('wakaf-nominal').value = val;
}

/* ── WAKAF PROGRAM SELECT ── */
function selectWakafProg(el) {
  document.querySelectorAll('.wp-item').forEach(w => w.classList.remove('selected-prog'));
  el.classList.add('selected-prog');
  const name = el.querySelector('.wp-name').textContent;
  document.getElementById('selected-wakaf-prog').textContent = name;
  document.getElementById('ikrar-prog').textContent = name.substring(0,24) + (name.length>24?'…':'');
  document.getElementById('cert-prog').textContent = name.substring(0,20) + (name.length>20?'…':'');
}

/* ── FUNGSI BARU UNTUK PROSES ZIS ── */
function prosesZis() {
  const nominal = document.getElementById('zis-nominal').value;
  
  // Validasi input nominal
  if (!nominal || parseInt(nominal) < 10000) { 
    toast('⚠️ Masukkan nominal ZIS minimal Rp 10.000.'); 
    return; 
  }
  
  // Mengambil jenis ZIS dari tab yang sedang aktif
  const jenis = document.querySelector('#zis-type-tabs .ptab.active').textContent;
  
  // Mengambil opsi peruntukan
  const peruntukan = document.getElementById('zis-peruntukan').value;

  // Menyuntikkan data ke dalam elemen Modal
  document.getElementById('konfirmasi-zis-jenis').textContent = jenis;
  document.getElementById('konfirmasi-zis-peruntukan').textContent = peruntukan;
  document.getElementById('konfirmasi-zis-nominal').textContent = 'Rp ' + parseInt(nominal).toLocaleString('id-ID');

  // Menampilkan Modal setelah data disuntikkan
  openModal('modal-konfirmasi-zis');
}

function prosesWakaf() {
  const check = document.getElementById('ikrar-check');
  if (!check.checked) { toast('⚠️ Centang persetujuan ikrar wakaf terlebih dahulu.'); return; }
  const nominal = document.getElementById('wakaf-nominal').value;
  if (!nominal || parseInt(nominal) < 10000) { toast('⚠️ Masukkan nominal wakaf minimal Rp 10.000.'); return; }
  document.getElementById('cert-nominal').textContent = 'Rp ' + parseInt(nominal).toLocaleString('id-ID');
  openModal('modal-wakaf-otp');
}

/* ── MODAL ── */
function openModal(id) { document.getElementById(id).classList.add('open'); }
function closeModal(id) { document.getElementById(id).classList.remove('open'); }
document.querySelectorAll('.modal-overlay').forEach(o => {
  o.addEventListener('click', e => { if (e.target === o) o.classList.remove('open'); });
});

/* ── OTP INPUT FLOW ── */
function moveOtp(el) {
  if (el.value.length === 1) {
    const inputs = el.closest('.otp-wrap').querySelectorAll('.otp-digit');
    const idx = Array.from(inputs).indexOf(el);
    if (idx < inputs.length - 1) inputs[idx + 1].focus();
  }
}

/* ── TOAST ── */
let toastT;
function toast(msg) {
  const el = document.getElementById('toast-el');
  el.textContent = msg;
  el.classList.add('show');
  clearTimeout(toastT);
  toastT = setTimeout(() => el.classList.remove('show'), 3500);
}

/* ── INISIALISASI (Progress Bar & Tema) ── */
window.addEventListener('DOMContentLoaded', () => {
  // Cek Tema yang tersimpan
  const savedTheme = localStorage.getItem('bmt_theme');
  if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.body.classList.add('dark-mode');
    document.getElementById('theme-toggle').textContent = '☀️';
  }

  // Animasi Progress Bar
  setTimeout(() => {
    document.querySelectorAll('[class*="-fill"]').forEach(el => {
      const w = el.style.width;
      el.style.transition = 'none';
      el.style.width = '0';
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          el.style.transition = 'width 1.2s cubic-bezier(0.4,0,0.2,1)';
          el.style.width = w;
        });
      });
    });
  }, 200);
});
</script>
</body>
</html>