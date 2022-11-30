## Auth App

Aplikasi laravel dengan fitur : register, login, forgot password, email verified, dashboard dan profile editor lengkap dengan error message.
Aplikasi ini dibuat dengan Laravel 8, mariaDB

Testing email menggunakan <a href="https://mailtrap.io/">mailtrap</a>
dengan akun : arifrusman183@gmail.com
pass : 27April2ooo

## Instalasi

- Clone / Download aplikasi dari <a href="https://github.com/Arif2810/auth-app">github</a>
- copy file .env.example ke .env
- Jalankan perintah "composer install" pada terminal
- Jalankan perintah "php artisan key:generate" pada terminal
- Konfigurasi file .env :
  * Konfigurasi database:
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=auth_app
  DB_USERNAME=root
  DB_PASSWORD=

  * Konfigurasi <a href="https://mailtrap.io/">mailtrap</a> :
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=cd3d91553c5f42
  MAIL_PASSWORD=057b19fe780720
  MAIL_ENCRYPTION=tls
  MAIL_FROM_ADDRESS="arifrusman183@gmail.com"
  MAIL_FROM_NAME="${APP_NAME}"

- Membuat Database:
  Create database dengan nama auth_app, kemudian import tabel dari auth_app.sql (disertakan dalam aplikasi).

jalankan "php artisan serve" aplikasi siap digunakan



