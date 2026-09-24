@echo off
title VITBARA - Akses Publik Online (Cloudflare Tunnel)
color 0B
echo =====================================================================
echo          VITBARA (Virtual Tour Bangun Ruang - UNIMUS)
echo          Peluncur Akses Publik Online via Cloudflare Tunnel
echo =====================================================================
echo.
echo [1/2] Memastikan Server Lokal PHP aktif di port 8000...
start /min "VITBARA Local PHP Server" cmd /c "set PHP_CLI_SERVER_WORKERS=8 && php -S 0.0.0.0:8000"
timeout /t 2 /nobreak >nul

echo [2/2] Menghubungkan ke Jaringan Cloudflare (Tunggu beberapa detik)...
echo.
echo =====================================================================
echo  Tautan HTTPS publik Anda akan muncul di bawah ini (trycloudflare.com).
echo  Bagikan tautan tersebut ke siswa / guru / dosen / penguji!
echo.
echo  PENTING: Jangan tutup jendela ini selama website sedang digunakan!
echo =====================================================================
echo.

cloudflared.exe tunnel --url http://localhost:8000

pause
