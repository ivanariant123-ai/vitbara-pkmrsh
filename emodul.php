<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman E-Modul Geometri Interaktif (Canva Embed Player & Modul Katalog)
 */

$pageTitle = 'E-Modul Geometri Bangun Ruang';
$pageDesc = 'Modul digital interaktif materi bangun ruang SMP Kelas 9 terintegrasi arsitektur Benteng Fort Willem I.';
$activeMenu = 'emodul';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

try {
    $pdo = getDB();
    $modStmt = $pdo->query("SELECT * FROM modules ORDER BY order_pos ASC, id ASC");
    $modules = $modStmt->fetchAll();
} catch (Exception $e) {
    $modules = [];
}

// Menentukan modul aktif (berdasarkan ID atau order_pos atau default pertama)
$activeModId = isset($_GET['modul']) ? (int)$_GET['modul'] : ($modules[0]['id'] ?? 1);
$activeModule = null;
$activeModuleIndex = 0;

foreach ($modules as $idx => $m) {
    if ((int)$m['id'] === $activeModId || (int)$m['order_pos'] === $activeModId) {
        $activeModule = $m;
        $activeModuleIndex = $idx;
        break;
    }
}

if (!$activeModule && !empty($modules)) {
    $activeModule = $modules[0];
    $activeModuleIndex = 0;
}

$prevModule = ($activeModuleIndex > 0) ? $modules[$activeModuleIndex - 1] : null;
$nextModule = ($activeModuleIndex < count($modules) - 1) ? $modules[$activeModuleIndex + 1] : null;
?>

<!-- Page Hero Section -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>E-Modul</span>
      </nav>
      <h1 class="page-hero-title">E-Modul Bangun Ruang</h1>
      <p class="page-hero-desc">
        Modul digital interaktif berbasis Canva untuk eksplorasi materi Geometri SMP Kelas 9 yang terintegrasi secara kontekstual dengan cagar budaya Benteng Fort Willem I (Benteng Pendem Ambarawa).
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_emodul.png" alt="Maskot E-Modul Geometri" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">E-Modul Interaktif 📐</div>
      </div>
    </div>
  </div>
</div>

<main class="section" id="emodulSection">
  <div class="container">

    <!-- 1. Interactive Canva Presentation Stage -->
    <?php if ($activeModule): ?>
    <div class="emodul-player-wrapper" id="modulPlayer">
      <!-- Player Top Bar -->
      <div class="emodul-player-header">
        <div class="emodul-header-info">
          <div class="emodul-badges">
            <span class="emodul-badge-order">Materi <?= sprintf('%02d', (int)($activeModule['order_pos'] ?: ($activeModuleIndex + 1))) ?> / <?= sprintf('%02d', count($modules)) ?></span>
            <span class="emodul-badge-cat"><?= e($activeModule['category']) ?></span>
            <span class="emodul-badge-author">✍️ Penulis: <?= e($activeModule['author'] ?: 'Tim Vitbara') ?></span>
          </div>
          <h2 class="emodul-player-title" id="playerTitle"><?= e($activeModule['title']) ?></h2>
        </div>

        <div class="emodul-header-actions">
          <button type="button" class="btn-player-action" id="btnFullscreen" title="Tampilkan Layar Penuh">
            <span>⛶</span> Layar Penuh
          </button>
          <a href="<?= e($activeModule['file_url'] ?: $activeModule['embed_url']) ?>" target="_blank" rel="noopener" class="btn-player-action btn-player-primary" id="btnOpenCanva" title="Buka di Canva Tab Baru">
            <span>↗</span> Buka di Canva
          </a>
        </div>
      </div>

      <!-- Canva Responsive Embed Player -->
      <div class="canva-embed-container" id="canvaContainer">
        <iframe 
          id="canvaIframe"
          loading="lazy" 
          src="<?= e($activeModule['embed_url'] ?: $activeModule['file_url']) ?>" 
          allowfullscreen="allowfullscreen" 
          allow="fullscreen"
          title="<?= e($activeModule['title']) ?>">
        </iframe>
      </div>

      <!-- Player Footer & Navigation Controls -->
      <div class="emodul-player-footer">
        <div class="emodul-desc-box">
          <p class="emodul-desc-text" id="playerDesc">
            <strong>💡 Ringkasan:</strong> <?= e($activeModule['description']) ?>
          </p>
          <div class="emodul-attribution" id="playerAttribution">
            <a href="<?= e($activeModule['file_url'] ?: $activeModule['embed_url']) ?>" target="_blank" rel="noopener"><?= e($activeModule['title']) ?></a> oleh <?= e($activeModule['author'] ?: 'Tim Vitbara') ?>
          </div>
        </div>

        <div class="emodul-nav-controls">
          <?php if ($prevModule): ?>
            <a href="emodul.php?modul=<?= (int)$prevModule['id'] ?>#modulPlayer" class="btn btn-outline" style="font-size: 0.85rem; padding: 0.6rem 1rem;" onclick="return selectModule(<?= (int)$prevModule['id'] ?>, event);">
              ❮ Materi Sebelumnya
            </a>
          <?php else: ?>
            <button class="btn btn-outline" style="font-size: 0.85rem; padding: 0.6rem 1rem; opacity: 0.4; cursor: not-allowed;" disabled>
              ❮ Materi Sebelumnya
            </button>
          <?php endif; ?>

          <?php if ($nextModule): ?>
            <a href="emodul.php?modul=<?= (int)$nextModule['id'] ?>#modulPlayer" class="btn btn-primary" style="font-size: 0.85rem; padding: 0.6rem 1rem;" onclick="return selectModule(<?= (int)$nextModule['id'] ?>, event);">
              Materi Selanjutnya ❯
            </a>
          <?php else: ?>
            <a href="eksplor-vr.php" class="btn btn-primary" style="font-size: 0.85rem; padding: 0.6rem 1rem;">
              Mulai Eksplor VR 🥽
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <!-- 2. Section Header: Daftar Modul -->
    <div class="section-header" style="margin-top: 2rem;">
      <div class="badge-tag">Katalog Pembelajaran</div>
      <h2 class="section-title">Pilihan Modul Interaktif</h2>
      <p class="section-subtitle">
        Pilih salah satu dari 5 materi e-modul di bawah ini untuk mempelajari karakteristik, jaring-jaring, rumus luas permukaan, dan volume bangun ruang.
      </p>
    </div>

    <!-- Category Filter Bar -->
    <div class="emodul-filter-bar">
      <button class="filter-pill-btn active" data-filter="all">Semua Materi (<?= count($modules) ?>)</button>
      <button class="filter-pill-btn" data-filter="Klasifikasi Bangun Ruang">Klasifikasi</button>
      <button class="filter-pill-btn" data-filter="Bangun Ruang Sisi Datar">Bangun Ruang Sisi Datar</button>
      <button class="filter-pill-btn" data-filter="Bangun Ruang Sisi Lengkung">Bangun Ruang Sisi Lengkung</button>
    </div>

    <!-- 3. Modules Catalog Grid -->
    <div class="emodul-catalog-grid" id="modulesCatalog">
      <?php if (!empty($modules)): ?>
        <?php foreach ($modules as $m): ?>
          <?php 
            $isActiveThis = ($activeModule && (int)$m['id'] === (int)$activeModule['id']);
            $cardIcon = $m['cover_image'] ?: 'assets/images/geometry/balok.svg';
          ?>
          <div class="emodul-card <?= $isActiveThis ? 'active-module' : '' ?>" data-category="<?= e($m['category']) ?>" id="card-modul-<?= (int)$m['id'] ?>">
            <div class="emodul-card-thumb">
              <span class="emodul-order-tag"><?= sprintf('%02d', (int)$m['order_pos']) ?></span>
              <img src="<?= e($cardIcon) ?>" alt="<?= e($m['title']) ?>">
            </div>

            <div class="emodul-card-body">
              <div class="emodul-card-meta">
                <span class="badge-accent" style="font-size: 0.72rem; padding: 0.15rem 0.55rem;"><?= e($m['category']) ?></span>
                <span style="font-size: 0.72rem; font-weight: 600; background: var(--color-bg-subtle); color: var(--color-text-muted); padding: 0.15rem 0.55rem; border-radius: var(--radius-full);"><?= e($m['target_grade']) ?></span>
              </div>

              <h3 class="emodul-card-title"><?= e($m['title']) ?></h3>
              <p class="emodul-card-desc"><?= e($m['description']) ?></p>

              <div style="font-size: 0.8rem; color: var(--color-text-muted); margin-bottom: 0.85rem;">
                ✍️ Disusun oleh: <strong style="color: var(--color-text-main);"><?= e($m['author'] ?: 'Tim Vitbara') ?></strong>
              </div>

              <div class="emodul-card-actions">
                <button type="button" class="btn <?= $isActiveThis ? 'btn-primary' : 'btn-outline' ?>" style="flex: 1; font-size: 0.85rem; padding: 0.65rem 0.75rem;" onclick="selectModule(<?= (int)$m['id'] ?>)">
                  <?= $isActiveThis ? '▶ Sedang Dibuka' : '📖 Buka Materi' ?>
                </button>
                <a href="<?= e($m['file_url'] ?: $m['embed_url']) ?>" target="_blank" rel="noopener" class="btn btn-outline" style="padding: 0.65rem 0.85rem; font-size: 0.85rem;" title="Buka di Canva">
                  ↗
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 3rem; background: var(--color-bg-secondary); border-radius: var(--radius-md);">
          <p style="color: var(--color-text-muted);">Modul pembelajaran sedang dipersiapkan oleh administrator.</p>
        </div>
      <?php endif; ?>
    </div>

    <!-- 4. Petunjuk & Keunggulan Belajar -->
    <div style="background: var(--color-bg-secondary); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2.5rem; margin-bottom: 3.5rem;">
      <div style="text-align: center; max-width: 680px; margin: 0 auto 2rem;">
        <h3 style="font-size: 1.35rem; margin-bottom: 0.5rem; color: var(--color-text-main);">Petunjuk Penggunaan E-Modul Interaktif</h3>
        <p style="color: var(--color-text-muted); font-size: 0.95rem;">Manfaatkan fitur interaktif presentasi Canva untuk pengalaman belajar geometri yang optimal.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
        <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
          <div style="font-size: 2rem; margin-bottom: 0.75rem;">👆</div>
          <h4 style="font-size: 1.05rem; margin-bottom: 0.4rem; color: var(--color-text-main);">Navigasi Slide Fleksibel</h4>
          <p style="font-size: 0.88rem; color: var(--color-text-muted); line-height: 1.55; margin: 0;">
            Gunakan tombol panah di bagian bawah slide, tombol keyboard (kiri/kanan), atau usap layar sentuh pada perangkat ponsel.
          </p>
        </div>

        <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
          <div style="font-size: 2rem; margin-bottom: 0.75rem;">⛶</div>
          <h4 style="font-size: 1.05rem; margin-bottom: 0.4rem; color: var(--color-text-main);">Mode Layar Penuh</h4>
          <p style="font-size: 0.88rem; color: var(--color-text-muted); line-height: 1.55; margin: 0;">
            Klik tombol <strong>Layar Penuh</strong> di pojok kanan atas player agar materi tampil maksimal tanpa gangguan.
          </p>
        </div>

        <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
          <div style="font-size: 2rem; margin-bottom: 0.75rem;">🏛️</div>
          <h4 style="font-size: 1.05rem; margin-bottom: 0.4rem; color: var(--color-text-main);">Integrasi Fort Willem I</h4>
          <p style="font-size: 0.88rem; color: var(--color-text-muted); line-height: 1.55; margin: 0;">
            Setelah memahami konsep bangun ruang, langsung buktikan penerapannya di Virtual Tour 360° Benteng.
          </p>
        </div>
      </div>
    </div>

    <!-- 5. Next Learning Roadmap CTA -->
    <div style="text-align: center; padding: 3rem 2rem; background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); border-radius: var(--radius-lg); color: #FFFFFF; position: relative; overflow: hidden;">
      <div style="position: absolute; top: -50px; right: -50px; width: 160px; height: 160px; border-radius: 50%; background: radial-gradient(circle, rgba(255,198,88,0.2) 0%, transparent 70%);"></div>
      
      <div class="badge-accent" style="margin-bottom: 1rem; display: inline-block;">Langkah Belajar Selanjutnya</div>
      <h3 style="font-size: 1.75rem; color: #FFFFFF; margin-bottom: 0.75rem;">Siap Menerapkan Pemahaman Geometrimu?</h3>
      <p style="color: #CBD5E1; max-width: 620px; margin: 0 auto 2rem; font-size: 0.95rem;">
        Jelajahi sudut-sudut lorong dan kubah Benteng Fort Willem I dalam ruang virtual 360° atau uji ketangkasanmu melalui Game Learning interaktif!
      </p>

      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="eksplor-vr.php" class="btn btn-primary">
          <span class="btn-icon">🥽</span> Eksplor VR 360°
        </a>
        <a href="game-learning.php" class="btn btn-outline" style="background: rgba(255,255,255,0.1); color: #FFFFFF; border-color: rgba(255,255,255,0.3);">
          <span class="btn-icon">🎮</span> Mainkan Game Learning
        </a>
        <a href="evaluasi.php" class="btn btn-outline" style="background: rgba(255,255,255,0.1); color: #FFFFFF; border-color: rgba(255,255,255,0.3);">
          <span class="btn-icon">📝</span> Evaluasi Pemahaman
        </a>
      </div>
    </div>

  </div>
</main>

<!-- Client-side Interactive Dynamic Switcher & Fullscreen Support -->
<script>
// Data modules in JSON
const modulesData = <?= json_encode($modules) ?>;

function selectModule(moduleId, event) {
  if (event) event.preventDefault();

  const found = modulesData.find(m => parseInt(m.id) === parseInt(moduleId) || parseInt(m.order_pos) === parseInt(moduleId));
  if (!found) return true;

  // Update URL without full refresh
  const newUrl = window.location.pathname + '?modul=' + found.id;
  window.history.pushState({ path: newUrl }, '', newUrl);

  // Update Player Header
  const playerTitle = document.getElementById('playerTitle');
  if (playerTitle) playerTitle.textContent = found.title;

  const btnOpenCanva = document.getElementById('btnOpenCanva');
  if (btnOpenCanva) btnOpenCanva.href = found.file_url || found.embed_url;

  // Update Canva Iframe Embed
  const canvaIframe = document.getElementById('canvaIframe');
  if (canvaIframe) {
    canvaIframe.src = found.embed_url || found.file_url;
    canvaIframe.title = found.title;
  }

  // Update Description & Attribution
  const playerDesc = document.getElementById('playerDesc');
  if (playerDesc) {
    playerDesc.innerHTML = '<strong>💡 Ringkasan:</strong> ' + escapeHtml(found.description);
  }

  const playerAttribution = document.getElementById('playerAttribution');
  if (playerAttribution) {
    playerAttribution.innerHTML = '<a href="' + (found.file_url || found.embed_url) + '" target="_blank" rel="noopener">' + escapeHtml(found.title) + '</a> oleh ' + escapeHtml(found.author || 'Tim Vitbara');
  }

  // Update active state on cards
  document.querySelectorAll('.emodul-card').forEach(card => {
    card.classList.remove('active-module');
    const btn = card.querySelector('.btn-primary');
    if (btn) {
      btn.classList.remove('btn-primary');
      btn.classList.add('btn-outline');
      btn.textContent = '📖 Buka Materi';
    }
  });

  const activeCard = document.getElementById('card-modul-' + found.id);
  if (activeCard) {
    activeCard.classList.add('active-module');
    const btn = activeCard.querySelector('.btn-outline');
    if (btn) {
      btn.classList.remove('btn-outline');
      btn.classList.add('btn-primary');
      btn.textContent = '▶ Sedang Dibuka';
    }
  }

  // Smooth scroll up to player
  const player = document.getElementById('modulPlayer');
  if (player) {
    player.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  return false;
}

function escapeHtml(text) {
  if (!text) return '';
  const div = document.createElement('div');
  div.textContent = text;
  return div.innerHTML;
}

// Fullscreen API toggle
document.addEventListener('DOMContentLoaded', () => {
  const btnFullscreen = document.getElementById('btnFullscreen');
  const canvaContainer = document.getElementById('canvaContainer');

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

  // Filter functionality
  const filterBtns = document.querySelectorAll('.filter-pill-btn');
  const cards = document.querySelectorAll('.emodul-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterVal = btn.getAttribute('data-filter');

      cards.forEach(card => {
        const cat = card.getAttribute('data-category');
        if (filterVal === 'all' || cat === filterVal) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
