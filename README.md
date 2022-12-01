## Auth App

Aplikasi laravel dengan fitur : register, login, forgot password, email verified, dashboard dan profile editor lengkap dengan error message. </br>
Aplikasi ini dibuat dengan Laravel 8, mariaDB

Testing email menggunakan <a href="https://mailtrap.io/">mailtrap</a>
dengan akun : arifrusman183@gmail.com
pass : 27April2ooo

## Instalasi

- Clone / Download aplikasi dari <a href="https://github.com/Arif2810/auth-app">github</a>
- copy file .env.example ke .env
- Jalankan perintah "composer install" pada terminal
- Jalankan artisan command "php artisan key:generate" pada terminal
- Konfigurasi file .env :
  * Konfigurasi database: </br>
  DB_CONNECTION=mysql </br>
  DB_HOST=127.0.0.1 </br>
  DB_PORT=3306 </br>
  DB_DATABASE=auth_app </br>
  DB_USERNAME=root </br>
  DB_PASSWORD= 

  * Konfigurasi <a href="https://mailtrap.io/">mailtrap</a> : </br>
  MAIL_MAILER=smtp </br>
  MAIL_HOST=smtp.mailtrap.io </br>
  MAIL_PORT=2525 </br>
  MAIL_USERNAME=cd3d91553c5f42 </br>
  MAIL_PASSWORD=057b19fe780720 </br>
  MAIL_ENCRYPTION=tls </br>
  MAIL_FROM_ADDRESS="arifrusman183@gmail.com" </br>
  MAIL_FROM_NAME="${APP_NAME}" </br>

</br>
- Membuat Database:
  Create database dengan nama auth_app </br>
- Jalankan artisan command "php artisan migrate" </br>
- Memasukkan seeder dengan artisan command "php artisan db:seed" </br>
- jalankan artisan command "php artisan serve" aplikasi siap digunakan </br>



