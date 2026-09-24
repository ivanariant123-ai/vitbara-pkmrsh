<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman About Us (Routing Navigasi)
 */

$pageTitle = 'Tentang VITBARA';
$pageDesc = 'Profil inovasi media pembelajaran matematika VITBARA berbasis cagar budaya Benteng Fort Willem I Ambarawa.';
$activeMenu = 'about';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

try {
    $pdo = getDB();
    $teamStmt = $pdo->query("SELECT name, role, department, university, photo_url, is_advisor FROM team_members ORDER BY order_pos ASC");
    $teamMembers = $teamStmt->fetchAll();
} catch (Exception $e) {
    $teamMembers = [];
}
?>

<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>About Us</span>
      </nav>
      <h1 class="page-hero-title">Tentang VITBARA</h1>
      <p class="page-hero-desc">
        Inovasi media pembelajaran matematika etnomatematika persembahan Universitas Muhammadiyah Semarang.
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_about.png" alt="Maskot Tentang VITBARA" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">Tim Pengembang 👥</div>
      </div>
    </div>
  </div>
</div>

<main class="section">
  <div class="container">
    <div style="max-width: 860px; margin: 0 auto 4rem auto; text-align: center;">
      <div class="badge-tag">Visi &amp; Misi</div>
      <h2 style="font-size: 2.2rem; margin-bottom: 1.25rem; font-weight: 800;">Modern Heritage Learning Experience</h2>
      <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-text-body);">
        VITBARA dirancang untuk menjembatani kesenjangan pemahaman spasial siswa SMP dalam materi geometri bangun ruang dengan menghadirkan visualisasi 3D realistis dan virtual tour cagar budaya Benteng Fort Willem I (Benteng Pendem Ambarawa).
      </p>
    </div>

    <div class="section-header">
      <div class="badge-tag">Sivitas Akademika</div>
      <h2 class="section-title">Profil Tim Pengembang</h2>
      <p class="section-subtitle">
        Get to Know Our Team
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
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
