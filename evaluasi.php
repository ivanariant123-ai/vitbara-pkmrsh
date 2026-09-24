<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman Evaluasi Pembelajaran Bertahap (Bangun Ruang Sisi Datar & Sisi Lengkung)
 * Berdasarkan Dokumen Resmi: SOAL EVALUASI BANGUN RUANG.docx
 * Dilengkapi: Auto-Save LocalStorage (Anti-Hilang saat Refresh), Kotak Konfirmasi Submit & Proteksi Keluar Halaman.
 */

$pageTitle = 'Evaluasi Pembelajaran Geometri Bertahap';
$pageDesc = 'Instrumen evaluasi bertahap bangun ruang sisi datar (kubus, balok, prisma, limas) dan sisi lengkung (tabung, kerucut, bola) berbasis Benteng Fort Willem I.';
$activeMenu = 'evaluasi';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Hero Header -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>Evaluasi Bertahap</span>
      </nav>
      <h1 class="page-hero-title">Evaluasi Geometri Bertahap</h1>
      <p class="page-hero-desc">
        Pilih modul bangun ruang sisi datar atau sisi lengkung untuk menguji pemahaman konsep, jaring-jaring, luas permukaan, dan volume secara bertahap berbasis Benteng Fort Willem I.
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_evaluasi.png" alt="Maskot Evaluasi Belajar" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">Pilih Tahap Ujian! 🌟</div>
      </div>
    </div>
  </div>
</div>

<main class="section eval-main-container">
  <div class="container">

    <!-- SCREEN 1: HUB PEMILIHAN EVALUASI BERTAHAP -->
    <div id="eval-hub-screen">
      
      <!-- Student Identity Input Box -->
      <div class="eval-card eval-student-card">
        <div class="student-card-header">
          <div class="badge-tag">Identitas Peserta</div>
          <h3 class="student-heading">Isi Data Diri Sebelum Memulai</h3>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="student-name">Nama Lengkap Siswa <span class="required">*</span></label>
            <input type="text" id="student-name" class="form-control" placeholder="Contoh: Budi Santoso" required>
          </div>
          <div class="form-group">
            <label for="student-class">Kelas / Asal Sekolah</label>
            <input type="text" id="student-class" class="form-control" placeholder="Contoh: IX A - SMPN 1 Ambarawa">
          </div>
        </div>
      </div>

      <!-- Section: Evaluasi Bertahap Per Bangun Ruang -->
      <div class="eval-section-block">
        <div class="eval-section-title-wrap">
          <span class="category-pill pill-flat">Bagian 1</span>
          <h2>Bangun Ruang Sisi Datar (BRSD)</h2>
          <p>Uji pemahaman unsur, jaring-jaring, luas permukaan, dan volume pada masing-masing bangun ruang sisi datar.</p>
        </div>

        <div class="stage-grid">
          <!-- Modul 1: Kubus -->
          <div class="stage-card">
            <div class="stage-icon-box bg-gold-light">📦</div>
            <div class="stage-tag">Modul 1 &bull; 4 Soal</div>
            <h3 class="stage-title">Bangun Ruang Kubus</h3>
            <p class="stage-desc">
              Sifat 6 sisi persegi kongruen, 12 rusuk, 8 titik sudut, jaring-jaring karton, luas permukaan (2.400 cm²), dan perubahan volume 8× (HOTS).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('kubus')">
              📝 Kerjakan Evaluasi Kubus
            </button>
          </div>

          <!-- Modul 2: Balok -->
          <div class="stage-card">
            <div class="stage-icon-box bg-gold-light">🏢</div>
            <div class="stage-tag">Modul 2 &bull; 4 Soal</div>
            <h3 class="stage-title">Bangun Ruang Balok</h3>
            <p class="stage-desc">
              Unsur sisi persegi panjang sejajar, pola 6 jaring-jaring, luas permukaan ruang dicat (392 m²), dan kapasitas lorong benteng 80% (288 m³).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('balok')">
              📝 Kerjakan Evaluasi Balok
            </button>
          </div>

          <!-- Modul 3: Prisma Segitiga -->
          <div class="stage-card">
            <div class="stage-icon-box bg-gold-light">⛺</div>
            <div class="stage-tag">Modul 3 &bull; 4 Soal</div>
            <h3 class="stage-title">Prisma Segitiga</h3>
            <p class="stage-desc">
              Karakteristik 5 sisi, 9 rusuk, 6 titik sudut, jaring 2 segitiga 3 persegi panjang, luas atap (184 m²), dan volume ruang atap 75% (135 m³).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('prisma')">
              📝 Kerjakan Evaluasi Prisma
            </button>
          </div>

          <!-- Modul 4: Limas Segi Empat -->
          <div class="stage-card">
            <div class="stage-icon-box bg-gold-light">🏛️</div>
            <div class="stage-tag">Modul 4 &bull; 4 Soal</div>
            <h3 class="stage-title">Limas Segi Empat</h3>
            <p class="stage-desc">
              Unsur 5 sisi, 8 rusuk, 5 titik sudut, jaring 1 persegi 4 segitiga tegak, luas atap menara (360 m²), dan kapasitas menara 80% (576 m³).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('limas')">
              📝 Kerjakan Evaluasi Limas
            </button>
          </div>
        </div>
      </div>

      <!-- Section: Evaluasi Bangun Ruang Sisi Lengkung -->
      <div class="eval-section-block">
        <div class="eval-section-title-wrap">
          <span class="category-pill pill-curved">Bagian 2</span>
          <h2>Bangun Ruang Sisi Lengkung (BRSL)</h2>
          <p>Uji pemahaman selimut, juring lingkaran, luas permukaan, dan volume pada bangun ruang sisi lengkung.</p>
        </div>

        <div class="stage-grid">
          <!-- Modul 5: Tabung -->
          <div class="stage-card">
            <div class="stage-icon-box bg-blue-light">🛢️</div>
            <div class="stage-tag">Modul 5 &bull; 4 Soal</div>
            <h3 class="stage-title">Bangun Ruang Tabung</h3>
            <p class="stage-desc">
              Sifat 3 sisi, 2 rusuk lengkung tanpa titik sudut, jaring-jaring 2 lingkaran 1 persegi panjang, luas tiang (1.188 cm²), dan volume tabung 90% (4.158 cm³).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('tabung')">
              📝 Kerjakan Evaluasi Tabung
            </button>
          </div>

          <!-- Modul 6: Kerucut -->
          <div class="stage-card">
            <div class="stage-icon-box bg-blue-light">🍦</div>
            <div class="stage-tag">Modul 6 &bull; 4 Soal</div>
            <h3 class="stage-title">Bangun Ruang Kerucut</h3>
            <p class="stage-desc">
              Unsur 1 alas lingkaran, 1 sisi lengkung, 1 titik puncak, jaring 1 lingkaran 1 juring, luas kerucut (704 cm²), dan volume kerucut 75% (924 m³).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('kerucut')">
              📝 Kerjakan Evaluasi Kerucut
            </button>
          </div>

          <!-- Modul 7: Bola -->
          <div class="stage-card">
            <div class="stage-icon-box bg-blue-light">🔮</div>
            <div class="stage-tag">Modul 7 &bull; 4 Soal</div>
            <h3 class="stage-title">Bangun Ruang Bola</h3>
            <p class="stage-desc">
              Karakteristik 1 sisi lengkung tanpa rusuk/sudut, analisis jaring-jaring lengkung, luas ornamen miniatur (616 cm²), dan daya tampung kotak (6 bola utuh).
            </p>
            <div class="stage-meta">
              <span>⏱️ 10 Menit</span>
              <span>🎯 4 Tingkat Soal (LOTS-HOTS)</span>
            </div>
            <button type="button" class="btn btn-primary btn-stage" onclick="startModuleQuiz('bola')">
              📝 Kerjakan Evaluasi Bola
            </button>
          </div>
        </div>
      </div>

      <!-- Section: Paket Tes Gabungan -->
      <div class="eval-section-block">
        <div class="eval-section-title-wrap">
          <span class="category-pill pill-combo">Paket Ujian Lengkap</span>
          <h2>Paket Tes Evaluasi Terpadu</h2>
          <p>Ingin menguji kemampuan dalam satu sesi gabungan? Pilih paket evaluasi terpadu di bawah ini:</p>
        </div>

        <div class="combo-grid">
          <div class="combo-card">
            <div class="combo-badge">Paket Gabungan A</div>
            <h3>Paket Bangun Ruang Sisi Datar</h3>
            <p>16 Soal lengkap mencakup Kubus, Balok, Prisma Segitiga, dan Limas Segi Empat.</p>
            <div class="combo-info">
              <span>⏱️ 35 Menit</span> &bull; <span>📝 16 Soal</span> &bull; <span>🎯 KKM 75</span>
            </div>
            <button type="button" class="btn btn-outline w-100" onclick="startModuleQuiz('paket_brsd')">
              🚀 Mulai Paket Sisi Datar (16 Soal)
            </button>
          </div>

          <div class="combo-card">
            <div class="combo-badge">Paket Gabungan B</div>
            <h3>Paket Bangun Ruang Sisi Lengkung</h3>
            <p>12 Soal lengkap mencakup Tabung Silinder, Kerucut, dan Bola Ornamen Miniatur.</p>
            <div class="combo-info">
              <span>⏱️ 25 Menit</span> &bull; <span>📝 12 Soal</span> &bull; <span>🎯 KKM 75</span>
            </div>
            <button type="button" class="btn btn-outline w-100" onclick="startModuleQuiz('paket_brsl')">
              🚀 Mulai Paket Sisi Lengkung (12 Soal)
            </button>
          </div>

          <div class="combo-card combo-card-full">
            <div class="combo-badge combo-badge-gold">Tes Komprehensif</div>
            <h3>Ujian Lengkap Seluruh Geometri</h3>
            <p>28 Soal lengkap mencakup ke-7 bangun ruang (Kubus, Balok, Prisma, Limas, Tabung, Kerucut, Bola).</p>
            <div class="combo-info">
              <span>⏱️ 60 Menit</span> &bull; <span>📝 28 Soal Penuh</span> &bull; <span>🎯 KKM 75</span>
            </div>
            <button type="button" class="btn btn-primary w-100" onclick="startModuleQuiz('all')">
              🏆 Mulai Ujian Komprehensif (28 Soal)
            </button>
          </div>
        </div>
      </div>

    </div>

    <!-- SCREEN 2: ACTIVE QUIZ SCREEN -->
    <div id="eval-quiz-screen" class="eval-quiz-wrapper" style="display: none;">
      
      <!-- Sticky Top Bar -->
      <div class="quiz-sticky-header">
        <div class="quiz-student-badge">
          <span class="user-avatar-icon">👤</span>
          <span id="display-student-name">Peserta</span>
          <span class="module-indicator" id="display-module-title">Modul</span>
        </div>
        
        <div class="quiz-timer-box">
          <span class="timer-icon">⏳</span>
          <span class="timer-label">Sisa Waktu:</span>
          <span id="quiz-timer-clock" class="timer-digits">10:00</span>
        </div>

        <div class="quiz-progress-box">
          <div class="progress-bar-bg">
            <div id="quiz-progress-fill" class="progress-bar-fill" style="width: 0%;"></div>
          </div>
          <span id="quiz-progress-text" class="progress-label">0/4 Terjawab</span>
        </div>

        <button type="button" class="btn btn-sm btn-submit-quiz" id="btn-submit-top">
          ✔ Kumpulkan
        </button>
      </div>

      <div class="quiz-content-layout">
        <!-- Question Column -->
        <div class="quiz-questions-column">
          <div class="active-quiz-header">
            <button type="button" class="btn btn-outline btn-sm" id="btn-back-to-hub">
              ⬅ Kembali ke Pilihan Modul
            </button>
            <h2 id="quiz-screen-heading">Evaluasi Bangun Ruang</h2>
            <p id="quiz-screen-sub">Isilah setiap pertanyaan dengan singkat, tepat, dan cermat. Data jawaban tersimpan otomatis saat Anda mengetik.</p>
          </div>

          <div id="questions-render-container">
            <!-- Dynamic Questions will be injected here -->
          </div>

          <div class="quiz-bottom-actions">
            <button type="button" class="btn btn-primary btn-lg" id="btn-submit-bottom">
              ✔ Kumpulkan & Periksa Jawaban
            </button>
          </div>
        </div>

        <!-- Sidebar Navigation Palette -->
        <aside class="quiz-sidebar-column">
          <div class="nav-palette-card">
            <h4 class="nav-palette-title">Navigasi Soal</h4>
            <div class="nav-palette-grid" id="nav-palette-grid">
              <!-- Dynamic Navigation Buttons -->
            </div>
            <div class="nav-legend">
              <div class="legend-item"><span class="legend-dot unanswered"></span> Belum diisi</div>
              <div class="legend-item"><span class="legend-dot answered"></span> Sudah diisi</div>
            </div>
            <hr>
            <button type="button" class="btn btn-outline btn-sm w-100" id="btn-scroll-top">
              ⬆ Kembali ke Atas
            </button>
          </div>
        </aside>
      </div>

    </div>

    <!-- SCREEN 3: RESULT & DISCUSSION SCREEN -->
    <div id="eval-result-screen" class="eval-card eval-result-card" style="display: none;">
      <div class="result-hero-banner" id="result-banner">
        <div class="result-badge-icon" id="result-icon">🏆</div>
        <h2 class="result-headline" id="result-headline">Hasil Evaluasi Pembelajaran</h2>
        <p class="result-subline" id="result-subline">Berikut rincian skor dan pencapaian kamu dalam tes evaluasi geometri bangun ruang.</p>
        
        <div class="score-circle-wrapper">
          <div class="score-big-number" id="result-score">0</div>
          <div class="score-max-label">/ 100 Poin</div>
        </div>

        <div class="result-status-pill" id="result-status-pill">
          Status: <strong id="result-status-text">Memproses...</strong>
        </div>
      </div>

      <!-- Detail Statistics Summary -->
      <div class="result-stats-row">
        <div class="stat-card">
          <div class="stat-icon">👤</div>
          <div class="stat-info">
            <small>Nama Peserta</small>
            <strong id="res-student-name">-</strong>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon">📦</div>
          <div class="stat-info">
            <small>Modul Evaluasi</small>
            <strong id="res-module-name">-</strong>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon">⏱️</div>
          <div class="stat-info">
            <small>Waktu Digunakan</small>
            <strong id="res-time-spent">-</strong>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon">✅</div>
          <div class="stat-info">
            <small>Jawaban Benar</small>
            <strong id="res-correct-count">0 / 4</strong>
          </div>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="result-action-bar">
        <button type="button" class="btn btn-primary" id="btn-retake-quiz">
          🔄 Coba Ulangi Modul Ini
        </button>
        <button type="button" class="btn btn-outline" id="btn-choose-other-module">
          📂 Pilih Modul Lain
        </button>
        <button type="button" class="btn btn-outline" onclick="window.print();">
          🖨️ Cetak / Simpan PDF
        </button>
        <a href="emodul.php" class="btn btn-outline">
          📖 Buka E-Modul
        </a>
      </div>

      <!-- Detailed Breakdown & Solutions -->
      <div class="discussion-section">
        <h3 class="discussion-title">🔍 Pembahasan Rinci & Kunci Jawaban Resmi</h3>
        <p class="discussion-subtitle">Pelajari langkah pengerjaan, rumus, dan konsep pada setiap nomor di bawah ini:</p>
        
        <div class="discussion-list" id="discussion-container">
          <!-- Populated by JS -->
        </div>
      </div>
    </div>

  </div>
</main>

<!-- ========================================================
     MODAL KONFIRMASI SUBMIT JAWABAN
     ======================================================== -->
<div id="modal-submit-confirm" class="eval-modal-backdrop" style="display: none;">
  <div class="eval-modal-dialog">
    <div class="eval-modal-header">
      <div class="modal-icon-badge">📝</div>
      <h3>Konfirmasi Pengumpulan</h3>
      <button type="button" class="modal-close-btn" id="btn-close-submit-modal">&times;</button>
    </div>
    <div class="eval-modal-body">
      <p class="modal-desc">Pastikan kamu telah memeriksa semua jawaban sebelum mengumpulkan lembar evaluasi.</p>
      
      <div class="modal-summary-box">
        <div class="summary-item">
          <span class="summary-label">Status Pengerjaan:</span>
          <strong id="modal-answered-status" class="summary-val text-success">0 dari 0 Terisi</strong>
        </div>
        <div class="summary-item">
          <span class="summary-label">Sisa Waktu Ujian:</span>
          <strong id="modal-time-status" class="summary-val">00:00</strong>
        </div>
      </div>

      <div id="modal-unanswered-warning" class="modal-warning-alert" style="display: none;">
        ⚠️ <strong>Perhatian:</strong> Masih ada <span id="modal-unanswered-count">0</span> nomor soal yang belum kamu isi lengkap!
      </div>
    </div>
    <div class="eval-modal-footer">
      <button type="button" class="btn btn-outline" id="btn-cancel-submit">
        Periksa Kembali
      </button>
      <button type="button" class="btn btn-primary" id="btn-confirm-submit">
        ✔ Ya, Kumpulkan Jawaban
      </button>
    </div>
  </div>
</div>

<!-- ========================================================
     MODAL KONFIRMASI KELUAR / BATALKAN UJIAN
     ======================================================== -->
<div id="modal-exit-confirm" class="eval-modal-backdrop" style="display: none;">
  <div class="eval-modal-dialog">
    <div class="eval-modal-header">
      <div class="modal-icon-badge">⚠️</div>
      <h3>Keluar dari Ujian?</h3>
      <button type="button" class="modal-close-btn" id="btn-close-exit-modal">&times;</button>
    </div>
    <div class="eval-modal-body">
      <p class="modal-desc">
        Pengerjaan evaluasi sedang berlangsung. Jika kamu keluar sekarang ke menu pemilihan modul, sesi pengerjaan saat ini akan dihentikan.
      </p>
    </div>
    <div class="eval-modal-footer">
      <button type="button" class="btn btn-outline" id="btn-cancel-exit">
        Lanjutkan Ujian
      </button>
      <button type="button" class="btn btn-danger" id="btn-confirm-exit">
        Ya, Keluar Ujian
      </button>
    </div>
  </div>
</div>

<style>
/* ========================================================
   CSS EVALUASI BERTAHAP & MODAL KONFIRMASI VITBARA
   ======================================================== */
.eval-main-container {
  padding-top: 1.5rem;
  padding-bottom: 4rem;
}

.eval-card {
  background: var(--color-bg-primary);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-md);
  padding: 2rem;
  margin-bottom: 2.5rem;
}

.eval-student-card {
  background: #FFFFFF;
  border-left: 5px solid var(--color-accent-gold);
}

.student-card-header {
  margin-bottom: 1.25rem;
}

.student-heading {
  font-size: 1.25rem;
  font-weight: 700;
  margin-top: 0.35rem;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.25rem;
}

.form-group label {
  display: block;
  font-size: 0.875rem;
  font-weight: 600;
  margin-bottom: 0.4rem;
  color: var(--color-text-main);
}

.form-group .required {
  color: #EF4444;
}

.form-control {
  width: 100%;
  padding: 0.75rem 1rem;
  border: 1px solid #CBD5E1;
  border-radius: var(--radius-md);
  font-size: 0.95rem;
  transition: border-color 0.2s, box-shadow 0.2s;
}

.form-control:focus {
  border-color: var(--color-accent-gold);
  box-shadow: 0 0 0 3px rgba(255, 198, 88, 0.25);
  outline: none;
}

/* Category Sections */
.eval-section-block {
  margin-bottom: 3.5rem;
}

.eval-section-title-wrap {
  margin-bottom: 1.5rem;
}

.category-pill {
  font-size: 0.75rem;
  font-weight: 800;
  padding: 0.25rem 0.75rem;
  border-radius: var(--radius-full);
  display: inline-block;
  margin-bottom: 0.4rem;
}

.pill-flat { background: #FEF3C7; color: #92400E; }
.pill-curved { background: #DBEAFE; color: #1E40AF; }
.pill-combo { background: #D1FAE5; color: #065F46; }

.eval-section-title-wrap h2 {
  font-size: 1.5rem;
  font-weight: 800;
  margin-bottom: 0.25rem;
}

.eval-section-title-wrap p {
  color: var(--color-text-muted);
  font-size: 0.925rem;
  margin-bottom: 0;
}

/* Stage Grid */
.stage-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 1.5rem;
}

.stage-card {
  background: var(--color-bg-primary);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: 1.75rem;
  display: flex;
  flex-direction: column;
  box-shadow: var(--shadow-sm);
  transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
}

.stage-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 28px rgba(15, 23, 42, 0.08);
  border-color: var(--color-accent-gold);
}

.stage-icon-box {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.75rem;
  margin-bottom: 1rem;
}

.bg-gold-light {
  background: var(--color-accent-gold-light);
  border: 1px solid rgba(255, 198, 88, 0.4);
}

.bg-blue-light {
  background: #EFF6FF;
  border: 1px solid #BFDBFE;
}

.stage-tag {
  font-size: 0.75rem;
  font-weight: 700;
  color: #64748B;
  margin-bottom: 0.35rem;
}

.stage-title {
  font-size: 1.15rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  color: var(--color-text-main);
}

.stage-desc {
  font-size: 0.85rem;
  color: var(--color-text-muted);
  line-height: 1.55;
  flex: 1;
  margin-bottom: 1.25rem;
}

.stage-meta {
  display: flex;
  flex-direction: column;
  gap: 0.2rem;
  font-size: 0.775rem;
  font-weight: 600;
  color: #64748B;
  background: #F8FAFC;
  padding: 0.6rem 0.85rem;
  border-radius: 6px;
  margin-bottom: 1.25rem;
}

.btn-stage {
  width: 100%;
  justify-content: center;
  font-size: 0.9rem;
  font-weight: 700;
}

/* Combo Grid */
.combo-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
}

.combo-card {
  background: #FFFFFF;
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: 1.75rem;
  display: flex;
  flex-direction: column;
}

.combo-card-full {
  border: 2px solid var(--color-accent-gold);
  background: linear-gradient(145deg, #FFFFFF 0%, #FFFDF5 100%);
}

.combo-badge {
  font-size: 0.75rem;
  font-weight: 700;
  color: #475569;
  background: #F1F5F9;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  width: fit-content;
  margin-bottom: 0.75rem;
}

.combo-badge-gold {
  background: #FEF3C7;
  color: #92400E;
}

.combo-card h3 {
  font-size: 1.15rem;
  font-weight: 700;
  margin-bottom: 0.4rem;
}

.combo-card p {
  font-size: 0.85rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  flex: 1;
  margin-bottom: 1rem;
}

.combo-info {
  font-size: 0.8rem;
  font-weight: 600;
  color: #64748B;
  margin-bottom: 1.25rem;
}

/* ========================================================
   ACTIVE QUIZ LAYOUT & STICKY HEADER
   ======================================================== */
.quiz-sticky-header {
  position: sticky;
  top: 70px;
  z-index: 100;
  background: rgba(255, 255, 255, 0.96);
  backdrop-filter: blur(10px);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  padding: 0.85rem 1.5rem;
  margin-bottom: 2rem;
  box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
}

.quiz-student-badge {
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--color-text-main);
  display: flex;
  align-items: center;
  gap: 0.4rem;
}

.module-indicator {
  font-size: 0.75rem;
  font-weight: 700;
  background: var(--color-accent-gold-light);
  color: #8C5800;
  padding: 0.15rem 0.5rem;
  border-radius: 4px;
}

.quiz-timer-box {
  display: flex;
  align-items: center;
  gap: 0.4rem;
  background: #FEF3C7;
  color: #92400E;
  border: 1px solid #FDE68A;
  padding: 0.4rem 0.85rem;
  border-radius: var(--radius-full);
  font-weight: 700;
  font-size: 0.95rem;
}

.quiz-timer-box.timer-urgent {
  background: #FEE2E2;
  color: #B91C1C;
  border-color: #FECACA;
  animation: pulse-urgent 1s infinite alternate;
}

@keyframes pulse-urgent {
  from { transform: scale(1); }
  to { transform: scale(1.05); }
}

.quiz-progress-box {
  flex: 1;
  max-width: 250px;
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

.progress-bar-bg {
  flex: 1;
  height: 10px;
  background: #E2E8F0;
  border-radius: var(--radius-full);
  overflow: hidden;
}

.progress-bar-fill {
  height: 100%;
  background: linear-gradient(90deg, #F59E0B, #10B981);
  transition: width 0.3s ease;
}

.progress-label {
  font-size: 0.8rem;
  font-weight: 600;
  color: #64748B;
  white-space: nowrap;
}

.btn-submit-quiz {
  background: #10B981;
  color: #FFFFFF;
  border: none;
  font-weight: 700;
}

.btn-submit-quiz:hover { background: #059669; }

/* 2-Column Quiz Layout */
.quiz-content-layout {
  display: grid;
  grid-template-columns: 1fr 260px;
  gap: 2rem;
  align-items: start;
}

.active-quiz-header {
  margin-bottom: 1.75rem;
}

.active-quiz-header h2 {
  font-size: 1.5rem;
  font-weight: 800;
  margin-top: 0.75rem;
  margin-bottom: 0.25rem;
}

.active-quiz-header p {
  color: var(--color-text-muted);
  font-size: 0.9rem;
}

/* Question Cards */
.question-card {
  background: #FFFFFF;
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  padding: 1.75rem;
  margin-bottom: 1.5rem;
  box-shadow: var(--shadow-sm);
}

.q-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1rem;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid #F1F5F9;
}

.q-number {
  font-size: 0.95rem;
  font-weight: 800;
  color: #1E293B;
}

.q-tag {
  font-size: 0.75rem;
  font-weight: 600;
  color: #475569;
  background: #F1F5F9;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
}

.q-level-lots { background: #E0E7FF; color: #3730A3; }
.q-level-mots { background: #FEF3C7; color: #92400E; }
.q-level-hots { background: #FCE7F3; color: #9D174D; }

.q-points {
  font-size: 0.75rem;
  font-weight: 700;
  color: #D97706;
}

.q-text {
  font-size: 0.975rem;
  line-height: 1.75;
  color: #334155;
  margin-bottom: 1rem;
}

/* Input Styles */
.inline-input {
  display: inline-block;
  vertical-align: middle;
  padding: 0.35rem 0.75rem;
  border: 2px solid #CBD5E1;
  border-radius: 6px;
  font-size: 0.95rem;
  font-weight: 600;
  color: #0F172A;
  background: #F8FAFC;
  width: 160px;
  margin: 0 0.35rem;
  transition: all 0.2s;
  text-align: center;
}

.inline-input.input-short { width: 75px; }

.inline-input:focus, .calc-input:focus, .block-input:focus {
  border-color: #F59E0B;
  background: #FFFFFF;
  outline: none;
  box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.2);
}

.inline-input.is-filled, .calc-input.is-filled, .block-input.is-filled {
  border-color: #3B82F6;
  background: #EFF6FF;
}

.calc-answer-row {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  padding: 0.85rem 1.25rem;
  border-radius: var(--radius-md);
  margin-top: 0.75rem;
  font-size: 0.95rem;
  font-weight: 600;
  color: #334155;
}

.calc-input {
  width: 150px;
  padding: 0.5rem 0.75rem;
  border: 2px solid #CBD5E1;
  border-radius: 6px;
  font-size: 1.05rem;
  font-weight: 700;
  text-align: center;
  color: #0F172A;
}

.unit-label {
  font-weight: 600;
  color: #64748B;
}

.quiz-bottom-actions {
  text-align: center;
  margin-top: 2rem;
  margin-bottom: 2rem;
}

/* Sidebar Navigation */
.quiz-sidebar-column {
  position: sticky;
  top: 145px;
}

.nav-palette-card {
  background: #FFFFFF;
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  padding: 1.25rem;
  box-shadow: var(--shadow-sm);
}

.nav-palette-title {
  font-size: 0.95rem;
  font-weight: 700;
  margin-bottom: 1rem;
  text-align: center;
}

.nav-palette-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0.5rem;
  margin-bottom: 1rem;
}

.nav-btn {
  aspect-ratio: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.85rem;
  font-weight: 700;
  border: 1px solid #CBD5E1;
  background: #F8FAFC;
  color: #475569;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s;
}

.nav-btn:hover { background: #E2E8F0; border-color: #94A3B8; }
.nav-btn.is-answered { background: #3B82F6; color: #FFFFFF; border-color: #2563EB; }
.nav-btn.active { box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.4); border-color: #F59E0B; }

.nav-legend {
  display: flex;
  justify-content: space-around;
  font-size: 0.75rem;
  color: #64748B;
  margin-bottom: 0.75rem;
}

.legend-item { display: flex; align-items: center; gap: 0.35rem; }
.legend-dot { width: 10px; height: 10px; border-radius: 2px; }
.legend-dot.unanswered { background: #F8FAFC; border: 1px solid #CBD5E1; }
.legend-dot.answered { background: #3B82F6; }

/* ========================================================
   RESULTS & DISCUSSION
   ======================================================== */
.eval-result-card { padding: 0; overflow: hidden; }

.result-hero-banner {
  background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%);
  color: #FFFFFF;
  padding: 3rem 2rem;
  text-align: center;
}

.result-badge-icon { font-size: 3.5rem; margin-bottom: 0.5rem; }
.result-headline { font-size: 1.85rem; font-weight: 800; margin-bottom: 0.35rem; }
.result-subline { color: #94A3B8; font-size: 0.95rem; max-width: 600px; margin: 0 auto 1.5rem auto; }

.score-circle-wrapper {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 130px;
  height: 130px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  border: 4px solid var(--color-accent-gold);
  margin-bottom: 1.25rem;
  box-shadow: 0 0 30px rgba(255, 198, 88, 0.3);
}

.score-big-number { font-size: 2.5rem; font-weight: 900; color: var(--color-accent-gold); line-height: 1; }
.score-max-label { font-size: 0.75rem; color: #CBD5E1; font-weight: 600; }
.result-status-pill { display: inline-block; padding: 0.4rem 1.25rem; border-radius: var(--radius-full); font-size: 0.9rem; font-weight: 700; background: rgba(255, 255, 255, 0.15); }

.result-stats-row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1.25rem;
  padding: 1.75rem 2rem;
  background: #F8FAFC;
  border-bottom: 1px solid #E2E8F0;
}

.stat-card {
  display: flex;
  align-items: center;
  gap: 0.85rem;
  background: #FFFFFF;
  padding: 0.85rem 1rem;
  border-radius: var(--radius-md);
  border: 1px solid #E2E8F0;
}

.stat-icon { font-size: 1.6rem; }
.stat-info small { display: block; font-size: 0.75rem; color: #64748B; }
.stat-info strong { font-size: 0.95rem; color: #1E293B; }

.result-action-bar {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  padding: 1.5rem 2rem;
  border-bottom: 1px solid #E2E8F0;
}

.discussion-section { padding: 2.5rem 2rem; }
.discussion-title { font-size: 1.35rem; font-weight: 800; margin-bottom: 0.35rem; }
.discussion-subtitle { color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 1.75rem; }

.discussion-item {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: var(--radius-md);
  padding: 1.5rem;
  margin-bottom: 1.5rem;
}

.discussion-item.is-correct { border-left: 5px solid #10B981; }
.discussion-item.is-wrong { border-left: 5px solid #EF4444; }

.disc-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem; }
.disc-title { font-size: 1rem; font-weight: 700; }
.disc-status-badge { font-size: 0.8rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: var(--radius-full); }
.disc-status-badge.badge-correct { background: #D1FAE5; color: #065F46; }
.disc-status-badge.badge-wrong { background: #FEE2E2; color: #991B1B; }

.disc-question-text { font-size: 0.95rem; color: #334155; margin-bottom: 1rem; line-height: 1.6; }

.disc-answers-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  background: #F8FAFC;
  padding: 1rem;
  border-radius: 6px;
  margin-bottom: 1rem;
  font-size: 0.875rem;
}

.disc-user-ans strong, .disc-correct-ans strong {
  display: block;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 0.2rem;
}

.disc-user-ans { color: #1E293B; }
.disc-correct-ans { color: #047857; }

.disc-explanation-box {
  background: #FFFBEB;
  border: 1px solid #FDE68A;
  border-radius: 6px;
  padding: 1rem 1.25rem;
  font-size: 0.875rem;
  color: #78350F;
  line-height: 1.65;
}

.disc-explanation-box strong { color: #92400E; display: block; margin-bottom: 0.35rem; }

/* ========================================================
   MODAL DIALOG STYLES
   ======================================================== */
.eval-modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(15, 23, 42, 0.65);
  backdrop-filter: blur(5px);
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1.5rem;
  animation: modalFadeIn 0.2s ease-out;
}

.eval-modal-dialog {
  background: #FFFFFF;
  border-radius: var(--radius-lg);
  max-width: 480px;
  width: 100%;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  border: 1px solid var(--color-border);
  overflow: hidden;
  animation: modalScaleUp 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes modalFadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes modalScaleUp {
  from { opacity: 0; transform: scale(0.92); }
  to { opacity: 1; transform: scale(1); }
}

.eval-modal-header {
  padding: 1.5rem 1.75rem 1rem 1.75rem;
  display: flex;
  align-items: center;
  gap: 0.75rem;
  position: relative;
  border-bottom: 1px solid #F1F5F9;
}

.modal-icon-badge {
  font-size: 1.6rem;
}

.eval-modal-header h3 {
  font-size: 1.2rem;
  font-weight: 800;
  margin: 0;
  color: #1E293B;
}

.modal-close-btn {
  position: absolute;
  right: 1.25rem;
  top: 1.25rem;
  background: transparent;
  border: none;
  font-size: 1.5rem;
  color: #94A3B8;
  cursor: pointer;
  line-height: 1;
}

.modal-close-btn:hover {
  color: #1E293B;
}

.eval-modal-body {
  padding: 1.5rem 1.75rem;
}

.modal-desc {
  font-size: 0.95rem;
  color: #475569;
  margin-bottom: 1.25rem;
  line-height: 1.55;
}

.modal-summary-box {
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  border-radius: var(--radius-md);
  padding: 1rem 1.25rem;
  margin-bottom: 1rem;
}

.summary-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.9rem;
  padding: 0.35rem 0;
}

.summary-label {
  color: #64748B;
  font-weight: 500;
}

.summary-val {
  color: #1E293B;
  font-weight: 700;
}

.summary-val.text-success { color: #059669; }
.summary-val.text-warning { color: #D97706; }

.modal-warning-alert {
  background: #FEF3C7;
  border-left: 4px solid #F59E0B;
  color: #92400E;
  padding: 0.75rem 1rem;
  border-radius: 4px;
  font-size: 0.85rem;
  margin-top: 0.75rem;
}

.eval-modal-footer {
  padding: 1.25rem 1.75rem;
  background: #F8FAFC;
  border-top: 1px solid #E2E8F0;
  display: flex;
  justify-content: flex-end;
  gap: 0.75rem;
}

.btn-danger {
  background: #EF4444;
  color: #FFFFFF;
  border: none;
  font-weight: 700;
  border-radius: var(--radius-md);
  padding: 0.6rem 1.2rem;
}

.btn-danger:hover {
  background: #DC2626;
}

/* Toast alert for session restore */
.eval-toast {
  position: fixed;
  bottom: 25px;
  right: 25px;
  background: #1E293B;
  color: #FFFFFF;
  padding: 0.85rem 1.25rem;
  border-radius: var(--radius-md);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  gap: 0.75rem;
  z-index: 1000;
  font-size: 0.9rem;
  border-left: 4px solid var(--color-accent-gold);
  animation: slideInUp 0.3s ease-out;
}

@keyframes slideInUp {
  from { transform: translateY(100%); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

@media (max-width: 900px) {
  .quiz-content-layout { grid-template-columns: 1fr; }
  .quiz-sidebar-column { display: none; }
  .form-row { grid-template-columns: 1fr; }
  .disc-answers-grid { grid-template-columns: 1fr; }
}

@media print {
  .navbar, .footer, .quiz-sticky-header, .result-action-bar, .breadcrumb-nav, .eval-modal-backdrop { display: none !important; }
  .eval-card { border: none !important; box-shadow: none !important; padding: 0 !important; }
  .result-hero-banner { background: #FFFFFF !important; color: #000000 !important; border-bottom: 2px solid #000000; }
  .score-big-number { color: #000000 !important; }
}
</style>

<!-- Evaluation Database & Interactive Logic with Auto-Save & Confirm Modals -->
<script>
// --- MASTER QUESTION DATABASE FROM SOAL EVALUASI BANGUN RUANG.DOCX ---
const EVAL_DATABASE = {
  // A. KUBUS
  kubus: {
    title: 'Bangun Ruang Kubus',
    duration: 10,
    questions: [
      {
        id: 1,
        level: 'LOTS',
        category: 'Kubus &bull; Unsur Bangun Ruang',
        question: 'Dalam kegiatan eksplorasi Benteng Fort Willem I, salah satu bagian kecil pada model bangunan dimodelkan berbentuk kubus. Kubus tersebut memiliki <input type="text" class="inline-input input-short" data-qid="kb_1_1" placeholder="angka"> sisi berbentuk persegi, <input type="text" class="inline-input input-short" data-qid="kb_1_2" placeholder="angka"> buah rusuk yang sama panjang, dan <input type="text" class="inline-input input-short" data-qid="kb_1_3" placeholder="angka"> buah titik sudut.',
        blanks: [
          { qid: 'kb_1_1', label: 'Jumlah Sisi', keys: ['6', 'enam'], displayKey: '6 Sisi Persegi' },
          { qid: 'kb_1_2', label: 'Jumlah Rusuk', keys: ['12', 'dua belas'], displayKey: '12 Rusuk' },
          { qid: 'kb_1_3', label: 'Jumlah Titik Sudut', keys: ['8', 'delapan'], displayKey: '8 Titik Sudut' }
        ],
        explanation: 'Kubus memiliki 6 sisi berbentuk persegi yang kongruen, 12 rusuk sama panjang, dan 8 titik sudut.'
      },
      {
        id: 2,
        level: 'LOTS',
        category: 'Kubus &bull; Jaring-Jaring Karton',
        question: 'Seorang siswa ingin membuat model kubus Benteng Fort Willem I menggunakan karton. Jaring-jaring kubus tersebut tersusun dari <input type="text" class="inline-input input-short" data-qid="kb_2_1" placeholder="angka"> buah bangun datar berbentuk <input type="text" class="inline-input" data-qid="kb_2_2" placeholder="nama bentuk"> yang saling terhubung.',
        blanks: [
          { qid: 'kb_2_1', label: 'Jumlah Bidang Datar', keys: ['6', 'enam'], displayKey: '6' },
          { qid: 'kb_2_2', label: 'Bentuk Bangun Datar', keys: ['persegi', 'bujur sangkar'], displayKey: 'Persegi' }
        ],
        explanation: 'Jaring-jaring kubus terdiri dari 6 buah persegi kongruen yang saling terhubung sehingga ketika dilipat dapat membentuk 6 sisi kubus tertutup.'
      },
      {
        id: 3,
        level: 'MOTS',
        category: 'Kubus &bull; Luas Permukaan Dicat',
        question: 'Salah satu bagian kecil pada model Benteng Fort Willem I berbentuk kubus dengan panjang rusuk 20 cm. Jika seluruh permukaan model tersebut akan dicat, berapakah luas permukaan model yang harus dicat?',
        blanks: [
          { qid: 'kb_3', label: 'Luas Permukaan (cm²)', keys: ['2400', '2.400', '2400 cm2', '2.400 cm2'], displayKey: '2.400 cm²' }
        ],
        calcRow: { label: 'Luas Permukaan Model =', qid: 'kb_3', unit: 'cm²' },
        explanation: 'L = 6 × s² = 6 × (20 cm)² = 6 × 400 cm² = 2.400 cm².'
      },
      {
        id: 4,
        level: 'HOTS',
        category: 'Kubus &bull; Perubahan Volume',
        question: 'Sebuah model bangunan benteng berbentuk kubus memiliki volume 64.000 cm³ (panjang rusuk awal = 40 cm). Siswa ingin membuat model baru dengan panjang rusuk 2 kali panjang rusuk model pertama (80 cm). Berapakah volume model baru tersebut?',
        blanks: [
          { qid: 'kb_4', label: 'Volume Model Baru (cm³)', keys: ['512000', '512.000', '512000 cm3', '512.000 cm3'], displayKey: '512.000 cm³' }
        ],
        calcRow: { label: 'Volume Model Baru =', qid: 'kb_4', unit: 'cm³' },
        explanation: 'Rusuk awal s₁ = ∛64.000 = 40 cm. Rusuk baru s₂ = 2 × 40 cm = 80 cm. Volume baru V₂ = (80 cm)³ = 512.000 cm³ (Volume menjadi 2³ = 8 kali lebih besar).'
      }
    ]
  },

  // B. BALOK
  balok: {
    title: 'Bangun Ruang Balok',
    duration: 10,
    questions: [
      {
        id: 5,
        level: 'LOTS',
        category: 'Balok &bull; Unsur Bangun Ruang',
        question: 'Bangunan lorong Benteng Fort Willem I yang menyerupai balok memiliki <input type="text" class="inline-input input-short" data-qid="bl_5_1" placeholder="angka"> sisi, <input type="text" class="inline-input input-short" data-qid="bl_5_2" placeholder="angka"> rusuk, dan <input type="text" class="inline-input input-short" data-qid="bl_5_3" placeholder="angka"> titik sudut.',
        blanks: [
          { qid: 'bl_5_1', label: 'Jumlah Sisi', keys: ['6', 'enam'], displayKey: '6 Sisi' },
          { qid: 'bl_5_2', label: 'Jumlah Rusuk', keys: ['12', 'dua belas'], displayKey: '12 Rusuk' },
          { qid: 'bl_5_3', label: 'Jumlah Titik Sudut', keys: ['8', 'delapan'], displayKey: '8 Titik Sudut' }
        ],
        explanation: 'Balok memiliki 6 sisi, 12 rusuk, dan 8 titik sudut. Sisi-sisi yang berhadapan sejajar dan sama besar (kongruen).'
      },
      {
        id: 6,
        level: 'LOTS',
        category: 'Balok &bull; Jaring-Jaring Miniatur',
        question: 'Jaring-jaring miniatur salah satu ruangan benteng berbentuk balok terdiri atas 6 bangun datar yang berbentuk <input type="text" class="inline-input" data-qid="bl_6" placeholder="nama bentuk bangun datar">.',
        blanks: [
          { qid: 'bl_6', label: 'Bentuk Bangun Datar', keys: ['persegi panjang', 'persegipanjang'], displayKey: 'Persegi Panjang' }
        ],
        explanation: 'Jaring-jaring balok tersusun atas 6 buah persegi panjang yang ukurannya disesuaikan dengan panjang (p), lebar (l), dan tinggi (t) balok.'
      },
      {
        id: 7,
        level: 'MOTS',
        category: 'Balok &bull; Luas Permukaan Dicat',
        question: 'Salah satu ruangan pada model bangunan Benteng Fort Willem I memiliki panjang 12 m, lebar 8 m, dan tinggi 5 m. Hitunglah luas seluruh permukaan luar ruangan tersebut jika seluruh permukaannya akan dicat!',
        blanks: [
          { qid: 'bl_7', label: 'Luas Permukaan (m²)', keys: ['392', '392 m2', '392m2'], displayKey: '392 m²' }
        ],
        calcRow: { label: 'Luas Permukaan =', qid: 'bl_7', unit: 'm²' },
        explanation: 'L = 2(pl + pt + lt) = 2(12×8 + 12×5 + 8×5) = 2(96 + 60 + 40) = 2(196) = 392 m².'
      },
      {
        id: 8,
        level: 'HOTS',
        category: 'Balok &bull; Kapasitas Ruang Lorong',
        question: 'Salah satu lorong Benteng Fort Willem I berukuran panjang 15 m, lebar 4 m, dan tinggi 6 m (Volume total = 360 m³). Sebanyak 20% volume lorong digunakan untuk instalasi konstruksi. Tentukan volume lorong yang masih dapat digunakan!',
        blanks: [
          { qid: 'bl_8', label: 'Volume Digunakan (m³)', keys: ['288', '288 m3', '288m3'], displayKey: '288 m³' }
        ],
        calcRow: { label: 'Volume yang Digunakan =', qid: 'bl_8', unit: 'm³' },
        explanation: 'V_total = 15 × 4 × 6 = 360 m³. Volume yang dapat digunakan = 100% - 20% = 80% × 360 m³ = 288 m³.'
      }
    ]
  },

  // C. PRISMA SEGITIGA
  prisma: {
    title: 'Prisma Segitiga',
    duration: 10,
    questions: [
      {
        id: 9,
        level: 'LOTS',
        category: 'Prisma Segitiga &bull; Unsur Ruang',
        question: 'Model atap Benteng Fort Willem I yang berbentuk prisma segitiga memiliki <input type="text" class="inline-input input-short" data-qid="pr_9_1" placeholder="angka"> buah sisi, <input type="text" class="inline-input input-short" data-qid="pr_9_2" placeholder="angka"> buah rusuk, dan <input type="text" class="inline-input input-short" data-qid="pr_9_3" placeholder="angka"> buah titik sudut.',
        blanks: [
          { qid: 'pr_9_1', label: 'Jumlah Sisi', keys: ['5', 'lima'], displayKey: '5 Sisi' },
          { qid: 'pr_9_2', label: 'Jumlah Rusuk', keys: ['9', 'sembilan'], displayKey: '9 Rusuk' },
          { qid: 'pr_9_3', label: 'Jumlah Titik Sudut', keys: ['6', 'enam'], displayKey: '6 Titik Sudut' }
        ],
        explanation: 'Prisma segitiga memiliki 5 sisi (2 alas segitiga + 3 sisi tegak), 9 rusuk, dan 6 titik sudut.'
      },
      {
        id: 10,
        level: 'LOTS',
        category: 'Prisma Segitiga &bull; Jaring-Jaring',
        question: 'Jaring-jaring prisma segitiga tersusun atas <input type="text" class="inline-input input-short" data-qid="pr_10_1" placeholder="angka"> buah segitiga kongruen dan <input type="text" class="inline-input input-short" data-qid="pr_10_2" placeholder="angka"> buah persegi panjang.',
        blanks: [
          { qid: 'pr_10_1', label: 'Jumlah Segitiga', keys: ['2', 'dua'], displayKey: '2 Segitiga' },
          { qid: 'pr_10_2', label: 'Jumlah Persegi Panjang', keys: ['3', 'tiga'], displayKey: '3 Persegi Panjang' }
        ],
        explanation: 'Jaring-jaring prisma segitiga terdiri atas 2 bidang segitiga (alas dan tutup) serta 3 bidang persegi panjang (selimut).'
      },
      {
        id: 11,
        level: 'MOTS',
        category: 'Prisma Segitiga &bull; Luas Permukaan Atap',
        question: 'Sebuah bagian atap prisma segitiga memiliki alas segitiga berukuran a = 6 m, tinggi segitiga = 4 m, sisi-sisi segitiga = 6 m, 5 m, 5 m, dan panjang prisma = 10 m. Hitunglah luas seluruh permukaan prisma segitiga tersebut!',
        blanks: [
          { qid: 'pr_11', label: 'Luas Permukaan (m²)', keys: ['184', '184 m2', '184m2'], displayKey: '184 m²' }
        ],
        calcRow: { label: 'Luas Permukaan =', qid: 'pr_11', unit: 'm²' },
        explanation: 'Luas 2 segitiga = 2 × (½ × 6 × 4) = 24 m². Luas selimut = (6 + 5 + 5) × 10 = 16 × 10 = 160 m². Luas total = 24 + 160 = 184 m².'
      },
      {
        id: 12,
        level: 'HOTS',
        category: 'Prisma Segitiga &bull; Volume Ruang Dimanfaatkan',
        question: 'Bagian atap benteng berbentuk prisma segitiga memiliki luas penampang alas segitiga 15 m² dan panjang atap 12 m (Volume total = 180 m³). Namun, hanya 75% bagian ruang yang dapat dimanfaatkan. Hitunglah volume ruang yang dapat dimanfaatkan!',
        blanks: [
          { qid: 'pr_12', label: 'Volume Dimanfaatkan (m³)', keys: ['135', '135 m3', '135m3'], displayKey: '135 m³' }
        ],
        calcRow: { label: 'Volume Dimanfaatkan =', qid: 'pr_12', unit: 'm³' },
        explanation: 'V_total = Luas Alas × tinggi prisma = 15 m² × 12 m = 180 m³. Volume yang dimanfaatkan = 75% × 180 m³ = 135 m³.'
      }
    ]
  },

  // D. LIMAS SEGI EMPAT
  limas: {
    title: 'Limas Segi Empat',
    duration: 10,
    questions: [
      {
        id: 13,
        level: 'LOTS',
        category: 'Limas Segi Empat &bull; Unsur Ruang',
        question: 'Menara benteng yang berbentuk limas segi empat memiliki <input type="text" class="inline-input input-short" data-qid="lm_13_1" placeholder="angka"> buah sisi, <input type="text" class="inline-input input-short" data-qid="lm_13_2" placeholder="angka"> buah rusuk, dan <input type="text" class="inline-input input-short" data-qid="lm_13_3" placeholder="angka"> buah titik sudut.',
        blanks: [
          { qid: 'lm_13_1', label: 'Jumlah Sisi', keys: ['5', 'lima'], displayKey: '5 Sisi' },
          { qid: 'lm_13_2', label: 'Jumlah Rusuk', keys: ['8', 'delapan'], displayKey: '8 Rusuk' },
          { qid: 'lm_13_3', label: 'Jumlah Titik Sudut', keys: ['5', 'lima'], displayKey: '5 Titik Sudut' }
        ],
        explanation: 'Limas segi empat memiliki 5 sisi (1 alas persegi + 4 sisi tegak segitiga), 8 rusuk, dan 5 titik sudut (termasuk 1 titik puncak).'
      },
      {
        id: 14,
        level: 'LOTS',
        category: 'Limas Segi Empat &bull; Jaring-Jaring Menara',
        question: 'Jaring-jaring limas segi empat terdiri dari 1 buah bangun datar berbentuk <input type="text" class="inline-input" data-qid="lm_14_1" placeholder="bentuk alas"> sebagai alas dan 4 buah bangun datar berbentuk <input type="text" class="inline-input" data-qid="lm_14_2" placeholder="bentuk sisi tegak"> sebagai sisi tegak.',
        blanks: [
          { qid: 'lm_14_1', label: 'Bentuk Alas', keys: ['persegi', 'segi empat', 'segiempat', 'bujur sangkar'], displayKey: 'Persegi' },
          { qid: 'lm_14_2', label: 'Bentuk Sisi Tegak', keys: ['segitiga'], displayKey: 'Segitiga' }
        ],
        explanation: 'Jaring-jaring limas segi empat terdiri atas 1 bidang persegi (alas) dan 4 bidang segitiga (sisi tegak).'
      },
      {
        id: 15,
        level: 'MOTS',
        category: 'Limas Segi Empat &bull; Luas Permukaan Menara',
        question: 'Sebuah bagian menara Benteng Fort Willem I berbentuk limas segi empat beraturan. Panjang sisi alasnya 10 m dan tinggi setiap segitiga pada sisi tegaknya 13 m. Hitunglah luas seluruh permukaan limas tersebut!',
        blanks: [
          { qid: 'lm_15', label: 'Luas Permukaan (m²)', keys: ['360', '360 m2', '360m2'], displayKey: '360 m²' }
        ],
        calcRow: { label: 'Luas Permukaan =', qid: 'lm_15', unit: 'm²' },
        explanation: 'Luas alas = 10 × 10 = 100 m². Luas 4 sisi tegak = 4 × (½ × 10 × 13) = 260 m². Luas total = 100 + 260 = 360 m².'
      },
      {
        id: 16,
        level: 'HOTS',
        category: 'Limas Segi Empat &bull; Volume Ruang Menara',
        question: 'Bagian menara benteng dimodelkan sebagai limas segi empat dengan luas alas 144 m² dan tinggi limas 15 m. Jika hanya 80% volume yang dapat digunakan sebagai ruang, tentukan volume ruang yang dapat digunakan!',
        blanks: [
          { qid: 'lm_16', label: 'Volume Digunakan (m³)', keys: ['576', '576 m3', '576m3'], displayKey: '576 m³' }
        ],
        calcRow: { label: 'Volume yang Digunakan =', qid: 'lm_16', unit: 'm³' },
        explanation: 'V_total = ⅓ × Luas Alas × tinggi = ⅓ × 144 m² × 15 m = 720 m³. Volume yang dapat digunakan = 80% × 720 m³ = 576 m³.'
      }
    ]
  },

  // E. TABUNG
  tabung: {
    title: 'Bangun Ruang Tabung',
    duration: 10,
    questions: [
      {
        id: 17,
        level: 'LOTS',
        category: 'Tabung &bull; Unsur Bangun Ruang',
        question: 'Tiang peninggalan benteng berbentuk tabung memiliki <input type="text" class="inline-input input-short" data-qid="tb_17_1" placeholder="angka"> buah sisi (2 sisi datar lingkaran dan 1 sisi lengkung selimut), <input type="text" class="inline-input input-short" data-qid="tb_17_2" placeholder="angka"> rusuk lengkung, serta <input type="text" class="inline-input input-short" data-qid="tb_17_3" placeholder="angka"> buah titik sudut.',
        blanks: [
          { qid: 'tb_17_1', label: 'Jumlah Sisi', keys: ['3', 'tiga'], displayKey: '3 Sisi' },
          { qid: 'tb_17_2', label: 'Jumlah Rusuk', keys: ['2', 'dua'], displayKey: '2 Rusuk Lengkung' },
          { qid: 'tb_17_3', label: 'Jumlah Titik Sudut', keys: ['0', 'nol', 'tidak ada'], displayKey: '0 (Tidak Ada)' }
        ],
        explanation: 'Tabung memiliki 3 sisi (2 lingkaran alas-tutup dan 1 selimut lengkung), 2 rusuk lengkung, dan tidak memiliki titik sudut.'
      },
      {
        id: 18,
        level: 'LOTS',
        category: 'Tabung &bull; Jaring-Jaring Tiang',
        question: 'Jaring-jaring tabung tersusun dari <input type="text" class="inline-input input-short" data-qid="tb_18_1" placeholder="angka"> buah lingkaran kongruen dan <input type="text" class="inline-input input-short" data-qid="tb_18_2" placeholder="angka"> buah bidang persegi panjang (selimut).',
        blanks: [
          { qid: 'tb_18_1', label: 'Jumlah Lingkaran', keys: ['2', 'dua'], displayKey: '2 Lingkaran' },
          { qid: 'tb_18_2', label: 'Jumlah Persegi Panjang', keys: ['1', 'satu'], displayKey: '1 Persegi Panjang' }
        ],
        explanation: 'Jaring-jaring tabung terdiri atas 2 buah lingkaran (alas dan tutup) serta 1 persegi panjang (selimut tabung).'
      },
      {
        id: 19,
        level: 'MOTS',
        category: 'Tabung &bull; Luas Seluruh Permukaan',
        question: 'Sebuah tiang pada model benteng berbentuk tabung dengan jari-jari r = 7 cm dan tinggi t = 20 cm. Gunakan &pi; = <sup>22</sup>/<sub>7</sub>. Hitunglah luas seluruh permukaan tiang tersebut!',
        blanks: [
          { qid: 'tb_19', label: 'Luas Permukaan (cm²)', keys: ['1188', '1.188', '1188 cm2', '1.188 cm2'], displayKey: '1.188 cm²' }
        ],
        calcRow: { label: 'Luas Seluruh Permukaan =', qid: 'tb_19', unit: 'cm²' },
        explanation: 'L = 2&pi;r(r + t) = 2 × (22/7) × 7 × (7 + 20) = 44 × 27 = 1.188 cm².'
      },
      {
        id: 20,
        level: 'HOTS',
        category: 'Tabung &bull; Kapasitas Silinder 90%',
        question: 'Sebuah tangki silinder benteng memiliki diameter 14 cm (jari-jari r = 7 cm) dan tinggi 30 cm (Volume total = 4.620 cm³). Jika hanya 90% kapasitas yang dapat digunakan, hitunglah volume yang dapat digunakan! (Gunakan &pi; = <sup>22</sup>/<sub>7</sub>)',
        blanks: [
          { qid: 'tb_20', label: 'Volume Digunakan (cm³)', keys: ['4158', '4.158', '4158 cm3', '4.158 cm3'], displayKey: '4.158 cm³' }
        ],
        calcRow: { label: 'Volume yang Digunakan =', qid: 'tb_20', unit: 'cm³' },
        explanation: 'V_total = &pi; × r² × t = (22/7) × 7² × 30 = 4.620 cm³. Volume 90% = 90% × 4.620 = 4.158 cm³.'
      }
    ]
  },

  // F. KERUCUT
  kerucut: {
    title: 'Bangun Ruang Kerucut',
    duration: 10,
    questions: [
      {
        id: 21,
        level: 'LOTS',
        category: 'Kerucut &bull; Unsur Bangun Ruang',
        question: 'Bagian meruncing model benteng berbentuk kerucut memiliki <input type="text" class="inline-input input-short" data-qid="kc_21_1" placeholder="angka"> buah sisi (1 alas lingkaran dan 1 selimut lengkung), <input type="text" class="inline-input input-short" data-qid="kc_21_2" placeholder="angka"> rusuk lengkung, dan <input type="text" class="inline-input input-short" data-qid="kc_21_3" placeholder="angka"> buah titik puncak.',
        blanks: [
          { qid: 'kc_21_1', label: 'Jumlah Sisi', keys: ['2', 'dua'], displayKey: '2 Sisi' },
          { qid: 'kc_21_2', label: 'Jumlah Rusuk Lengkung', keys: ['1', 'satu'], displayKey: '1 Rusuk Lengkung' },
          { qid: 'kc_21_3', label: 'Jumlah Titik Puncak', keys: ['1', 'satu'], displayKey: '1 Titik Puncak' }
        ],
        explanation: 'Kerucut memiliki 2 sisi (1 alas lingkaran + 1 selimut lengkung), 1 rusuk lengkung, dan 1 titik puncak.'
      },
      {
        id: 22,
        level: 'LOTS',
        category: 'Kerucut &bull; Jaring-Jaring',
        question: 'Jaring-jaring kerucut tersusun dari 1 buah bangun datar berbentuk <input type="text" class="inline-input" data-qid="kc_22_1" placeholder="bentuk alas"> sebagai alas dan 1 buah bidang datar berbentuk <input type="text" class="inline-input" data-qid="kc_22_2" placeholder="bentuk selimut"> sebagai selimut.',
        blanks: [
          { qid: 'kc_22_1', label: 'Bentuk Alas', keys: ['lingkaran'], displayKey: 'Lingkaran' },
          { qid: 'kc_22_2', label: 'Bentuk Selimut', keys: ['juring lingkaran', 'juring', 'sektor lingkaran'], displayKey: 'Juring Lingkaran' }
        ],
        explanation: 'Jaring-jaring kerucut terdiri dari 1 buah lingkaran (alas) dan 1 buah juring lingkaran (selimut).'
      },
      {
        id: 23,
        level: 'MOTS',
        category: 'Kerucut &bull; Luas Seluruh Permukaan',
        question: 'Sebuah bagian kubah meruncing berbentuk kerucut dengan jari-jari r = 7 cm dan panjang garis pelukis s = 25 cm. Gunakan &pi; = <sup>22</sup>/<sub>7</sub>. Hitunglah luas seluruh permukaan kerucut tersebut!',
        blanks: [
          { qid: 'kc_23', label: 'Luas Permukaan Total (cm²)', keys: ['704', '704 cm2', '704cm2', '550', '550 cm2'], displayKey: '704 cm² (atau 550 cm² selimut)' }
        ],
        calcRow: { label: 'Luas Permukaan =', qid: 'kc_23', unit: 'cm²' },
        explanation: 'L_total = &pi;r(r + s) = (22/7) × 7 × (7 + 25) = 22 × 32 = 704 cm². (Jika hanya selimut kerucut = &pi;rs = 550 cm²).'
      },
      {
        id: 24,
        level: 'HOTS',
        category: 'Kerucut &bull; Volume Ruang 75%',
        question: 'Bagian meruncing dimodelkan sebagai kerucut dengan jari-jari r = 7 m dan tinggi t = 24 m (Volume total = 1.232 m³). Jika hanya 75% volume yang dapat dimanfaatkan, tentukan volume ruang yang dapat dimanfaatkan! (Gunakan &pi; = <sup>22</sup>/<sub>7</sub>)',
        blanks: [
          { qid: 'kc_24', label: 'Volume Dimanfaatkan (m³)', keys: ['924', '924 m3', '924m3'], displayKey: '924 m³' }
        ],
        calcRow: { label: 'Volume Dimanfaatkan =', qid: 'kc_24', unit: 'm³' },
        explanation: 'V_total = ⅓ × &pi; × r² × t = ⅓ × (22/7) × 49 × 24 = 1.232 m³. Volume yang dimanfaatkan = 75% × 1.232 m³ = 924 m³.'
      }
    ]
  },

  // G. BOLA
  bola: {
    title: 'Bangun Ruang Bola',
    duration: 10,
    questions: [
      {
        id: 25,
        level: 'LOTS',
        category: 'Bola &bull; Unsur Bangun Ruang',
        question: 'Ornamen miniatur benteng berbentuk bola memiliki <input type="text" class="inline-input input-short" data-qid="bl_25_1" placeholder="angka"> buah sisi lengkung, <input type="text" class="inline-input input-short" data-qid="bl_25_2" placeholder="angka"> buah rusuk, dan <input type="text" class="inline-input input-short" data-qid="bl_25_3" placeholder="angka"> buah titik sudut.',
        blanks: [
          { qid: 'bl_25_1', label: 'Jumlah Sisi Lengkung', keys: ['1', 'satu'], displayKey: '1 Sisi Lengkung' },
          { qid: 'bl_25_2', label: 'Jumlah Rusuk', keys: ['0', 'nol', 'tidak ada'], displayKey: '0 Rusuk' },
          { qid: 'bl_25_3', label: 'Jumlah Titik Sudut', keys: ['0', 'nol', 'tidak ada'], displayKey: '0 Titik Sudut' }
        ],
        explanation: 'Bola hanya memiliki 1 sisi lengkung, tidak memiliki rusuk, dan tidak memiliki titik sudut.'
      },
      {
        id: 26,
        level: 'HOTS',
        category: 'Bola &bull; Analisis Jaring-Jaring',
        question: 'Apakah permukaan bola dapat dibuat menjadi jaring-jaring bangun datar sederhana yang saling terhubung rapat seperti jaring-jaring kubus? Ketikkan <input type="text" class="inline-input input-short" data-qid="bl_26" placeholder="Ya / Tidak">.',
        blanks: [
          { qid: 'bl_26', label: 'Jawaban Analisis', keys: ['tidak', 'bukan', 'no'], displayKey: 'Tidak' }
        ],
        explanation: 'Tidak dapat dibuat jaring-jaring bangun datar sederhana seperti kubus, karena seluruh permukaan bola merupakan bidang lengkung 3 dimensi tanpa sisi datar.'
      },
      {
        id: 27,
        level: 'MOTS',
        category: 'Bola &bull; Luas Permukaan Ornamen',
        question: 'Sebuah ornamen berbentuk bola pada miniatur Benteng Fort Willem I memiliki diameter 14 cm (jari-jari r = 7 cm). Gunakan &pi; = <sup>22</sup>/<sub>7</sub>. Hitunglah luas permukaan ornamen bola tersebut!',
        blanks: [
          { qid: 'bl_27', label: 'Luas Permukaan (cm²)', keys: ['616', '616 cm2', '616cm2'], displayKey: '616 cm²' }
        ],
        calcRow: { label: 'Luas Permukaan =', qid: 'bl_27', unit: 'cm²' },
        explanation: 'L = 4 × &pi; × r² = 4 × (22/7) × 7² = 4 × 22 × 7 = 616 cm².'
      },
      {
        id: 28,
        level: 'HOTS',
        category: 'Bola &bull; Daya Tampung Kotak',
        question: 'Sebuah ornamen bola memiliki diameter 14 cm (r = 7 cm, volume 1 bola = 1.437,33 cm³). Sebuah kotak penyimpanan memiliki volume total 10.000 cm³. Berapa banyak bola utuh maksimal yang dapat ditampung berdasarkan perbandingan volume?',
        blanks: [
          { qid: 'bl_28', label: 'Jumlah Bola Utuh', keys: ['6', 'enam', '6 buah', '6 bola'], displayKey: '6 Bola Utuh' }
        ],
        calcRow: { label: 'Jumlah Bola Utuh =', qid: 'bl_28', unit: 'bola' },
        explanation: 'V_bola = 4/3 × &pi; × r³ = 4/3 × (22/7) × 343 = 1.437,33 cm³. Kapasitas = 10.000 ÷ 1.437,33 ≈ 6,95 ➔ Maksimal dapat menampung 6 bola utuh.'
      }
    ]
  }
};

// --- RUNTIME STATE & LOCALSTORAGE CONSTANTS ---
const STORAGE_KEY = 'vitbara_eval_session_v1';

let currentQuizKey = null;
let currentQuestions = [];
let currentQuizTitle = '';
let studentInfo = { name: '', classText: '' };
let timerInterval = null;
let timeRemaining = 600;
let timeSpentSeconds = 0;
let isSubmitted = false;
let isQuizActive = false;

// --- AUTO-SAVE & SESSION PERSISTENCE ---
function saveQuizSession() {
  if (!isQuizActive || isSubmitted) return;

  const userAnswers = {};
  const allInputs = document.querySelectorAll('#questions-render-container input[data-qid]');
  allInputs.forEach(inp => {
    userAnswers[inp.getAttribute('data-qid')] = inp.value;
  });

  const sessionData = {
    quizKey: currentQuizKey,
    quizTitle: currentQuizTitle,
    studentName: studentInfo.name,
    studentClass: studentInfo.classText,
    timeRemaining: timeRemaining,
    timeSpentSeconds: timeSpentSeconds,
    userAnswers: userAnswers,
    timestamp: Date.now()
  };

  localStorage.setItem(STORAGE_KEY, JSON.stringify(sessionData));
}

function clearQuizSession() {
  localStorage.removeItem(STORAGE_KEY);
}

function checkAndRestoreSession() {
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    if (!raw) return false;

    const data = JSON.parse(raw);
    if (!data || !data.quizKey || data.timeRemaining <= 0) return false;

    // Restore student info
    studentInfo.name = data.studentName || '';
    studentInfo.classText = data.studentClass || '';
    document.getElementById('student-name').value = studentInfo.name;
    document.getElementById('student-class').value = studentInfo.classText;

    // Start quiz with restored state
    startModuleQuiz(data.quizKey, false, data);

    showToast('💡 Sesi evaluasi Anda berhasil dipulihkan otomatis dari penyimpanan lokal.');
    return true;
  } catch (e) {
    console.error('Failed to restore session:', e);
    return false;
  }
}

function showToast(msg) {
  const existing = document.querySelector('.eval-toast');
  if (existing) existing.remove();

  const toast = document.createElement('div');
  toast.className = 'eval-toast';
  toast.innerHTML = `<span>${msg}</span>`;
  document.body.appendChild(toast);

  setTimeout(() => {
    toast.style.transition = 'opacity 0.4s, transform 0.4s';
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(100%)';
    setTimeout(() => toast.remove(), 400);
  }, 4000);
}

// Function to start a specific module or combo quiz
function startModuleQuiz(moduleKey, isNew = true, restoredData = null) {
  const nameInput = document.getElementById('student-name');
  const classInput = document.getElementById('student-class');

  const studentName = (restoredData && restoredData.studentName) || nameInput.value.trim();
  if (!studentName) {
    alert('Silakan masukkan Nama Lengkap Siswa terlebih dahulu pada kolom identitas di atas!');
    nameInput.focus();
    window.scrollTo({ top: 0, behavior: 'smooth' });
    return;
  }

  studentInfo.name = studentName;
  studentInfo.classText = (restoredData && restoredData.studentClass) || classInput.value.trim() || 'Siswa SMP';

  // Determine questions list
  currentQuizKey = moduleKey;
  let questions = [];
  let durationMins = 10;
  let title = '';

  if (moduleKey === 'paket_brsd') {
    title = 'Paket Bangun Ruang Sisi Datar (16 Soal)';
    durationMins = 35;
    questions = [
      ...EVAL_DATABASE.kubus.questions,
      ...EVAL_DATABASE.balok.questions,
      ...EVAL_DATABASE.prisma.questions,
      ...EVAL_DATABASE.limas.questions
    ];
  } else if (moduleKey === 'paket_brsl') {
    title = 'Paket Bangun Ruang Sisi Lengkung (12 Soal)';
    durationMins = 25;
    questions = [
      ...EVAL_DATABASE.tabung.questions,
      ...EVAL_DATABASE.kerucut.questions,
      ...EVAL_DATABASE.bola.questions
    ];
  } else if (moduleKey === 'all') {
    title = 'Ujian Komprehensif Seluruh Geometri (28 Soal)';
    durationMins = 60;
    questions = [
      ...EVAL_DATABASE.kubus.questions,
      ...EVAL_DATABASE.balok.questions,
      ...EVAL_DATABASE.prisma.questions,
      ...EVAL_DATABASE.limas.questions,
      ...EVAL_DATABASE.tabung.questions,
      ...EVAL_DATABASE.kerucut.questions,
      ...EVAL_DATABASE.bola.questions
    ];
  } else if (EVAL_DATABASE[moduleKey]) {
    title = `Evaluasi ${EVAL_DATABASE[moduleKey].title}`;
    durationMins = EVAL_DATABASE[moduleKey].duration;
    questions = EVAL_DATABASE[moduleKey].questions;
  }

  currentQuestions = questions;
  currentQuizTitle = title;
  timeRemaining = restoredData ? restoredData.timeRemaining : durationMins * 60;
  timeSpentSeconds = restoredData ? restoredData.timeSpentSeconds : 0;
  isSubmitted = false;
  isQuizActive = true;

  // Render UI
  renderQuizScreen(title, questions, restoredData ? restoredData.userAnswers : null);

  if (isNew) {
    saveQuizSession();
  }
}

function renderQuizScreen(title, questions, savedAnswers = null) {
  document.getElementById('eval-hub-screen').style.display = 'none';
  document.getElementById('eval-result-screen').style.display = 'none';
  document.getElementById('eval-quiz-screen').style.display = 'block';

  document.getElementById('display-student-name').textContent = studentInfo.name;
  document.getElementById('display-module-title').textContent = title;
  document.getElementById('quiz-screen-heading').textContent = title;
  document.getElementById('quiz-screen-sub').textContent = `Instrumen evaluasi terdiri atas ${questions.length} butir soal berjenjang (LOTS, MOTS, HOTS). Data otomatis tersimpan jika halaman di-refresh.`;

  // Render Questions
  const container = document.getElementById('questions-render-container');
  container.innerHTML = '';

  const paletteGrid = document.getElementById('nav-palette-grid');
  paletteGrid.innerHTML = '';

  const pointsPerQuestion = Math.round(100 / questions.length);

  questions.forEach((q, idx) => {
    const qNum = idx + 1;

    // Palette Button
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'nav-btn';
    btn.id = `nav-btn-${qNum}`;
    btn.textContent = qNum;
    btn.onclick = () => {
      const card = document.getElementById(`q-card-${qNum}`);
      if (card) {
        const offset = card.getBoundingClientRect().top + window.pageYOffset - 140;
        window.scrollTo({ top: offset, behavior: 'smooth' });
        document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
      }
    };
    paletteGrid.appendChild(btn);

    // Question Card
    const card = document.createElement('div');
    card.className = 'question-card';
    card.id = `q-card-${qNum}`;

    let calcRowHtml = '';
    if (q.calcRow) {
      calcRowHtml = `
        <div class="calc-answer-row">
          <span>${q.calcRow.label}</span>
          <input type="text" class="calc-input" data-qid="${q.calcRow.qid}" placeholder="angka hasil..." autocomplete="off">
          <span class="unit-label">${q.calcRow.unit}</span>
        </div>
      `;
    }

    let levelClass = 'q-level-lots';
    if (q.level === 'MOTS') levelClass = 'q-level-mots';
    if (q.level === 'HOTS') levelClass = 'q-level-hots';

    card.innerHTML = `
      <div class="q-header">
        <div class="q-number">Soal #${qNum}</div>
        <div class="q-tag ${levelClass}">${q.category} &bull; ${q.level}</div>
        <div class="q-points">${pointsPerQuestion} Poin</div>
      </div>
      <div class="q-body">
        <p class="q-text">${q.question}</p>
        ${calcRowHtml}
      </div>
    `;

    container.appendChild(card);
  });

  // Populate saved answers if restored
  if (savedAnswers) {
    Object.keys(savedAnswers).forEach(qid => {
      const inp = container.querySelector(`input[data-qid="${qid}"]`);
      if (inp) {
        inp.value = savedAnswers[qid];
        if (inp.value.trim().length > 0) inp.classList.add('is-filled');
      }
    });
  }

  // Attach input listeners
  const allInputs = container.querySelectorAll('input[data-qid]');
  allInputs.forEach(inp => {
    inp.addEventListener('input', () => {
      if (inp.value.trim().length > 0) {
        inp.classList.add('is-filled');
      } else {
        inp.classList.remove('is-filled');
      }
      updateProgress();
      saveQuizSession();
    });
  });

  updateProgress();
  startTimer();
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function updateProgress() {
  let answeredCount = 0;
  currentQuestions.forEach((q, idx) => {
    const qNum = idx + 1;
    const isAnswered = q.blanks.every(b => {
      const el = document.querySelector(`input[data-qid="${b.qid}"]`);
      return el && el.value.trim().length > 0;
    });

    const navBtn = document.getElementById(`nav-btn-${qNum}`);
    if (isAnswered) {
      answeredCount++;
      if (navBtn) navBtn.classList.add('is-answered');
    } else {
      if (navBtn) navBtn.classList.remove('is-answered');
    }
  });

  const percent = Math.round((answeredCount / currentQuestions.length) * 100);
  document.getElementById('quiz-progress-fill').style.width = `${percent}%`;
  document.getElementById('quiz-progress-text').textContent = `${answeredCount}/${currentQuestions.length} Terjawab`;
}

function startTimer() {
  clearInterval(timerInterval);
  const clock = document.getElementById('quiz-timer-clock');

  const updateClock = () => {
    const mins = Math.floor(timeRemaining / 60);
    const secs = timeRemaining % 60;
    clock.textContent = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
  };

  updateClock();

  timerInterval = setInterval(() => {
    timeRemaining--;
    timeSpentSeconds++;
    updateClock();

    // Auto save periodic session every 5 seconds
    if (timeSpentSeconds % 5 === 0) {
      saveQuizSession();
    }

    if (timeRemaining <= 180) {
      clock.parentElement.classList.add('timer-urgent');
    }

    if (timeRemaining <= 0) {
      clearInterval(timerInterval);
      alert('⏱️ Waktu pengerjaan tes telah berakhir! Lembar jawaban akan dikumpulkan secara otomatis.');
      hideModal('modal-submit-confirm');
      hideModal('modal-exit-confirm');
      submitQuiz();
    }
  }, 1000);
}

function cleanString(input) {
  if (!input) return '';
  return input.toString()
    .toLowerCase()
    .trim()
    .replace(/[\s\t\n]+/g, ' ')
    .replace(/\s*([+\-*\/=^()×·,])\s*/g, '$1')
    .replace(/²/g, '^2')
    .replace(/³/g, '^3')
    .replace(/x/g, '*');
}

// --- MODAL CONTROLS & CONFIRMATION ---
function showModal(modalId) {
  const m = document.getElementById(modalId);
  if (m) m.style.display = 'flex';
}

function hideModal(modalId) {
  const m = document.getElementById(modalId);
  if (m) m.style.display = 'none';
}

function openSubmitConfirmModal() {
  const answeredCount = Array.from(document.querySelectorAll('.nav-btn.is-answered')).length;
  const totalCount = currentQuestions.length;
  const unanswered = totalCount - answeredCount;

  const mins = Math.floor(timeRemaining / 60);
  const secs = timeRemaining % 60;
  const timeStr = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;

  const statusEl = document.getElementById('modal-answered-status');
  statusEl.textContent = `${answeredCount} dari ${totalCount} Terisi`;
  if (unanswered > 0) {
    statusEl.className = 'summary-val text-warning';
  } else {
    statusEl.className = 'summary-val text-success';
  }

  document.getElementById('modal-time-status').textContent = timeStr;

  const warningBox = document.getElementById('modal-unanswered-warning');
  if (unanswered > 0) {
    document.getElementById('modal-unanswered-count').textContent = unanswered;
    warningBox.style.display = 'block';
  } else {
    warningBox.style.display = 'none';
  }

  showModal('modal-submit-confirm');
}

function openExitConfirmModal() {
  showModal('modal-exit-confirm');
}

function submitQuiz() {
  if (isSubmitted) return;
  isSubmitted = true;
  isQuizActive = false;
  clearInterval(timerInterval);
  clearQuizSession(); // Sesi selesai, bersihkan session aktif

  let correctCount = 0;
  let results = [];
  const pointsPerQuestion = 100 / currentQuestions.length;

  currentQuestions.forEach((q, idx) => {
    let isFullyCorrect = true;
    let blanksResult = [];

    q.blanks.forEach(b => {
      const inp = document.querySelector(`input[data-qid="${b.qid}"]`);
      const userVal = inp ? inp.value.trim() : '';
      const cleanUser = cleanString(userVal);

      const isMatch = b.keys.some(k => cleanString(k) === cleanUser);
      if (!isMatch) {
        isFullyCorrect = false;
      }

      blanksResult.push({
        label: b.label,
        userAnswer: userVal || '(Tidak diisi)',
        displayKey: b.displayKey,
        isCorrect: isMatch
      });
    });

    if (isFullyCorrect) correctCount++;

    results.push({
      num: idx + 1,
      category: q.category,
      level: q.level,
      question: q.question.replace(/<input[^>]*>/g, ' [ ... ] '),
      isCorrect: isFullyCorrect,
      blanks: blanksResult,
      explanation: q.explanation
    });
  });

  const finalScore = Math.round((correctCount / currentQuestions.length) * 100);
  const statusLabel = finalScore >= 90 ? 'Sangat Mahir' : (finalScore >= 75 ? 'Tuntas KKM' : 'Perlu Pengayaan');

  // Kirim data hasil evaluasi siswa ke backend database admin
  fetch('api/submit_evaluation.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      student_name: studentInfo.name,
      student_class: studentInfo.classText,
      module_key: currentQuizKey,
      module_title: currentQuizTitle,
      score: finalScore,
      correct_count: correctCount,
      total_questions: currentQuestions.length,
      time_spent_seconds: timeSpentSeconds,
      status: statusLabel,
      answers: results
    })
  })
  .then(res => res.json())
  .then(data => {
    console.log('Evaluasi berhasil tersimpan di sistem:', data);
  })
  .catch(err => {
    console.warn('Gagal mencatat ke database:', err);
  });

  renderResults(finalScore, correctCount, results);
}

function renderResults(score, correctCount, results) {
  document.getElementById('eval-quiz-screen').style.display = 'none';
  document.getElementById('eval-result-screen').style.display = 'block';
  window.scrollTo({ top: 0, behavior: 'smooth' });

  const minsSpent = Math.floor(timeSpentSeconds / 60);
  const secsSpent = timeSpentSeconds % 60;
  const timeSpentStr = `${minsSpent} Menit ${secsSpent} Detik`;

  document.getElementById('result-score').textContent = score;
  document.getElementById('res-student-name').textContent = studentInfo.name;
  document.getElementById('res-module-name').textContent = currentQuizTitle;
  document.getElementById('res-time-spent').textContent = timeSpentStr;
  document.getElementById('res-correct-count').textContent = `${correctCount} / ${currentQuestions.length} Soal`;

  const icon = document.getElementById('result-icon');
  const headline = document.getElementById('result-headline');
  const statusText = document.getElementById('result-status-text');

  if (score >= 90) {
    icon.textContent = '🌟';
    headline.textContent = 'Luar Biasa! Penguasaan Sangat Mahir';
    statusText.textContent = 'Lulus Sangat Memuaskan (Sangat Mahir)';
  } else if (score >= 75) {
    icon.textContent = '🎉';
    headline.textContent = 'Selamat! Kamu Tuntas Evaluasi';
    statusText.textContent = 'Lulus Tuntas KKM (Kompeten)';
  } else {
    icon.textContent = '📚';
    headline.textContent = 'Perlu Belajar Lagi & Pengayaan';
    statusText.textContent = 'Belum Tuntas KKM (Perlu Review/Remedial)';
  }

  // Render Discussion List
  const discContainer = document.getElementById('discussion-container');
  discContainer.innerHTML = '';

  results.forEach(res => {
    const item = document.createElement('div');
    item.className = `discussion-item ${res.isCorrect ? 'is-correct' : 'is-wrong'}`;

    let blanksHtml = '';
    res.blanks.forEach(b => {
      blanksHtml += `
        <div>
          <strong>${b.label}:</strong>
          <span>Jawaban Kamu: <em>${escapeHtml(b.userAnswer)}</em> ${b.isCorrect ? '✅' : '❌'}</span>
        </div>
        <div>
          <strong>Kunci Jawaban Resmi:</strong>
          <span><strong>${escapeHtml(b.displayKey)}</strong></span>
        </div>
      `;
    });

    item.innerHTML = `
      <div class="disc-header">
        <div class="disc-title">Soal #${res.num} &bull; ${res.category} (${res.level})</div>
        <div class="disc-status-badge ${res.isCorrect ? 'badge-correct' : 'badge-wrong'}">
          ${res.isCorrect ? '✅ Benar' : '❌ Salah'}
        </div>
      </div>
      <p class="disc-question-text">${res.question}</p>
      <div class="disc-answers-grid">
        ${blanksHtml}
      </div>
      <div class="disc-explanation-box">
        <strong>💡 Langkah Pembahasan & Konsep:</strong>
        ${escapeHtml(res.explanation)}
      </div>
    `;

    discContainer.appendChild(item);
  });
}

function escapeHtml(text) {
  if (!text) return '';
  return text.toString()
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

// --- BROWSER NAVIGATION GUARD (BEFOREUNLOAD) ---
window.addEventListener('beforeunload', (e) => {
  if (isQuizActive && !isSubmitted) {
    saveQuizSession(); // Ensure latest answers are persisted
    e.preventDefault();
    e.returnValue = 'Tes sedang berlangsung. Jawaban Anda tersimpan otomatis. Yakin ingin meninggalkan halaman?';
    return e.returnValue;
  }
});

document.addEventListener('DOMContentLoaded', () => {

  // Check and restore ongoing session on page load
  const restored = checkAndRestoreSession();

  // Submit Modal Triggers
  document.getElementById('btn-submit-top').onclick = openSubmitConfirmModal;
  document.getElementById('btn-submit-bottom').onclick = openSubmitConfirmModal;
  document.getElementById('btn-close-submit-modal').onclick = () => hideModal('modal-submit-confirm');
  document.getElementById('btn-cancel-submit').onclick = () => hideModal('modal-submit-confirm');
  document.getElementById('btn-confirm-submit').onclick = () => {
    hideModal('modal-submit-confirm');
    submitQuiz();
  };

  // Exit Modal Triggers
  document.getElementById('btn-back-to-hub').onclick = openExitConfirmModal;
  document.getElementById('btn-close-exit-modal').onclick = () => hideModal('modal-exit-confirm');
  document.getElementById('btn-cancel-exit').onclick = () => hideModal('modal-exit-confirm');
  document.getElementById('btn-confirm-exit').onclick = () => {
    hideModal('modal-exit-confirm');
    clearInterval(timerInterval);
    isQuizActive = false;
    clearQuizSession();
    document.getElementById('eval-quiz-screen').style.display = 'none';
    document.getElementById('eval-hub-screen').style.display = 'block';
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  document.getElementById('btn-choose-other-module').onclick = () => {
    document.getElementById('eval-result-screen').style.display = 'none';
    document.getElementById('eval-hub-screen').style.display = 'block';
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  document.getElementById('btn-retake-quiz').onclick = () => {
    if (currentQuizKey) {
      startModuleQuiz(currentQuizKey);
    }
  };

  document.getElementById('btn-scroll-top').onclick = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
