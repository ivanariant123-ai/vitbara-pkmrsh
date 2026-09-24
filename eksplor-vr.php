<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman Eksplor VR 360° (Routing Navigasi)
 */

$pageTitle = 'Eksplor VR 360° Benteng Fort Willem I';
$pageDesc = 'Tur virtual 360 derajat interaktif di Benteng Fort Willem I untuk menemukan titik hotspot geometri bangun ruang.';
$activeMenu = 'eksplor-vr';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>Eksplor VR</span>
      </nav>
      <h1 class="page-hero-title">Eksplor Virtual Tour 360°</h1>
      <p class="page-hero-desc">
        Jelajahi setiap sudut arsitektur Benteng Fort Willem I secara virtual dan temukan rahasia geometri bangun ruang di balik dinding bersejarahnya.
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_vr.png" alt="Maskot Eksplor VR 360°" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">Virtual 360° 🥽</div>
      </div>
    </div>
  </div>
</div>

<main class="section">
  <div class="container">
    <!-- Virtual Tour Player Frame Container -->
    <div style="background: var(--color-dark-navy); border-radius: var(--radius-lg); border: 2px solid var(--color-accent-gold); overflow: hidden; box-shadow: var(--shadow-dark); margin-bottom: 1.5rem;">
      <!-- VR Screen Header Bar -->
      <div style="padding: 0.9rem 1.5rem; background: #1E293B; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: space-between; color: #F8FAFC; flex-wrap: wrap; gap: 0.75rem;">
        <div style="display: flex; align-items: center; gap: 0.75rem;">
          <span style="display: inline-block; width: 10px; height: 10px; background: #10B981; border-radius: 50%; box-shadow: 0 0 8px #10B981;"></span>
          <strong style="font-size: 0.95rem;">Live Virtual Tour: Benteng Fort Willem I (Panoee 360°)</strong>
        </div>
        <div style="display: flex; align-items: center; gap: 0.75rem;">
          <span style="font-size: 0.8rem; background: rgba(255,198,88,0.18); color: var(--color-accent-gold); padding: 0.3rem 0.75rem; border-radius: var(--radius-full); font-weight: 700; border: 1px solid rgba(255,198,88,0.4);">
            🥽 Gyroscope &amp; VR Ready
          </span>
        </div>
      </div>

      <!-- Panoee iFrame Responsive Container -->
      <div style="position: relative; width: 100%; min-height: 400px; height: 600px; background: #0B132B;">
        <iframe id="tour-embedded" title="Benteng Fort Willem I" src="https://tour.panoee.net/iframe/vitbarapkmrshunimus?embedFullscreen=1&amp;embedVr=1&amp;embedGyro=1" frameborder="0" width="100%" height="100%" scrolling="no" allow="autoplay; accelerometer; gyroscope; fullscreen; xr-spatial-tracking" loading="eager" allowfullscreen style="width: 100%; height: 100%; border: none; display: block;"></iframe>
      </div>

      <!-- VR Bottom Action Bar -->
      <div style="padding: 1rem 1.5rem; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        <div style="display: flex; align-items: center; gap: 0.6rem; color: #CBD5E1; font-size: 0.875rem;">
          <span>💡 <em>Tips: Geser layar/mouse untuk memutar 360°, sentuh icon titik hotspot untuk membedah geometri ruang, atau klik tombol fullscreen di dalam tour.</em></span>
        </div>
        <div>
          <a href="game-learning.php" class="btn btn-primary" style="padding: 0.5rem 1.25rem; font-size: 0.875rem;">
            🕹 Uji Pemahaman di Game Learning
          </a>
        </div>
      </div>
    </div>

    <!-- Script Sensor Gerak (Gyroscope & Device Motion) -->
    <script>(function(){var i="tour-embedded",o="https://tour.panoee.net",r=false;function s(v,a){if(!v)return null;var x={};a.forEach(function(k){x[k]=typeof v[k]==="number"?v[k]:null});return x}function ready(f){try{var h=f.contentWindow.location.href;if(h&&h!=="about:blank")r=true}catch(e){r=true}}function send(payload){var el=document.getElementById(i);if(!el||!el.contentWindow)return;try{el.contentWindow.postMessage(payload,o)}catch(t){}}var f=document.getElementById(i);if(f){f.addEventListener("load",function(){r=true});ready(f)}window.addEventListener("message",function(ev){if(!r||!ev.data||ev.data.type!=="devicemotion")return;if(ev.source!==window.parent)return;send(ev.data)},false);window.addEventListener("devicemotion",function(e){if(!r)return;send({type:"devicemotion",deviceMotionEvent:{acceleration:s(e.acceleration,["x","y","z"]),accelerationIncludingGravity:s(e.accelerationIncludingGravity,["x","y","z"]),rotationRate:s(e.rotationRate,["alpha","beta","gamma"]),interval:typeof e.interval==="number"?e.interval:0,timeStamp:e.timeStamp}})},{passive:true})})();</script>
  </div>
</main>

<style>
@keyframes pulse {
  0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 198, 88, 0.7); }
  70% { transform: scale(1.1); box-shadow: 0 0 0 15px rgba(255, 198, 88, 0); }
  100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 198, 88, 0); }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
