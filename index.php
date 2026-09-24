<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Landing Page Utama (Slide 1 - 7)
 * Konsep: Modern Heritage Learning Experience
 */

$pageTitle = 'Home';
$activeMenu = 'home';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

// Ambil data dinamis dari database jika tersedia
try {
    $pdo = getDB();
    
    // FAQs
    $faqStmt = $pdo->query("SELECT question, answer FROM faqs WHERE is_active = 1 ORDER BY order_pos ASC LIMIT 10");
    $faqs = $faqStmt->fetchAll();

    // Team Members
    $teamStmt = $pdo->query("SELECT name, role, department, university, photo_url, is_advisor FROM team_members ORDER BY order_pos ASC");
    $teamMembers = $teamStmt->fetchAll();
} catch (Exception $e) {
    $faqs = [];
    $teamMembers = [];
}
?>

<main id="main-content">

  <!-- ========================================================================
       SLIDE 1 — SELAMAT DATANG DI VITBARA (HERO SECTION)
       ======================================================================== -->
  <section id="slide-1" class="hero-section">
    <!-- Background Video Autoplay Loop -->
    <video class="hero-bg-video" autoplay muted loop playsinline poster="assets/images/heritage/fort_hero_bg.svg">
      <source src="assets/images/heritage/Landing Page Fix.mp4" type="video/mp4">
      Browser Anda tidak mendukung pemutaran video.
    </video>

    <!-- Gradient Overlay for Contrast -->
    <div class="hero-overlay"></div>

    <!-- Interactive 3D Geometry Canvas -->
    <canvas id="heroGeometryCanvas"></canvas>

    <div class="container">
      <div class="hero-content">
        <div class="hero-badge">
          <span>🏛</span> Benteng Fort Willem I
        </div>

        <h1 class="hero-title">
          Selamat Datang di <span class="text-gold hero-title-brand">VITBARA <img src="assets/images/heritage/kepala mascot.png" alt="Maskot Bara" class="hero-mascot-head" title="Halo! Aku Bara 🐱"></span>
        </h1>

        <p class="hero-subtitle">
          Virtual Tour Bangun Ruang
        </p>

        <p class="hero-desc">
          VITBARA adalah media pembelajaran matematika berbasis virtual tour yang akan membantu kamu belajar materi geometri dengan cara yang menyenangkan dan bermakna. Temukan konsep geometri melalui arsitektur, sejarah, dan budaya di Benteng Fort Willem I.
        </p>

        <div class="hero-cta-group">
          <a href="#slide-2" class="btn btn-primary">
            <span class="btn-icon">🧭</span> Mulai Jelajah!
          </a>
          <a href="eksplor-vr.php" class="btn btn-white-outline">
            <span class="btn-icon">🥽</span> Eksplor Virtual Tour
          </a>
        </div>
      </div>

      <!-- Mini Feature Highlight Badges - Full Width From Left To Right -->
      <div class="hero-features-preview">
        <div class="hero-mini-card">
          <div class="hero-mini-icon">📐</div>
          <div class="hero-mini-text">Geometri Terintegrasi Virtual Tour</div>
        </div>
        <div class="hero-mini-card">
          <div class="hero-mini-icon">🏰</div>
          <div class="hero-mini-text">Benteng Fort Willem I Ambarawa</div>
        </div>
        <div class="hero-mini-card">
          <div class="hero-mini-icon">💡</div>
          <div class="hero-mini-text">Simulasi 3D &amp; Gamifikasi Edukatif</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SLIDE 2 — TANTANGAN BELAJAR GEOMETRI
       ======================================================================== -->
  <section id="slide-2" class="section section-bg-secondary">
    <div class="container">
      <div class="section-header">
        <div class="badge-tag">Tantangan Pembelajaran</div>
        <h2 class="section-title">Mengapa Belajar Geometri Terasa Sulit?</h2>
        <p class="section-subtitle">
          Banyak siswa mengalami kesulitan saat mempelajari materi geometri bangun ruang yang hanya mengandalkan rumus teks di atas kertas 2 dimensi.
        </p>
      </div>

      <div class="challenge-grid">
        <!-- Visual Illustration -->
        <div class="challenge-illustration-wrap">
          <img src="assets/images/geometry/challenge_student.png" alt="Tantangan Belajar Geometri Siswa SMP" width="600" height="450" loading="lazy">
        </div>

        <!-- 3 Problem Cards -->
        <div class="challenge-cards">
          <!-- Problem 1 -->
          <div class="challenge-card">
            <div class="challenge-card-icon">🧊</div>
            <div>
              <h3 class="challenge-card-title">Sulit Membayangkan Bentuk 3D</h3>
              <p class="challenge-card-desc">
                Siswa kesulitan memahami dan merekonstruksi bentuk tiga dimensi hanya melalui gambar datar dua dimensi pada buku teks.
              </p>
            </div>
          </div>

          <!-- Problem 2 -->
          <div class="challenge-card">
            <div class="challenge-card-icon">📄</div>
            <div>
              <h3 class="challenge-card-title">Pembelajaran Abstrak</h3>
              <p class="challenge-card-desc">
                Konsep geometri sering dipahami sebatas rumus, gambar sketsa kaku, dan hafalan tanpa memahami makna spasial sesungguhnya.
              </p>
            </div>
          </div>

          <!-- Problem 3 -->
          <div class="challenge-card">
            <div class="challenge-card-icon">🔍</div>
            <div>
              <h3 class="challenge-card-title">Kurang Eksplorasi Objek Nyata</h3>
              <p class="challenge-card-desc">
                Siswa belum memperoleh banyak kesempatan untuk menghubungkan konsep geometri bangun ruang dengan objek nyata di lingkungan sekitar.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Transition Callout Banner -->
      <div class="challenge-transition-banner">
        <div>
          <div style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; color: #94A3B8; margin-bottom: 0.3rem;">Sebuah Solusi Baru</div>
          <div class="challenge-question">
            “Bagaimana jika belajar geometri dilakukan dengan menjelajahi objek nyata?”
          </div>
        </div>
        <a href="#slide-3" class="btn btn-primary" style="white-space: nowrap;">
          Temukan Jawabannya ➔
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SLIDE 3 — MENGAPA BENTENG FORT WILLEM I?
       ======================================================================== -->
  <section id="slide-3" class="section">
    <div class="container">
      <div class="section-header">
        <div class="badge-tag">Konteks Budaya &amp; Arsitektur</div>
        <h2 class="section-title">Mengapa Benteng Fort Willem I?</h2>
        <p class="section-subtitle">
          Benteng Fort Willem I (Benteng Pendem Ambarawa) adalah warisan sejarah megah abad ke-19 yang menyimpan harmoni antara arsitektur kolonial dan prinsip-prinsip geometri ruang.
        </p>
      </div>

      <!-- 3 Main Concept Pillars -->
      <div class="fort-pillars-grid">
        <div class="fort-pillar-card">
          <div class="pillar-icon-box">🏛</div>
          <h3 class="pillar-title">Cagar Budaya</h3>
          <p class="pillar-desc">
            Benteng Fort Willem I memiliki nilai sejarah dan budaya yang sangat tinggi sebagai cagar budaya nasional di Ambarawa, Jawa Tengah.
          </p>
        </div>

        <div class="fort-pillar-card">
          <div class="pillar-icon-box">📐</div>
          <h3 class="pillar-title">Arsitektur Geometris</h3>
          <p class="pillar-desc">
            Struktur bangunan memiliki berbagai bentuk, pola, simetri, dan relasi geometris presisi dari gerbang, koridor hingga bastion pertahanan.
          </p>
        </div>

        <div class="fort-pillar-card">
          <div class="pillar-icon-box">🌍</div>
          <h3 class="pillar-title">Objek Nyata Matematika</h3>
          <p class="pillar-desc">
            Benteng menjadi laboratorium kontekstual nyata untuk menemukan konsep volume, luas permukaan, dan jaring-jaring bangun ruang secara autentik.
          </p>
        </div>
      </div>

      <!-- Geometric Mapping Showcase (Museum Digital) -->
      <div class="mapping-showcase-header">
        <h3 class="mapping-showcase-title">Eksplorasi Geometri pada Struktur Benteng</h3>
        <p style="color: var(--color-text-muted); font-size: 0.95rem;">Hubungan nyata elemen arsitektur Benteng dengan konsep bangun ruang</p>
      </div>

      <div class="geometric-mappings-grid">
        <!-- Mapping 1 -->
        <div class="mapping-card">
          <img src="assets/images/heritage/corridor_balok.svg" alt="Koridor Benteng ke Balok" class="mapping-card-img">
          <div class="mapping-card-body">
            <h4 class="mapping-card-title">Koridor → Balok</h4>
            <p class="mapping-card-text">Ruang barak dan lorong memanjang mengilustrasikan rusuk panjang, lebar, dan tinggi balok serta perhitungan volume (V = p × l × t).</p>
          </div>
        </div>

        <!-- Mapping 2 -->
        <div class="mapping-card">
          <img src="assets/images/heritage/arch_tabung.svg" alt="Pintu Lengkung ke Tabung" class="mapping-card-img">
          <div class="mapping-card-body">
            <h4 class="mapping-card-title">Pintu Lengkung → Tabung</h4>
            <p class="mapping-card-text">Lengkungan kubah bata Romanesque di gerbang benteng memvisualisasikan irisan lingkaran, selimut silinder, dan bangun ruang sisi lengkung.</p>
          </div>
        </div>

        <!-- Mapping 3 -->
        <div class="mapping-card">
          <img src="assets/images/heritage/plan_symmetry.svg" alt="Tata Ruang ke Simetri" class="mapping-card-img">
          <div class="mapping-card-body">
            <h4 class="mapping-card-title">Tata Ruang → Simetri</h4>
            <p class="mapping-card-text">Denah benteng poligonal oktagonal menyajikan prinsip simetri lipat, sudut ruang, serta konsep prisma segi-banyak yang presisi.</p>
          </div>
        </div>

        <!-- Mapping 4 -->
        <div class="mapping-card">
          <img src="assets/images/heritage/pilar_dimensi.svg" alt="Pilar ke Luas Permukaan" class="mapping-card-img">
          <div class="mapping-card-body">
            <h4 class="mapping-card-title">Pilar &amp; Dinding → Dimensi</h4>
            <p class="mapping-card-text">Pilar penyangga kokoh memberikan pemahaman nyata mengenai perhitungan luas permukaan selimut dan estimasi volume material bangunan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SLIDE 4 — APA ITU VITBARA?
       ======================================================================== -->
  <section id="slide-4" class="section section-bg-secondary">
    <div class="container">
      <div class="section-header">
        <div class="badge-tag">Solusi Belajar Inovatif</div>
        <h2 class="section-title">VITBARA Hadir untuk Membuat Geometri Lebih Bermakna</h2>
        <p class="section-subtitle">
          Media pembelajaran digital yang mentransformasikan pembelajaran matematika menjadi pengalaman eksploratif yang imersif dan kontekstual.
        </p>
      </div>

      <div class="value-cards-grid">
        <!-- Value 1 -->
        <div class="value-card">
          <div class="value-card-icon-wrap">🎯</div>
          <h3 class="value-card-title">Visualisasi</h3>
          <p class="value-card-desc">
            Membantu siswa melihat, membedah, dan memahami konsep bangun ruang secara lebih nyata melalui visualisasi 3 dimensi dan simulasi interaktif.
          </p>
        </div>

        <!-- Value 2 -->
        <div class="value-card">
          <div class="value-card-icon-wrap">🏛</div>
          <h3 class="value-card-title">Eksplorasi Budaya</h3>
          <p class="value-card-desc">
            Menghubungkan matematika dengan kekayaan cagar budaya Benteng Fort Willem I, menumbuhkan apresiasi sejarah sekaligus literasi numerasi.
          </p>
        </div>

        <!-- Value 3 -->
        <div class="value-card">
          <div class="value-card-icon-wrap">🧠</div>
          <h3 class="value-card-title">Melatih Spasial</h3>
          <p class="value-card-desc">
            Mengembangkan kemampuan penalaran spasial siswa dalam membayangkan, menganalisis, dan memecahkan permasalahan bangun ruang tiga dimensi.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SLIDE 5 — ALUR BELAJAR DI VITBARA (ROADMAP / JOURNEY)
       ======================================================================== -->
  <section id="slide-5" class="section">
    <div class="container">
      <div class="section-header">
        <div class="badge-tag">Learning Journey</div>
        <h2 class="section-title">Alur Belajar di VITBARA</h2>
        <p class="section-subtitle">
          Ikuti 5 tahapan pembelajaran bertahap untuk menguasai konsep bangun ruang secara optimal.
        </p>
      </div>

      <div class="roadmap-timeline">
        <!-- Step 1 -->
        <div class="roadmap-step">
          <div class="roadmap-step-badge">
            🏰
            <span class="roadmap-step-num">1</span>
          </div>
          <h3 class="roadmap-step-title">Kenali Benteng</h3>
          <p class="roadmap-step-desc">Pelajari sejarah, konteks arsitektur, dan denah Benteng Fort Willem I.</p>
        </div>

        <!-- Step 2 -->
        <div class="roadmap-step">
          <div class="roadmap-step-badge">
            📐
            <span class="roadmap-step-num">2</span>
          </div>
          <h3 class="roadmap-step-title">Pelajari Konsep Geometri</h3>
          <p class="roadmap-step-desc">Buka E-Modul interaktif bangun ruang sisi datar dan sisi lengkung.</p>
        </div>

        <!-- Step 3 -->
        <div class="roadmap-step">
          <div class="roadmap-step-badge">
            🥽
            <span class="roadmap-step-num">3</span>
          </div>
          <h3 class="roadmap-step-title">Eksplorasi Virtual Tour</h3>
          <p class="roadmap-step-desc">Jelajahi sudut benteng 360° dan temukan hotspot konsep matematika.</p>
        </div>

        <!-- Step 4 -->
        <div class="roadmap-step">
          <div class="roadmap-step-badge">
            🎮
            <span class="roadmap-step-num">4</span>
          </div>
          <h3 class="roadmap-step-title">Game Learning</h3>
          <p class="roadmap-step-desc">Uji ketangkasan berpikir lewat kuis tantangan spasial yang seru.</p>
        </div>

        <!-- Step 5 -->
        <div class="roadmap-step">
          <div class="roadmap-step-badge">
            📝
            <span class="roadmap-step-num">5</span>
          </div>
          <h3 class="roadmap-step-title">Evaluasi Pemahaman</h3>
          <p class="roadmap-step-desc">Uji pemahaman komprehensif dan peroleh umpan balik hasil belajar.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SLIDE 6 — PROFIL PENGEMBANG
       ======================================================================== -->
  <section id="slide-6" class="section section-bg-secondary">
    <div class="container">
      <div class="section-header">
        <div class="badge-tag">Tim Pengembang</div>
        <h2 class="section-title">Tentang Pengembang VITBARA</h2>
        <p class="section-subtitle">
          Dikembangkan oleh Tim PKM RSH VITBARA - Universitas Muhammadiyah Semarang untuk penelitian terkait kemampuan spasial siswa.
        </p>
      </div>

      <div class="team-grid">
        <?php if (!empty($teamMembers)): ?>
          <?php foreach ($teamMembers as $member): 
            $isAdv = !empty($member['is_advisor']);
            $cardClass = $isAdv ? 'team-card team-card-advisor' : 'team-card';
            $roleClass = $isAdv ? 'team-role-tag team-role-advisor' : 'team-role-tag';
          ?>
            <div class="<?= $cardClass ?>">
              <div class="team-avatar-wrap">
                <img src="<?= e($member['photo_url'] ?: 'assets/images/team/dev1.svg') ?>" alt="<?= e($member['name']) ?>" width="96" height="96" loading="lazy">
              </div>
              <span class="<?= $roleClass ?>"><?= $isAdv ? '🎓 ' : '👤 ' ?><?= e($member['role']) ?></span>
              <h3 class="team-name"><?= e($member['name']) ?></h3>
              <p class="team-department"><?= e($member['department']) ?></p>
              <p class="team-univ"><?= e($member['university']) ?></p>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <!-- Static Fallback 5 Members -->
          <div class="team-card team-card-advisor">
            <div class="team-avatar-wrap">
              <img src="assets/images/team/dosen.png" alt="Dr. Venissa Dian Mawarsari, M.Pd." width="96" height="96" loading="lazy">
            </div>
            <span class="team-role-tag team-role-advisor">🎓 Dosen Pembimbing</span>
            <h3 class="team-name">Dr. Venissa Dian Mawarsari, M.Pd.</h3>
            <p class="team-meta">NUPTK: 8136764665231113</p>
            <p class="team-department">Dosen Pendidikan Matematika</p>
            <p class="team-univ">Universitas Muhammadiyah Semarang</p>
          </div>

          <div class="team-card">
            <div class="team-avatar-wrap">
              <img src="assets/images/team/ketua-tim.png" alt="Ivan Arianto" width="96" height="96" loading="lazy">
            </div>
            <span class="team-role-tag">👤 Ketua Tim</span>
            <h3 class="team-name">Ivan Arianto</h3>
            <p class="team-meta">NIM: B2B023048</p>
            <p class="team-department">S-1 Pendidikan Matematika</p>
            <p class="team-univ">Universitas Muhammadiyah Semarang</p>
          </div>

          <div class="team-card">
            <div class="team-avatar-wrap">
              <img src="assets/images/team/anggota1.png" alt="Dina Trisnawati" width="96" height="96" loading="lazy">
            </div>
            <span class="team-role-tag">👤 Anggota Tim</span>
            <h3 class="team-name">Dina Trisnawati</h3>
            <p class="team-meta">NIM: B2B023046</p>
            <p class="team-department">S-1 Pendidikan Matematika</p>
            <p class="team-univ">Universitas Muhammadiyah Semarang</p>
          </div>

          <div class="team-card">
            <div class="team-avatar-wrap">
              <img src="assets/images/team/anggota2.png" alt="Afifah Nuraini" width="96" height="96" loading="lazy">
            </div>
            <span class="team-role-tag">👤 Anggota Tim</span>
            <h3 class="team-name">Afifah Nuraini</h3>
            <p class="team-meta">NIM: 15142420039</p>
            <p class="team-department">S-1 Pendidikan Matematika</p>
            <p class="team-univ">Universitas Muhammadiyah Semarang</p>
          </div>

          <div class="team-card">
            <div class="team-avatar-wrap">
              <img src="assets/images/team/anggota3.png" alt="Destavio Arthayana Putri" width="96" height="96" loading="lazy">
            </div>
            <span class="team-role-tag">👤 Anggota Tim</span>
            <h3 class="team-name">Destavio Arthayana Putri</h3>
            <p class="team-meta">NIM: 13182520177</p>
            <p class="team-department">S-1 Informatika</p>
            <p class="team-univ">Universitas Muhammadiyah Semarang</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SLIDE 7 — FAQ / BANTUAN PENGGUNA (ACCORDION)
       ======================================================================== -->
  <section id="slide-7" class="section">
    <div class="container">
      <div class="section-header">
        <div class="badge-tag">Pusat Bantuan</div>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">
          Temukan jawaban atas pertanyaan umum mengenai VITBARA.
        </p>
      </div>

      <div class="faq-accordion-wrap">
        <?php if (!empty($faqs)): ?>
          <?php foreach ($faqs as $index => $faq): ?>
            <div class="faq-item">
              <button type="button" class="faq-header" aria-expanded="false">
                <span><?= e($faq['question']) ?></span>
                <span class="faq-icon">▼</span>
              </button>
              <div class="faq-body">
                <div class="faq-content">
                  <?= nl2br(e($faq['answer'])) ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <!-- Default Fallback FAQs -->
          <div class="faq-item">
            <button type="button" class="faq-header">
              <span>Apa itu VITBARA?</span>
              <span class="faq-icon">▼</span>
            </button>
            <div class="faq-body">
              <div class="faq-content">
                VITBARA (Virtual Tour Bangun Ruang) merupakan media pembelajaran matematika berbasis website yang memanfaatkan teknologi virtual tour untuk membantu siswa memahami konsep geometri melalui eksplorasi objek budaya Benteng Fort Willem I.
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-header">
              <span>Materi matematika apa yang dipelajari di VITBARA?</span>
              <span class="faq-icon">▼</span>
            </button>
            <div class="faq-body">
              <div class="faq-content">
                Siswa akan mempelajari materi bangun ruang melalui berbagai aktivitas pembelajaran yang tersedia dalam VITBARA.
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-header">
              <span>Perangkat apa saja yang dapat digunakan untuk mengakses VITBARA?</span>
              <span class="faq-icon">▼</span>
            </button>
            <div class="faq-body">
              <div class="faq-content">
                VITBARA dapat digunakan melalui:
                <ul style="margin-left: 1.5rem; margin-top: 0.5rem;">
                  <li>Laptop/Komputer</li>
                  <li>Tablet</li>
                  <li>Smartphone</li>
                </ul>
                Dengan browser modern seperti Google Chrome, Microsoft Edge, dan Mozilla Firefox.
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-header">
              <span>Apakah VITBARA harus diinstal?</span>
              <span class="faq-icon">▼</span>
            </button>
            <div class="faq-body">
              <div class="faq-content">
                Tidak. VITBARA berbasis website sehingga dapat digunakan langsung melalui browser.
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-header">
              <span>Apakah VITBARA membutuhkan koneksi internet?</span>
              <span class="faq-icon">▼</span>
            </button>
            <div class="faq-body">
              <div class="faq-content">
                Ya. Koneksi internet dibutuhkan terutama untuk menjalankan virtual tour dan konten multimedia.
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-header">
              <span>Apa yang harus dilakukan jika virtual tour tidak berjalan dengan lancar?</span>
              <span class="faq-icon">▼</span>
            </button>
            <div class="faq-body">
              <div class="faq-content">
                Periksa koneksi internet, gunakan browser versi terbaru, dan pastikan perangkat memiliki sumber daya yang cukup.
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="faq-more-btn-wrap">
        <button type="button" id="moreFaqBtn" class="btn btn-outline">
          <span class="btn-icon">💬</span> More FAQ &amp; Hubungi Kami
        </button>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
