# VITBARA (Virtual Tour Bangun Ruang)

**Tema Desain**: *Modern Heritage Learning Experience*  
**Pengembang**: Program Studi Pendidikan Matematika, Universitas Muhammadiyah Semarang (UNIMUS)  
**Konteks Pembelajaran**: Geometri Bangun Ruang SMP Kelas 9 &times; Cagar Budaya Benteng Fort Willem I (Ambarawa)

---

## 🌟 Fitur & Halaman Utama

### 1. Landing Page (Home — 7 Slide Interaktif)
- **Slide 1 — Selamat Datang di VITBARA**: Hero banner atmosferik Benteng Fort Willem I dengan canvas 3D geometri interaktif (`#FFC658`), subjudul, deskripsi, dan tombol aksi "Mulai Jelajah!".
- **Slide 2 — Tantangan Belajar Geometri**: 3 kartu permasalahan belajar geometri 3D siswa SMP dan banner transisi solusi etnomatematika.
- **Slide 3 — Mengapa Benteng Fort Willem I?**: 3 pilar cagar budaya & galeri museum digital perbandingan geometri arsitektur (Koridor &rarr; Balok, Pintu Lengkung &rarr; Tabung, Denah &rarr; Simetri, Pilar &rarr; Dimensi & Luas Permukaan).
- **Slide 4 — Apa Itu VITBARA?**: 3 pilar nilai utama (Visualisasi, Eksplorasi Budaya, Melatih Spasial).
- **Slide 5 — Alur Belajar di VITBARA**: Roadmap 5 tahapan pembelajaran (Kenali Benteng &rarr; Pelajari Konsep &rarr; Eksplorasi VR &rarr; Main Game &rarr; Evaluasi).
- **Slide 6 — Profil Pengembang**: Kartu profil tim pengembang & dosen pembimbing Pendidikan Matematika UNIMUS.
- **Slide 7 — FAQ / Bantuan Pengguna**: Model Accordion FAQ interaktif dengan 6 pertanyaan dan jawaban umum + tombol *More FAQ*.

### 2. Header / Navbar & Footer
- **Sticky Responsive Header**: Logo UNIMUS & Logo VITBARA, indikator menu aktif warna `#FFC658`, dan drawer navigasi mobile hamburger.
- **8 Menu Navigasi**: Home | Sejarah | E-Modul | Eksplor VR | Game Learning | Evaluasi | About Us | Contact Us.
- **Dark Navy Footer**: Deskripsi institusi, tautan cepat, informasi kontak kampus, media sosial, dan copyright.

### 3. Dashboard Admin CRUD Lengkap (`/admin/`)
- **Keamanan**: Proteksi CSRF, Password Hashing (`bcrypt`), Prepared Statements (PDO Anti-SQL Injection), Sanitasi XSS (`htmlspecialchars`), dan Session Guard.
- **12 Menu Sidebar**:
  1. 📊 **Dashboard**: Metrik statistik modul, scene VR, game, FAQ, kontak masuk, dan info server.
  2. 🏛 **Sejarah**: CRUD artikel sejarah benteng dan cagar budaya.
  3. 📚 **E-Modul**: CRUD modul geometri, target kelas, deskripsi, dan upload file PDF materi.
  4. 🥽 **Eksplor VR**: CRUD scene panorama 360° dan hotspot titik bangun ruang.
  5. 🎮 **Game Learning**: CRUD permainan edukatif spasial dan kuis benteng.
  6. 📝 **Evaluasi**: CRUD paket soal evaluasi, durasi, KKM, dan link formulir.
  7. ❓ **FAQ**: CRUD daftar tanya jawab, kategori, urutan tampilan, dan status aktif.
  8. 👥 **About Us / Tim**: CRUD profil tim pengembang, dosen pembimbing, dan foto.
  9. ✉️ **Contact / Pesan**: Manajemen kotak masuk pesan pengunjung, detail, dan status baca.
  10. 📁 **Media / File**: Upload file manager, preview, salin URL, alt-text metadata, dan hapus berkas.
  11. 👤 **Admin**: Manajemen akun pengguna pengelola dan fitur ganti kata sandi.
  12. ⚙️ **Settings**: Pengaturan metadata website, teks hero, dan kontak kampus.

---

## 🚀 Panduan Menjalankan & Deployment

### A. Kredensial Login Administrator Default
- **URL Login**: `http://domain-anda.com/admin/login.php` (atau `http://localhost:8080/admin/login.php`)
- **Username**: `admin`
- **Password**: `admin123`

### B. Deployment ke Shared Hosting (cPanel / Niagahoster / Hostinger)
1. Unggah seluruh isi folder `vitbara` ke folder `public_html` di hosting Anda.
2. Buat database MySQL baru melalui cPanel MySQL Database Wizard (misal: `vitbara_db`).
3. Buka `config/config.php` dan sesuaikan konfigurasi database:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'nama_database_anda');
   define('DB_USER', 'username_db_anda');
   define('DB_PASS', 'password_db_anda');
   ```
4. Buka URL installer di browser Anda: `http://domain-anda.com/database/install.php` untuk mengimpor tabel dan data awal secara otomatis dengan 1-klik, atau impor file `database/schema.sql` via phpMyAdmin.

---

## 🎨 Identitas Visual
- **Background**: Putih (`#FFFFFF`) & Off-White (`#FAF8F5`)
- **Teks**: Dark Navy (`#0F172A`)
- **Aksen Utama**: Warm Amber / Gold (`#FFC658`)
- **Tipografi**: Poppins (Heading) & Inter (Body)
