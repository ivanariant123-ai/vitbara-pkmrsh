@echo off
title VITBARA Local Server
color 0A
echo =====================================================================
echo   VITBARA (Virtual Tour Bangun Ruang - UNIMUS)
echo   Server Lokal Berkecepatan Tinggi (LAN + Localhost)
echo =====================================================================
echo.
echo [1] Akses dari Laptop ini:
echo     http://localhost:8000
echo.
echo [2] Akses Super Cepat dari HP Siswa (WIFI / Hotspot yang sama):
for /f "tokens=4" %%a in ('route print^|findstr 0.0.0.0.*0.0.0.0^|findstr /v "Default"') do (
    set LOCAL_IP=%%a
)
echo     http://%LOCAL_IP%:8000
echo.
echo =====================================================================
echo Tekan CTRL + C di jendela ini untuk menghentikan server.
echo =====================================================================
echo.
set PHP_CLI_SERVER_WORKERS=8
start http://localhost:8000
php -S 0.0.0.0:8000
pause
