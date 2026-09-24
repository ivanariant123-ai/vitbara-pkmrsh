<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman Sejarah Benteng Fort Willem I (Canva Embed & Etnomatematika)
 */

$pageTitle = 'Sejarah Benteng Fort Willem I';
$pageDesc = 'Sejarah, linimasa pembangunan, dan arsitektur Benteng Fort Willem I (Benteng Pendem Ambarawa) berbasis presentasi Canva interaktif.';
$activeMenu = 'sejarah';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

try {
    $pdo = getDB();
    $histStmt = $pdo->query("SELECT * FROM history WHERE is_active = 1 ORDER BY order_pos ASC");
    $histories = $histStmt->fetchAll();
} catch (Exception $e) {
    $histories = [];
}

$canvaEmbedUrl = "https://www.canva.com/design/DAHUM-5TSFQ/uNBf0gWG3_loJ-0ov4W36g/view?embed";
$canvaShareUrl = "https://www.canva.com/design/DAHUM-5TSFQ/uNBf0gWG3_loJ-0ov4W36g/view?utm_content=DAHUM-5TSFQ&utm_campaign=designshare&utm_medium=embeds&utm_source=link";
$storyTitle = "Jejak di Balik Tembok Benteng Fort Willem I";
$storyAuthor = "Tim Vitbara";
?>

<!-- Page Hero Section -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>Sejarah</span>
      </nav>
      <h1 class="page-hero-title">Sejarah Benteng Fort Willem I</h1>
      <p class="page-hero-desc">
        Menelusuri jejak cagar budaya kolonial abad ke-19 di Ambarawa sebagai inspirasi pembelajaran matematika kontekstual dan etnomatematika bangun ruang.
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_sejarah.png" alt="Maskot Sejarah Benteng" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">Jelajah Benteng 🏛️</div>
      </div>
    </div>
  </div>
</div>

<main class="section" id="sejarahSection">
  <div class="container">

    <!-- 1. Interactive Canva Story Presentation Stage -->
    <div class="emodul-player-wrapper" id="historyPlayer" style="margin-bottom: 3.5rem;">
      <!-- Player Top Bar -->
      <div class="emodul-player-header">
        <div class="emodul-header-info">
          <div class="emodul-badges">
            <span class="emodul-badge-order">Cerita Sejarah Cagar Budaya</span>
            <span class="emodul-badge-cat">Abad ke-19 (1834–1845)</span>
            <span class="emodul-badge-author">✍️ Disusun oleh: <?= e($storyAuthor) ?></span>
          </div>
          <h2 class="emodul-player-title"><?= e($storyTitle) ?></h2>
        </div>

        <div class="emodul-header-actions">
          <button type="button" class="btn-player-action" id="btnHistoryFullscreen" title="Tampilkan Layar Penuh">
            <span>⛶</span> Layar Penuh
          </button>
          <a href="<?= e($canvaShareUrl) ?>" target="_blank" rel="noopener" class="btn-player-action btn-player-primary" title="Buka di Canva Tab Baru">
            <span>↗</span> Buka di Canva
          </a>
        </div>
      </div>

      <!-- Canva Responsive Embed Player -->
      <div class="canva-embed-container" id="canvaHistoryContainer" style="padding-top: 56.25%;">
        <iframe 
          id="canvaHistoryIframe"
          loading="lazy" 
          src="<?= e($canvaEmbedUrl) ?>" 
          allowfullscreen="allowfullscreen" 
          allow="fullscreen"
          title="<?= e($storyTitle) ?>">
        </iframe>
      </div>

      <!-- Player Footer -->
      <div class="emodul-player-footer">
        <div class="emodul-desc-box">
          <p class="emodul-desc-text">
            <strong>💡 Ringkasan Cerita:</strong> Benteng Fort Willem I (Benteng Pendem Ambarawa) didirikan antara tahun 1834 hingga 1845 atas titah Raja Willem I dari Belanda. Eksplorasi cerita ini mengulas latar belakang pendirian, arsitektur pertahanan megah, hingga keterkaitannya dengan konsep geometri matematika.
          </p>
          <div class="emodul-attribution">
            <a href="<?= e($canvaShareUrl) ?>" target="_blank" rel="noopener"><?= e($storyTitle) ?></a> oleh <?= e($storyAuthor) ?>
          </div>
        </div>

        <div class="emodul-nav-controls">
          <a href="emodul.php" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.6rem 1rem;">
            📖 Pelajari E-Modul
          </a>
          <a href="eksplor-vr.php" class="btn btn-primary" style="font-size: 0.85rem; padding: 0.6rem 1rem;">
            Eksplor VR 360° 🥽
          </a>
        </div>
      </div>
    </div>

    <!-- 2. Section Header: Pilar Sejarah & Arsitektur -->
    <div class="section-header">
      <div class="badge-tag">Cagar Budaya Nasional</div>
      <h2 class="section-title">Benteng Pendem Ambarawa</h2>
      <p class="section-subtitle">
        Mahakarya arsitektur militer abad ke-19 yang menyimpan keindahan proporsi simetri, rekayasa batu bata merah, dan konsep ruang yang memukau.
      </p>
    </div>

    <!-- Heritage Story Highlights Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin-bottom: 3.5rem;">
      <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); transition: transform var(--transition-fast);" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='none'">
        <div style="font-size: 2.5rem; margin-bottom: 1rem;">🏛️</div>
        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--color-text-main);">Arsitektur Militer Klasik</h3>
        <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Benteng dirancang dengan dinding bata tebal berlapis, lorong barak berulang berbentuk balok panjang, serta sistem drainase dan gerbang lengkung bergaya Romanesque.
        </p>
      </div>

      <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); transition: transform var(--transition-fast);" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='none'">
        <div style="font-size: 2.5rem; margin-bottom: 1rem;">⏳</div>
        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--color-text-main);">Linimasa Pembangunan (1834–1845)</h3>
        <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Membutuhkan waktu lebih dari 11 tahun dalam pembangunannya, benteng ini berfungsi sebagai depot logistik militer utama serta benteng pertahanan di pedalaman Jawa Tengah.
        </p>
      </div>

      <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); transition: transform var(--transition-fast);" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='none'">
        <div style="font-size: 2.5rem; margin-bottom: 1rem;">📐</div>
        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--color-text-main);">Simetri &amp; Etnomatematika</h3>
        <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Setiap sudut bastion, pilar silindris, selasar balok, dan kubah pengawas limas menjadi laboratorium nyata untuk memahami konsep geometri ruang matematika.
        </p>
      </div>
    </div>

    <!-- 3. Fakta Menarik Benteng Fort Willem I -->
    <div style="background: var(--color-bg-secondary); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2.5rem; margin-bottom: 3.5rem;">
      <div style="text-align: center; max-width: 680px; margin: 0 auto 2rem;">
        <h3 style="font-size: 1.35rem; margin-bottom: 0.5rem; color: var(--color-text-main);">Fakta Menarik Benteng Fort Willem I</h3>
        <p style="color: var(--color-text-muted); font-size: 0.95rem;">Mengenal lebih dalam keunikan cagar budaya yang menjadi inspirasi pembelajaran VITBARA.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
        <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
          <div style="font-size: 1.5rem; margin-bottom: 0.5rem;">📍 <strong>Lokasi Strategis</strong></div>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); line-height: 1.55; margin: 0;">
            Terletak di Bugisari, Lodoyong, Ambarawa, Kabupaten Semarang &mdash; dikelilingi oleh pemandangan Gunung Ungaran, Merbabu, dan Telomoyo.
          </p>
        </div>

        <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
          <div style="font-size: 1.5rem; margin-bottom: 0.5rem;">🧱 <strong>Julukan Benteng Pendem</strong></div>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); line-height: 1.55; margin: 0;">
            Disebut "Pendem" (terpendam/tertanam) karena letaknya yang berada di bawah permukaan tanggul tanah alami untuk kamuflase taktik militer.
          </p>
        </div>

        <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
          <div style="font-size: 1.5rem; margin-bottom: 0.5rem;">🥽 <strong>Eksplorasi Virtual</strong></div>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); line-height: 1.55; margin: 0;">
            Kini kamu dapat menjelajahi seluruh sudut koridor bersejarah benteng dalam format 360° interaktif langsung dari perangkatmu.
          </p>
        </div>
      </div>
    </div>

    <!-- 4. Next Step CTA -->
    <div style="text-align: center; padding: 3rem 2rem; background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); border-radius: var(--radius-lg); color: #FFFFFF; position: relative; overflow: hidden;">
      <div style="position: absolute; top: -50px; right: -50px; width: 160px; height: 160px; border-radius: 50%; background: radial-gradient(circle, rgba(255,198,88,0.2) 0%, transparent 70%);"></div>
      
      <div class="badge-accent" style="margin-bottom: 1rem; display: inline-block;">Jelajah Interaktif</div>
      <h3 style="font-size: 1.75rem; color: #FFFFFF; margin-bottom: 0.75rem;">Siap Menjelajahi Sudut Benteng dalam 360°?</h3>
      <p style="color: #CBD5E1; max-width: 600px; margin: 0 auto 2rem; font-size: 0.95rem;">
        Masuki ruang 360° virtual tour untuk melihat detail tekstur dinding bata, lorong koridor, dan menemukan konsep geometri matematika secara langsung.
      </p>

      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="eksplor-vr.php" class="btn btn-primary">
          <span class="btn-icon">🥽</span> Mulai Eksplor VR 360°
        </a>
        <a href="emodul.php" class="btn btn-outline" style="background: rgba(255,255,255,0.1); color: #FFFFFF; border-color: rgba(255,255,255,0.3);">
          <span class="btn-icon">📖</span> Buka E-Modul Geometri
        </a>
        <a href="game-learning.php" class="btn btn-outline" style="background: rgba(255,255,255,0.1); color: #FFFFFF; border-color: rgba(255,255,255,0.3);">
          <span class="btn-icon">🎮</span> Mainkan Game Learning
        </a>
      </div>
    </div>

  </div>
</main>

<!-- Fullscreen Handler Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const btnFullscreen = document.getElementById('btnHistoryFullscreen');
  const canvaContainer = document.getElementById('canvaHistoryContainer');

  if (btnFullscreen && canvaContainer) {
    btnFullscreen.addEventListener('click', () => {
      if (!document.fullscreenElement) {
        if (canvaContainer.requestFullscreen) {
          canvaContainer.requestFullscreen();
        } else if (canvaContainer.webkitRequestFullscreen) {
          canvaContainer.webkitRequestFullscreen();
        } else if (canvaContainer.msRequestFullscreen) {
          canvaContainer.msRequestFullscreen();
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        }
      }
    });
  }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
