<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman Game Learning Geometri
 */

$pageTitle = 'Game Learning Geometri';
$pageDesc = 'Pilih game edukasi geometri interaktif untuk mengasah kemampuan visualisasi spasial dan jaring-jaring bangun ruang.';
$activeMenu = 'game';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>Game Learning</span>
      </nav>
      <h1 class="page-hero-title">Game Learning Geometri</h1>
      <p class="page-hero-desc">
        Tantang dirimu mengumpulkan skor tertinggi dan raih lencana ahli geometri Benteng!
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_game.png" alt="Maskot Game Learning" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">Ayo Bermain! 🎮</div>
      </div>
    </div>
  </div>
</div>

<main class="section">
  <div class="container">
    <div class="section-header">
      <div class="badge-tag">Gamifikasi Edukasi</div>
      <h2 class="section-title">Pilih Mode Permainan</h2>
      <p class="section-subtitle">
        Pilih permainan interaktif untuk melatih pemahaman konsep jaring-jaring dan bangun ruang 3 dimensi.
      </p>
    </div>

    <!-- Games Grid (Pilihan Menyamping) -->
    <div class="games-selection-grid">
      
      <!-- Game 1: GEO CRAFT -->
      <div class="game-card">
        <div class="game-card-icon-box">
          🧩
        </div>
        <h3 class="game-card-title">GEO CRAFT: Pilih, Susun, Temukan!</h3>
        <p class="game-card-desc">
          Pilih bentuk bangun datar yang tepat, susun pola jaring-jaring pada kisi koordinat, lalu saksikan simulasi transformasi lipatan 3 dimensi dan selesaikan kuis tantangannya.
        </p>
        <div class="game-card-action">
          <a href="game/index.html" class="btn btn-primary btn-play">
            ▶ Mainkan Game
          </a>
        </div>
      </div>

      <!-- Game 2: Slot Game Berikutnya (Teaser Misteri / Segera Hadir) -->
      <div class="game-card game-card-coming-soon">
        <div class="game-card-icon-box game-card-icon-mystery">
          ✨
        </div>
        <h3 class="game-card-title">Nantikan Game Seru Lainnya!</h3>
        <p class="game-card-desc">
          Misi dan tantangan geometri interaktif baru sedang dalam tahap pengembangan. Asah kemampuanmu di GEO CRAFT terlebih dahulu dan nantikan kejutan petualangan berikutnya!
        </p>
        <div class="game-card-action">
          <button type="button" class="btn btn-disabled" disabled>
            🔒 Segera Hadir
          </button>
        </div>
      </div>

    </div>
  </div>
</main>

<style>
/* --- Styling Khusus Pemilihan Game Learning --- */
.games-selection-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 2rem;
  max-width: 900px;
  margin: 0 auto 1rem auto;
}

.game-card {
  background: var(--color-bg-primary);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: 2.25rem 2rem;
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  position: relative;
}

.game-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 32px rgba(15, 23, 42, 0.1);
  border-color: var(--color-accent-gold);
}

.game-card-icon-box {
  width: 58px;
  height: 58px;
  background: var(--color-accent-gold-light);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.85rem;
  margin-bottom: 1.25rem;
  border: 1px solid rgba(255, 198, 88, 0.4);
}

.game-card-title {
  font-size: 1.25rem;
  font-weight: 700;
  margin-bottom: 0.75rem;
  color: var(--color-text-main);
  line-height: 1.35;
}

.game-card-desc {
  color: var(--color-text-muted);
  font-size: 0.925rem;
  line-height: 1.65;
  flex: 1;
  margin-bottom: 1.75rem;
}

.game-card-action {
  margin-top: auto;
}

.btn-play {
  width: 100%;
  justify-content: center;
  padding: 0.85rem 1.5rem;
  font-size: 1rem;
  font-weight: 700;
  border-radius: var(--radius-md);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  box-shadow: 0 4px 14px rgba(255, 198, 88, 0.35);
}

.btn-disabled {
  width: 100%;
  justify-content: center;
  padding: 0.85rem 1.5rem;
  font-size: 0.95rem;
  font-weight: 600;
  border-radius: var(--radius-md);
  background: #E2E8F0;
  color: #64748B;
  border: 1px solid #CBD5E1;
  cursor: not-allowed;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
}

.game-card-coming-soon {
  background: linear-gradient(145deg, #FFFFFF 0%, #F8FAFC 100%);
  border: 2px dashed #CBD5E1;
  position: relative;
  overflow: hidden;
}

.game-card-coming-soon:hover {
  transform: translateY(-4px);
  border-color: var(--color-primary, #6366F1);
  box-shadow: 0 12px 28px rgba(15, 23, 42, 0.06);
}

.game-card-icon-mystery {
  background: linear-gradient(135deg, #EEF2FF 0%, #E0E7FF 100%);
  border: 1px solid #C7D2FE;
  animation: pulse-soft 2.5s infinite ease-in-out;
}

@keyframes pulse-soft {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.06); }
}

@media (max-width: 640px) {
  .games-selection-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
