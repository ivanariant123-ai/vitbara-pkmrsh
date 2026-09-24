<?php
/**
 * VITBARA (Virtual Tour Bangun Ruang)
 * Halaman Kontak & Saran Pengguna (Routing Navigasi)
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Hubungi Kami';
$pageDesc = 'Kirim pertanyaan, kritik, saran, atau kolaborasi pembelajaran dengan pengembang VITBARA.';
$activeMenu = 'contact';

$formSuccess = false;

// Proses Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRF($token)) {
        setFlash('error', 'Validasi sesi formulir kedaluwarsa. Silakan muat ulang halaman.');
    } else {
        $senderName = trim($_POST['sender_name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $message = trim($_POST['message'] ?? '');

        if (empty($senderName) || empty($email) || empty($message)) {
            setFlash('error', 'Harap lengkapi semua kolom yang bertanda bintang (*).');
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            setFlash('error', 'Alamat email tidak valid. Harap periksa kembali.');
        } else {
            try {
                $pdo = getDB();
                $stmt = $pdo->prepare("INSERT INTO contacts (sender_name, email, subject, message) VALUES (?, ?, ?, ?)");
                $stmt->execute([$senderName, $email, $subject ?: 'Pertanyaan Umum', $message]);
                setFlash('success', 'Pesan berhasil terkirim! Terima kasih telah menghubungi tim VITBARA.');
                $formSuccess = true;
            } catch (Exception $e) {
                setFlash('error', 'Gagal mengirim pesan. Silakan coba kembali nanti.');
            }
        }
    }
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb-nav">
        <a href="index.php">Home</a> &rsaquo; <span>Contact Us</span>
      </nav>
      <h1 class="page-hero-title">Hubungi Kami</h1>
      <p class="page-hero-desc">
        Kami siap mendengar tanggapan, pertanyaan penelitian, dan saran inovasi untuk pengembangan VITBARA ke depan.
      </p>
    </div>
    <div class="page-hero-mascot">
      <div class="page-hero-mascot-wrapper">
        <div class="mascot-halo-glow"></div>
        <img src="assets/images/heritage/mascots/mascot_contact.png" alt="Maskot Hubungi Kami" class="page-hero-mascot-img">
        <div class="mascot-speech-bubble">Hubungi Kami 💬</div>
      </div>
    </div>
  </div>
</div>

<main class="section" id="contact">
  <div class="container">
    <?= renderFlash() ?>

    <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 3.5rem; align-items: start;">
      <!-- Contact Info Cards -->
      <div>
        <div class="badge-tag">Informasi Kontak</div>
        <h2 style="font-size: 1.85rem; margin-bottom: 1.25rem; font-weight: 800;">Mari Berdiskusi &amp; Berkolaborasi</h2>
        <p style="color: var(--color-text-muted); margin-bottom: 2rem; line-height: 1.65;">
          Pengembangan media pembelajaran etnomatematika ini terbuka untuk kolaborasi sekolah, guru matematika, dan praktisi pendidikan.
        </p>

        <div style="display: flex; flex-direction: column; gap: 1.25rem;">
          <div style="display: flex; gap: 1rem; background: var(--color-bg-secondary); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="font-size: 1.6rem; color: var(--color-accent-gold);">🏛</div>
            <div>
              <strong style="display: block; font-size: 1rem; margin-bottom: 0.2rem;">Universitas</strong>
              <div style="color: var(--color-text-muted); font-size: 0.9rem;">
                Universitas Muhammadiyah Semarang
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 1rem; background: var(--color-bg-secondary); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="font-size: 1.6rem; color: var(--color-accent-gold);">📍</div>
            <div>
              <strong style="display: block; font-size: 1rem; margin-bottom: 0.2rem;">Lokasi Kampus</strong>
              <div style="color: var(--color-text-muted); font-size: 0.9rem;">
                Jl. Kedungmundu Raya No. 18, Tembalang, Kota Semarang, Jawa Tengah 50273
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 1rem; background: var(--color-bg-secondary); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="font-size: 1.6rem; color: var(--color-accent-gold);">✉️</div>
            <div>
              <strong style="display: block; font-size: 1rem; margin-bottom: 0.2rem;">Email Resmi</strong>
              <div style="color: var(--color-text-muted); font-size: 0.9rem;">
                <?= e(ltrim(getSetting('contact_email', 'vitbarapkmrsh@gmail.com'), '@')) ?>
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 1rem; background: var(--color-bg-secondary); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="font-size: 1.6rem; color: var(--color-accent-gold);">📞</div>
            <div>
              <strong style="display: block; font-size: 1rem; margin-bottom: 0.2rem;">Kontak / WhatsApp</strong>
              <div style="color: var(--color-text-muted); font-size: 0.9rem;">
                <?= e(getSetting('contact_phone', '+62 896-7826-1594')) ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div style="background: var(--color-bg-primary); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-md);">
        <h3 style="font-size: 1.35rem; margin-bottom: 1.5rem; font-weight: 700;">Formulir Pesan &amp; Pertanyaan</h3>
        
        <form method="POST" action="contact.php" style="display: flex; flex-direction: column; gap: 1.25rem;">
          <?= renderCSRFField() ?>

          <div>
            <label for="sender_name" style="display: block; font-size: 0.885rem; font-weight: 600; margin-bottom: 0.4rem;">Nama Lengkap *</label>
            <input type="text" id="sender_name" name="sender_name" required placeholder="Contoh: Budi Santoso" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: inherit; font-size: 0.95rem;">
          </div>

          <div>
            <label for="email" style="display: block; font-size: 0.885rem; font-weight: 600; margin-bottom: 0.4rem;">Alamat Email *</label>
            <input type="email" id="email" name="email" required placeholder="nama@email.com" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: inherit; font-size: 0.95rem;">
          </div>

          <div>
            <label for="subject" style="display: block; font-size: 0.885rem; font-weight: 600; margin-bottom: 0.4rem;">Topik / Subjek</label>
            <input type="text" id="subject" name="subject" placeholder="Pertanyaan E-Modul / Saran Virtual Tour" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: inherit; font-size: 0.95rem;">
          </div>

          <div>
            <label for="message" style="display: block; font-size: 0.885rem; font-weight: 600; margin-bottom: 0.4rem;">Isi Pesan *</label>
            <textarea id="message" name="message" rows="5" required placeholder="Tuliskan pertanyaan, saran, atau masukan Anda di sini..." style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: inherit; font-size: 0.95rem; resize: vertical;"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="margin-top: 0.5rem; justify-content: center;">
            <span class="btn-icon">📨</span> Kirim Pesan Sekarang
          </button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
