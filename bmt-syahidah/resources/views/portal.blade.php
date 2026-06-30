@extends('layouts.app')

@section('title', 'BMT Syahidah — Dasbor Anggota')

@section('konten')

    <!-- ════ HEADER ════ -->
    <header class="header">
      <div class="header-greeting">
        <div class="header-name">
          Musyaffa Abdullah
          <span class="member-badge">Alumni</span>
        </div>
        <div class="header-no">BMT-2024-0029 · Ciputat, Tangerang Selatan</div>
      </div>
      <div class="header-right">
        <div class="hdr-btn" id="theme-toggle" onclick="toggleTheme()" title="Ganti Mode Tema">🌙</div>
        <div class="hdr-btn">🔔<span class="notif-pip"></span></div>
        <div class="hdr-btn">❓</div>
        <div class="hdr-btn">⚙️</div>
      </div>
    </header>

    <!-- ════ PAGE: BERANDA ════ -->
    <div class="page active" id="page-beranda">
      <!-- SALDO CARD -->
      <div class="saldo-card">
        <div class="saldo-top">
          <div>
            <div class="saldo-label-row">
              <span class="saldo-label">Total Saldo Simpanan</span>
              <div class="saldo-eye" onclick="toggleHide()" id="eye-btn" title="Sembunyikan saldo">👁</div>
            </div>
            <div class="saldo-amount" id="saldo-display">
              <span class="currency">Rp</span><span id="saldo-val">7.240.500</span>
            </div>
          </div>
          <div class="saldo-chip">
            <span class="saldo-chip-dot"></span>
            Rekening Aktif
          </div>
        </div>
        <div class="saldo-product-pills">
          <div class="saldo-pill active-pill" onclick="selectPill(this, 'Simpanan Syahida', '4.850.000')">
            <div class="p-name">Syahida</div>
            <div class="p-val" id="pill-syahida">Rp 4,85 jt</div>
          </div>
          <div class="saldo-pill" onclick="selectPill(this, 'Si Cerdas', '1.500.000')">
            <div class="p-name">Si Cerdas</div>
            <div class="p-val" id="pill-cerdas">Rp 1,50 jt</div>
          </div>
          <div class="saldo-pill" onclick="selectPill(this, 'Si Mabrur', '890.500')">
            <div class="p-name">Si Mabrur</div>
            <div class="p-val" id="pill-mabrur">Rp 890 rb</div>
          </div>
        </div>
      </div>

      <!-- QUICK ACTIONS -->
      <div class="quick-actions">
        <div class="qa-btn primary-action" onclick="goPage('simpanan')">
          <div class="qa-icon">⬆️</div>
          <span class="qa-label">Setor Simpanan</span>
        </div>
        <div class="qa-btn primary-action" onclick="goPage('simpanan')">
          <div class="qa-icon">⬇️</div>
          <span class="qa-label">Tarik Dana</span>
        </div>
        <div class="qa-btn secondary-action" onclick="goPage('pembiayaan')">
          <div class="qa-icon">📝</div>
          <span class="qa-label">Ajukan Pembiayaan</span>
        </div>
        <div class="qa-btn gold-action" onclick="goPage('ziswakaf')">
          <div class="qa-icon">🌿</div>
          <span class="qa-label">Wakaf Produktif</span>
        </div>
        <div class="qa-btn gold-action" onclick="goPage('ziswakaf')">
          <div class="qa-icon">⭐</div>
          <span class="qa-label">Bayar Zakat</span>
        </div>
      </div>

      <!-- LOWER -->
      <div class="beranda-lower">
        <!-- Mutasi Rekening -->
        <div class="card">
          <div class="card-head">
            <div>
              <div class="card-title">Riwayat Transaksi Terkini</div>
              <div class="card-sub">Pembaruan real-time seluruh rekening</div>
            </div>
            <span class="card-link" onclick="goPage('simpanan')">Lihat semua →</span>
          </div>
          <div class="card-body">
            <div class="mutasi-list" id="mutasi-list-beranda">
              <!-- JS akan memuat isi di sini -->
            </div>
          </div>
        </div>

        <!-- Right: Info stack -->
        <div class="info-stack">
          <div class="pembiayaan-mini">
            <div class="pm-label">Pembiayaan Aktif</div>
            <div class="pm-akad">Murabahah — Peralatan Usaha</div>
            <div class="pm-sisa">Rp 18.750.000 sisa</div>
            <div class="pm-progress">
              <div class="pm-fill" style="width:62.5%"></div>
            </div>
            <div class="pm-meta">
              <span>Lunas <strong>62.5%</strong></span>
              <span>Sisa <strong>15 angsuran</strong></span>
            </div>
          </div>

          <div class="jatuh-tempo-alert">
            <span class="jt-icon">⏰</span>
            <div class="jt-text">
              <div class="jt-title">Angsuran Jatuh Tempo</div>
              <div class="jt-body">Angsuran ke-10 sebesar <strong>Rp 1.250.000</strong> jatuh tempo pada <strong>20 Mei 2026</strong>.</div>
              <button class="jt-btn" onclick="openModal('modal-bayar')">Bayar Sekarang →</button>
            </div>
          </div>

          <div class="bagi-card">
            <div class="bagi-lbl">Estimasi Bagi Hasil Juni</div>
            <div class="bagi-amount">Rp 51.200</div>
            <div class="bagi-sub">Berdasarkan saldo rata-rata bulan ini</div>
            <div class="bagi-nisbah">
              <span>Nisbah Anggota</span>
              <strong>60 : 40</strong>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /beranda -->

    <!-- ════ PAGE: SIMPANAN ════ -->
    <div class="page" id="page-simpanan">
      <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:22px">
        <div>
          <h2 style="font-size:20px;font-weight:700">Simpanan Saya</h2>
          <p style="font-size:12.5px;color:var(--ink-soft);margin-top:2px">Kelola rekening simpanan dan ajukan transaksi</p>
        </div>
      </div>

      <!-- Product Cards -->
      <div class="product-cards">
        <div class="prod-card selected" onclick="selectProd(this)">
          <div class="prod-stripe" style="background:linear-gradient(90deg,var(--teal-900),var(--teal-300))"></div>
          <div class="prod-icon">💼</div>
          <div class="prod-name">Simpanan Syahida</div>
          <div class="prod-akad">Wadiah Yad Dhamanah</div>
          <div class="prod-saldo"><span class="currency">Rp </span><span class="dinamis-syahida">4.850.000</span></div>
        </div>
        <div class="prod-card" onclick="selectProd(this)">
          <div class="prod-stripe" style="background:linear-gradient(90deg,#3b82f6,#93c5fd)"></div>
          <div class="prod-icon">🎓</div>
          <div class="prod-name">Si Cerdas</div>
          <div class="prod-akad">Mudharabah Muthlaqah</div>
          <div class="prod-saldo"><span class="currency">Rp </span>1.500.000</div>
        </div>
        <div class="prod-card" onclick="selectProd(this)">
          <div class="prod-stripe" style="background:linear-gradient(90deg,var(--saffron),var(--saffron-light))"></div>
          <div class="prod-icon">🕌</div>
          <div class="prod-name">Si Mabrur</div>
          <div class="prod-akad">Mudharabah Muthlaqah</div>
          <div class="prod-saldo"><span class="currency">Rp </span>890.500</div>
        </div>
      </div>

      <!-- Aksi Transaksi -->
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px">
        <div class="card">
          <div class="card-head"><div class="card-title">Setor Simpanan</div></div>
          <div class="card-body">
            <div class="transaksi-form">
              <div class="fg">
                <label class="flabel">Rekening Tujuan</label>
                <select class="fselect">
                  <option>Simpanan Syahida (Utama)</option>
                  <option>Si Cerdas</option>
                  <option>Si Mabrur</option>
                </select>
              </div>
              <div class="fg">
                <label class="flabel">Nominal Setoran (Rp)</label>
                <input class="finput" type="number" id="input-setor" placeholder="Minimum Rp 10.000">
              </div>
              <div class="fg full">
                <label class="flabel">Metode Pembayaran</label>
                <select class="fselect">
                  <option>Transfer Bank (Virtual Account)</option>
                  <option>Setor Tunai di Kantor</option>
                </select>
              </div>
            </div>
            <div style="margin-top:16px;padding:14px;background:var(--sand-100);border-radius:var(--radius-md);font-size:12px;color:var(--ink-soft);line-height:1.6">
              💡 Setelah klik <strong>Generate VA</strong>, lakukan transfer ke nomor Virtual Account yang ditampilkan.
            </div>
            <div style="display:flex;gap:10px;margin-top:14px">
              <button class="btn-primary" onclick="openModal('modal-va')">Generate Virtual Account</button>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-head"><div class="card-title">Tarik Dana</div></div>
          <div class="card-body">
            <div class="transaksi-form">
              <div class="fg">
                <label class="flabel">Rekening Sumber</label>
                <select class="fselect">
                  <option>Simpanan Syahida (Utama)</option>
                </select>
              </div>
              <div class="fg">
                <label class="flabel">Nominal Penarikan (Rp)</label>
                <input class="finput" type="number" id="input-tarik" placeholder="Masukkan Nominal">
              </div>
              <div class="fg">
                <label class="flabel">Bank Tujuan</label>
                <select class="fselect">
                  <option>BRI — *** *** 4821</option>
                  <option>Mandiri — *** *** 9012</option>
                </select>
              </div>
              <div class="fg">
                <label class="flabel">Keterangan</label>
                <input class="finput" type="text" placeholder="Opsional">
              </div>
            </div>
            <div style="display:flex;gap:10px;margin-top:14px">
              <button class="btn-primary" onclick="openModal('modal-otp')">Ajukan Penarikan</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Riwayat Lengkap -->
      <div class="card">
        <div class="card-head">
          <div><div class="card-title">Mutasi Rekening</div><div class="card-sub">Menampilkan transaksi terbaru secara Live</div></div>
          <button class="btn-outline" style="font-size:11.5px;padding:7px 14px" onclick="toast('📥 Laporan mutasi dikirim ke email Anda!')">📥 Unduh Mutasi</button>
        </div>
        <div class="card-body" style="padding:0; overflow-x: auto;">
          <table class="jadwal-table">
            <thead>
              <tr><th>Tanggal</th><th>Keterangan</th><th>Produk</th><th>Debet</th><th>Kredit</th><th>Saldo Syahida</th></tr>
            </thead>
            <tbody id="mutasi-table-simpanan">
              <!-- JS akan memuat isi di sini -->
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- /simpanan -->

    <!-- ════ PAGE: PEMBIAYAAN ════ -->
    <div class="page" id="page-pembiayaan">
      <div style="margin-bottom:22px">
        <h2 style="font-size:20px;font-weight:700">Pembiayaan Saya</h2>
        <p style="font-size:12.5px;color:var(--ink-soft);margin-top:2px">Status pembiayaan aktif dan pengajuan baru</p>
      </div>

      <div class="pembiayaan-status-card">
        <div>
          <div class="pb-title">Pembiayaan Aktif · ID: PBY-2024-0291</div>
          <div class="pb-akad-name">Murabahah — Peralatan Usaha Warung</div>
          <div class="pb-tujuan">Pembelian peralatan masak dan display makanan untuk warung makan Depok</div>

          <div class="pb-progress-wrap">
            <div class="pb-progress-bar"><div class="pb-fill" style="width:62.5%"></div></div>
            <div class="pb-labels">
              <span>Angsuran ke-15 dari 24</span>
              <span style="font-weight:700;color:var(--teal-700)">62.5% Lunas</span>
            </div>
          </div>

          <div class="pb-stats">
            <div class="pb-stat"><div class="pb-stat-label">Pokok + Margin</div><div class="pb-stat-val">Rp 30.000.000</div></div>
            <div class="pb-stat"><div class="pb-stat-label">Sudah Dibayar</div><div class="pb-stat-val" style="color:var(--teal-700)">Rp 18.750.000</div></div>
            <div class="pb-stat"><div class="pb-stat-label">Sisa Pokok</div><div class="pb-stat-val" style="color:#ef4444">Rp 11.250.000</div></div>
          </div>
        </div>

        <div class="angsuran-tag">
          <div class="at-label">Angsuran Bulan Ini</div>
          <div class="at-amount">Rp 1.250.000</div>
          <div class="at-due">Jatuh tempo 20 Mei 2026</div>
          <button class="btn-saffron" onclick="openModal('modal-bayar')" style="width:100%;justify-content:center">Bayar Angsuran</button>
        </div>
      </div>

      <!-- Ajukan Pembiayaan Baru -->
      <div class="sec-div"><div class="sec-div-line"></div><div class="sec-div-label">Ajukan Pembiayaan Baru</div><div class="sec-div-line"></div></div>

      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:20px">
        <div class="prod-card" onclick="selectAkadAnggota(this,'Murabahah')">
          <div class="prod-stripe" style="background:linear-gradient(90deg,var(--teal-900),var(--teal-300))"></div>
          <div class="prod-icon">🛒</div>
          <div class="prod-name">Murabahah</div>
          <div class="prod-akad">Jual-beli, angsuran tetap</div>
        </div>
        <div class="prod-card" onclick="selectAkadAnggota(this,'Mudharabah')">
          <div class="prod-stripe" style="background:linear-gradient(90deg,var(--saffron),var(--saffron-light))"></div>
          <div class="prod-icon">🤝</div>
          <div class="prod-name">Mudharabah</div>
          <div class="prod-akad">Bagi hasil usaha</div>
        </div>
        <div class="prod-card" onclick="selectAkadAnggota(this,'Musyarakah')">
          <div class="prod-stripe" style="background:linear-gradient(90deg,#3b82f6,#93c5fd)"></div>
          <div class="prod-icon">🏗️</div>
          <div class="prod-name">Musyarakah</div>
          <div class="prod-akad">Usaha patungan</div>
        </div>
      </div>

      <div class="card">
        <div class="card-head"><div class="card-title" id="new-pb-title">Formulir Pengajuan — Pilih akad di atas</div></div>
        <div class="card-body">
          <div class="transaksi-form">
            <div class="fg">
              <label class="flabel">Nominal Diajukan (Rp)</label>
              <input class="finput" type="number" placeholder="0" id="pb-nominal" oninput="hitungSimulasi()">
            </div>
            <div class="fg">
              <label class="flabel">Jangka Waktu</label>
              <select class="fselect" id="pb-tenor" onchange="hitungSimulasi()">
                <option value="12" selected>12 Bulan</option>
                <option value="24">24 Bulan</option>
              </select>
            </div>
          </div>
          <div id="sim-box" style="display:none;background:var(--sand-100);border:1.5px dashed var(--teal-300);border-radius:var(--radius-md);padding:16px;margin-top:16px">
            <div style="font-size:10.5px;font-weight:700;color:var(--teal-500);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:10px">✦ Simulasi Angsuran (Margin 3%/tahun)</div>
            <div style="display:flex;gap:24px;flex-wrap:wrap">
              <div><div style="font-size:11px;color:var(--ink-soft)">Pokok</div><div style="font-size:16px;font-weight:700;color:var(--ink)" id="s-pokok">—</div></div>
              <div><div style="font-size:11px;color:var(--ink-soft)">Total Margin</div><div style="font-size:16px;font-weight:700;color:var(--saffron)" id="s-margin">—</div></div>
              <div><div style="font-size:11px;color:var(--ink-soft)">Per Bulan</div><div style="font-size:18px;font-weight:700;color:var(--teal-700)" id="s-angs">—</div></div>
            </div>
          </div>
          <button class="btn-primary" style="margin-top: 16px;" onclick="toast('📋 Pengajuan berhasil dikirim! Status dapat dipantau di halaman ini.')">Kirim Pengajuan</button>
        </div>
      </div>
    </div><!-- /pembiayaan -->

    <!-- ════ PAGE: ZIS & WAKAF ════ -->
    <div class="page" id="page-ziswakaf">
      <div style="margin-bottom:22px">
        <h2 style="font-size:20px;font-weight:700">ZIS & Wakaf Produktif</h2>
        <p style="font-size:12.5px;color:var(--ink-soft);margin-top:2px">Salurkan zakat, infaq, sedekah, dan wakaf uang secara digital</p>
      </div>

      <div class="donasi-tabs" id="donasi-tabs">
        <div class="dtab active" onclick="switchDonasi(this,'tab-zis')">Zakat, Infaq & Sedekah</div>
        <div class="dtab" onclick="switchDonasi(this,'tab-wakaf')">Wakaf Produktif</div>
      </div>

      <!-- Tab: ZIS -->
      <div id="tab-zis">
        <div class="zis-form-wrap">
          <div class="card">
            <div class="card-head"><div class="card-title">Salurkan ZIS</div></div>
            <div class="card-body">
              <div class="product-tabs" id="zis-type-tabs">
                <div class="ptab active" onclick="switchZisType(this)">Zakat Maal</div>
                <div class="ptab" onclick="switchZisType(this)">Infaq</div>
                <div class="ptab" onclick="switchZisType(this)">Sedekah</div>
              </div>

              <div style="margin-bottom:14px">
                <label class="flabel" style="display:block;margin-bottom:6px">Nominal Zakat (Rp)</label>
                <input class="finput" style="width:100%" type="number" placeholder="Masukkan nominal" id="zis-nominal">
                <div class="nominal-presets" style="margin-top:8px">
                  <button class="preset-btn" onclick="setPreset(this,'100000')">Rp 100rb</button>
                  <button class="preset-btn" onclick="setPreset(this,'500000')">Rp 500rb</button>
                </div>
              </div>

              <div class="fg" style="margin-bottom:14px">
                <label class="flabel">Peruntukan</label>
                <select class="fselect" id="zis-peruntukan">
                  <option>Fakir & Miskin (Umum)</option>
                  <option>Program Pendidikan Anak Yatim</option>
                  <option>Bantuan Bencana</option>
                </select>
              </div>

              <div style="border:1.5px solid var(--border);border-radius:var(--radius-md);padding:14px 16px;background:var(--sand-100);font-size:12.5px;margin-bottom:16px;text-align:center;">
                <div style="font-family:'Amiri',serif;font-size:16px;color:var(--teal-900);">نَوَيْتُ أَنْ أُخْرِجَ زَكَاةَ مَالِي</div>
                <div style="color:var(--ink-soft);font-size:12px;font-style:italic">"Saya niat mengeluarkan zakat hartaku..."</div>
              </div>

              <button class="btn-saffron" style="width:100%;justify-content:center" onclick="prosesZis()">
                🤲 Konfirmasi & Bayar ZIS
              </button>
            </div>
          </div>

          <div style="display:flex;flex-direction:column;gap:14px">
            <div class="bagi-card" style="background:linear-gradient(135deg,var(--saffron),#b8720a)">
              <div class="bagi-lbl">Dampak ZIS Anda</div>
              <div style="display:flex;flex-direction:column;gap:8px;margin-top:10px">
                <div style="display:flex;align-items:center;gap:8px;font-size:12.5px"><span>📚</span><span>3 anak yatim terbantu pendidikan</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab: Wakaf -->
      <div id="tab-wakaf" style="display:none">
        <div class="zis-form-wrap">
          <div>
            <div style="font-size:13px;font-weight:600;color:var(--ink);margin-bottom:12px">Pilih Program Wakaf</div>
            <div class="wakaf-programs">
              <div class="wp-item selected-prog" onclick="selectWakafProg(this)">
                <div class="wp-head">
                  <div class="wp-name">Beasiswa Mahasiswa Berprestasi</div>
                  <span class="wp-cat pend">Pendidikan</span>
                </div>
                <div class="wp-progress"><div class="wp-fill" style="width:86%"></div></div>
              </div>
              <div class="wp-item" onclick="selectWakafProg(this)">
                <div class="wp-head">
                  <div class="wp-name">Modal Usaha Mikro Alumni UIN</div>
                  <span class="wp-cat ekon">Ekonomi</span>
                </div>
                <div class="wp-progress"><div class="wp-fill" style="width:97%"></div></div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-head"><div class="card-title">Ikrar Wakaf Digital</div></div>
            <div class="card-body">
              <div style="background:var(--teal-100);border-radius:var(--radius-md);padding:14px 16px;margin-bottom:16px">
                <div style="font-size:10.5px;font-weight:700;color:var(--teal-700);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px">Program Dipilih:</div>
                <div style="font-size:13.5px;font-weight:700;color:var(--teal-900)" id="selected-wakaf-prog">Beasiswa Mahasiswa Berprestasi</div>
              </div>

              <div class="fg" style="margin-bottom:14px">
                <label class="flabel">Nominal Wakaf (Rp)</label>
                <input class="finput" type="number" placeholder="Minimum Rp 10.000" id="wakaf-nominal">
              </div>

              <div style="display:flex;align-items:flex-start;gap:8px;margin-bottom:14px">
                <input type="checkbox" id="ikrar-check" style="margin-top:3px;accent-color:var(--teal-700)">
                <label for="ikrar-check" style="font-size:12px;color:var(--ink-mid);line-height:1.5;cursor:pointer">Saya telah membaca dan menyetujui ikrar wakaf di atas dengan penuh kesadaran dan keikhlasan.</label>
              </div>

              <button class="btn-saffron" style="width:100%;justify-content:center" onclick="prosesWakaf()">
                🌿 Lanjut ke Pembayaran Wakaf
              </button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /ziswakaf -->

    <!-- ════ PAGE: PROFIL ════ -->
    <div class="page" id="page-profil">
      <div class="profil-hero">
        <div class="profil-av">MA</div>
        <div class="profil-info">
          <div class="profil-name">Musyaffa Abdullah</div>
          <div class="profil-no">BMT-2024-0029 · Anggota sejak Maret 2024</div>
          <div class="profil-tags">
            <span class="profil-tag">Alumni UIN</span>
            <span class="profil-tag">S.E. Perbankan Syariah</span>
            <span class="profil-tag">Rekening Aktif</span>
          </div>
        </div>
      </div>

      <div class="profil-grid">

        <!-- Data Diri -->
        <div class="card">
          <div class="card-head">
            <div class="card-title">Data Pribadi</div>
            <span class="card-link" onclick="toast('✏️ Mode edit data diri diaktifkan.')">Edit</span>
          </div>
          <div class="card-body" style="padding:0 22px">
            <div class="info-list">
              <div class="info-row"><span class="info-label">Nama Lengkap</span><span class="info-value">Musyaffa Abdullah, S.E.</span></div>
              <div class="info-row"><span class="info-label">NIK</span><span class="info-value" style="font-family:'DM Mono',monospace;font-size:12px">3674xxxx xxxx xxxx</span></div>
              <div class="info-row"><span class="info-label">Nomor HP</span><span class="info-value">+62 812 xxxx 0029</span></div>
              <div class="info-row"><span class="info-label">Email</span><span class="info-value">musyaffa@alumni.uinjkt.ac.id</span></div>
              <div class="info-row"><span class="info-label">Alamat</span><span class="info-value">Jl. Ir. H. Juanda No. 95, Ciputat</span></div>
              <div class="info-row"><span class="info-label">Status</span><span class="info-value">Alumni UIN Syarif Hidayatullah Jakarta</span></div>
              <div class="info-row"><span class="info-label">Angkatan</span><span class="info-value">2019 · Perbankan Syariah</span></div>
            </div>
          </div>
        </div>

        <!-- Portofolio -->
        <div style="display:flex;flex-direction:column;gap:16px">
          <div class="card">
            <div class="card-head"><div class="card-title">Portofolio Keuangan</div></div>
            <div class="card-body">
              <div class="ring-section">
                <div class="ring-wrap">
                  <svg class="ring-svg" width="120" height="120" viewBox="0 0 120 120">
                    <circle cx="60" cy="60" r="46" fill="none" stroke="#e0d8c8" stroke-width="18"/>
                    <circle cx="60" cy="60" r="46" fill="none" stroke="#145e53" stroke-width="18"
                      stroke-dasharray="181.3" stroke-dashoffset="65"
                      style="transform:rotate(-90deg);transform-origin:60px 60px"/>
                    <circle cx="60" cy="60" r="46" fill="none" stroke="#d4860a" stroke-width="18"
                      stroke-dasharray="60" stroke-dashoffset="-116.3"
                      style="transform:rotate(-90deg);transform-origin:60px 60px"/>
                    <circle cx="60" cy="60" r="46" fill="none" stroke="#3b82f6" stroke-width="18"
                      stroke-dasharray="47.1" stroke-dashoffset="-176.3"
                      style="transform:rotate(-90deg);transform-origin:60px 60px"/>
                    <text x="60" y="56" text-anchor="middle" style="font-size:9px;fill:#6b7280;font-family:'DM Sans',sans-serif">Total</text>
                    <text x="60" y="70" text-anchor="middle" style="font-size:11px;font-weight:700;fill:#111827;font-family:'DM Sans',sans-serif">10,2 jt</text>
                  </svg>
                  <div class="ring-legend-v">
                    <div class="rl-item">
                      <div class="rl-dot" style="background:#145e53"></div>
                      <span class="rl-label">Simpanan</span>
                      <span class="rl-val">Rp 7,2 jt</span>
                    </div>
                    <div class="rl-item">
                      <div class="rl-dot" style="background:#d4860a"></div>
                      <span class="rl-label">Pembiayaan</span>
                      <span class="rl-val">Rp 1,9 jt</span>
                    </div>
                    <div class="rl-item">
                      <div class="rl-dot" style="background:#3b82f6"></div>
                      <span class="rl-label">ZIS & Wakaf</span>
                      <span class="rl-val">Rp 1,1 jt</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-head"><div class="card-title">Keamanan Akun</div></div>
            <div class="card-body">
              <div style="display:flex;flex-direction:column;gap:10px">
                <button class="btn-outline" style="width:100%;justify-content:flex-start;text-align:left" onclick="toast('🔐 Halaman ganti kata sandi dibuka!')">🔐 Ganti Kata Sandi</button>
                <button class="btn-outline" style="width:100%;justify-content:flex-start;text-align:left" onclick="toast('📱 Pengaturan OTP dibuka!')">📱 Pengaturan OTP / PIN</button>
                <button class="btn-outline" style="width:100%;justify-content:flex-start;text-align:left;color:#ef4444;border-color:rgba(239,68,68,0.3)" onclick="toast('👋 Anda berhasil keluar dari akun.')">🚪 Keluar dari Akun</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /profil -->

    <!-- ════ SEMUA MODALS OVERLAY ════ -->
    
    <!-- Modal: Virtual Account -->
    <div class="modal-overlay" id="modal-va">
      <div class="modal" style="text-align:center">
        <div style="font-size:36px;margin-bottom:10px">🏦</div>
        <div class="modal-title">Virtual Account Setoran</div>
        <div class="modal-sub">Transfer ke nomor VA berikut untuk menyelesaikan setoran.</div>
        <div style="background:var(--sand-100);border:1.5px dashed var(--teal-300);border-radius:var(--radius-md);padding:20px;margin:10px 0 18px">
          <div style="font-size:11px;font-weight:600;color:var(--ink-soft);letter-spacing:0.5px;text-transform:uppercase;margin-bottom:8px">Nomor Virtual Account</div>
          <div style="font-family:'DM Mono',monospace;font-size:24px;font-weight:700;color:var(--teal-900);letter-spacing:3px">1234 5678 9012</div>
        </div>
        <div class="modal-actions" style="justify-content:center; flex-wrap: wrap;">
          <button class="btn-primary" onclick="closeModal('modal-va');toast('📋 Nomor VA disalin ke clipboard!')">Salin Nomor VA</button>
          <button class="btn-outline" onclick="closeModal('modal-va')">Tutup</button>
          <button class="btn-outline" style="width: 100%; border-style: dashed; background: var(--teal-50);" onclick="simulasiBayarVA()">[Demo] Simulasi Transfer Berhasil</button>
        </div>
      </div>
    </div>

    <!-- Modal: OTP Penarikan -->
    <div class="modal-overlay" id="modal-otp">
      <div class="modal" style="text-align:center">
        <div style="font-size:36px;margin-bottom:10px">📱</div>
        <div class="modal-title">Verifikasi OTP</div>
        <div class="modal-sub">Kode OTP 6 digit telah dikirim ke nomor <strong>+62 812 xxxx 0029</strong>. Masukkan kode untuk melanjutkan penarikan.</div>
        <div class="otp-wrap">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
        </div>
        <div class="modal-actions" style="justify-content:center;margin-top:14px">
          <button class="btn-primary" onclick="konfirmasiTarikFinal()">Konfirmasi Penarikan</button>
          <button class="btn-outline" onclick="closeModal('modal-otp')">Batal</button>
        </div>
      </div>
    </div>

    <!-- Modal: Konfirmasi ZIS -->
    <div class="modal-overlay" id="modal-konfirmasi-zis">
      <div class="modal" style="text-align:center">
        <div style="font-size:40px;margin-bottom:8px">⭐</div>
        <div class="modal-title">Konfirmasi ZIS</div>
        <div class="modal-sub">Pastikan nominal dan niat ZIS Anda sudah benar sebelum melanjutkan.</div>
        <div style="background:var(--saffron-pale);border:1px solid rgba(212,134,10,0.2);border-radius:var(--radius-md);padding:16px;margin:12px 0 18px;text-align:left">
          <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span style="font-size:12px;color:var(--ink-soft)">Jenis</span><span style="font-size:12.5px;font-weight:600" id="konfirmasi-zis-jenis">Zakat Maal</span></div>
          <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span style="font-size:12px;color:var(--ink-soft)">Peruntukan</span><span style="font-size:12.5px;font-weight:600" id="konfirmasi-zis-peruntukan">Fakir & Miskin</span></div>
          <div style="display:flex;justify-content:space-between"><span style="font-size:12px;color:var(--ink-soft)">Nominal</span><span style="font-size:15px;font-weight:700;color:var(--saffron)" id="konfirmasi-zis-nominal">Rp 500.000</span></div>
        </div>
        <div class="modal-actions" style="justify-content:center">
          <button class="btn-saffron" onclick="konfirmasiZisFinal()">🤲 Ya, Salurkan ZIS</button>
          <button class="btn-outline" onclick="closeModal('modal-konfirmasi-zis')">Batal</button>
        </div>
      </div>
    </div>

    <!-- Modal: Wakaf OTP -->
    <div class="modal-overlay" id="modal-wakaf-otp">
      <div class="modal" style="text-align:center">
        <div style="font-size:36px;margin-bottom:8px">🌿</div>
        <div class="modal-title">Tanda Tangan Ikrar Wakaf</div>
        <div class="modal-sub">Masukkan kode OTP yang dikirim ke HP Anda untuk mengesahkan ikrar wakaf digital ini.</div>
        <div class="otp-wrap">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
          <input class="otp-digit" maxlength="1" type="text" oninput="moveOtp(this)">
        </div>
        <div class="modal-actions" style="justify-content:center;margin-top:14px">
          <button class="btn-saffron" onclick="konfirmasiWakafFinal()">Sahkan Ikrar Wakaf</button>
          <button class="btn-outline" onclick="closeModal('modal-wakaf-otp')">Batal</button>
        </div>
      </div>
    </div>

    <!-- Modal: Sertifikat Wakaf -->
    <div class="modal-overlay" id="modal-wakaf-cert">
      <div class="modal" style="text-align:center">
        <div style="font-size:44px;margin-bottom:6px">🌿</div>
        <div style="font-family:'Amiri',serif;font-size:18px;color:var(--teal-700);margin-bottom:8px">شَهَادَةُ الْوَقْفِ</div>
        <div class="modal-title">Sertifikat Wakaf Digital</div>
        <div style="background:linear-gradient(135deg,var(--sand-100),var(--teal-100));border:2px solid var(--teal-300);border-radius:var(--radius-lg);padding:20px;margin:14px 0;text-align:left">
          <div style="display:flex;justify-content:space-between;margin-bottom:8px"><span style="font-size:11.5px;color:var(--ink-soft)">No. Sertifikat</span><span style="font-family:'DM Mono',monospace;font-size:12px;font-weight:700">WKF-2026-0312</span></div>
          <div style="display:flex;justify-content:space-between;margin-bottom:8px"><span style="font-size:11.5px;color:var(--ink-soft)">Wakif</span><span style="font-size:12.5px;font-weight:700">Musyaffa Abdullah</span></div>
          <div style="display:flex;justify-content:space-between;margin-bottom:8px"><span style="font-size:11.5px;color:var(--ink-soft)">Program</span><span style="font-size:12.5px;font-weight:700" id="cert-prog">Beasiswa Mahasiswa</span></div>
          <div style="display:flex;justify-content:space-between;margin-bottom:8px"><span style="font-size:11.5px;color:var(--ink-soft)">Nominal</span><span style="font-size:14px;font-weight:700;color:var(--saffron)" id="cert-nominal">Rp 500.000</span></div>
        </div>
        <div class="modal-actions" style="justify-content:center;margin-top:14px">
          <button class="btn-primary" onclick="closeModal('modal-wakaf-cert');toast('📥 Sertifikat wakaf PDF diunduh!')">📥 Unduh PDF</button>
          <button class="btn-outline" onclick="closeModal('modal-wakaf-cert')">Tutup</button>
        </div>
      </div>
    </div>

    <!-- Modal: Bayar Angsuran -->
    <div class="modal-overlay" id="modal-bayar">
      <div class="modal">
        <div class="modal-title">Bayar Angsuran ke-15</div>
        <div class="modal-sub">Murabahah Peralatan Usaha · ID: PBY-2024-0291</div>
        <div style="background:var(--sand-100);border-radius:var(--radius-md);padding:16px;margin-bottom:18px">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px">
            <span style="font-size:12px;color:var(--ink-soft)">Pokok angsuran</span>
            <span style="font-size:13px;font-weight:600">Rp 1.041.667</span>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
            <span style="font-size:12px;color:var(--ink-soft)">Margin</span>
            <span style="font-size:13px;font-weight:600">Rp 208.333</span>
          </div>
          <div style="border-top:1px solid var(--border);padding-top:10px;display:flex;justify-content:space-between;align-items:center">
            <span style="font-size:13px;font-weight:700">Total Bayar</span>
            <span style="font-size:18px;font-weight:700;color:var(--teal-900)">Rp 1.250.000</span>
          </div>
        </div>
        <div class="fg" style="margin-bottom:14px">
          <label class="flabel">Metode Pembayaran</label>
          <select class="fselect">
            <option>Transfer Bank (Virtual Account)</option>
            <option>Debet dari Simpanan Syahida</option>
            <option>Bayar di Kantor</option>
          </select>
        </div>
        <div class="modal-actions">
          <button class="btn-saffron" onclick="closeModal('modal-bayar');toast('✅ Pembayaran angsuran berhasil! E-receipt dikirim ke email Anda.')">Bayar Sekarang</button>
          <button class="btn-outline" onclick="closeModal('modal-bayar')">Batal</button>
        </div>
      </div>
    </div>

    <!-- Sinyal pemberitahuan Toast -->
    <div class="toast" id="toast-el"></div>

@endsection