# Mohammad Sayifullah 4523210066
# 📰 Aplikasi Berita (News App)

Aplikasi web sederhana untuk mengelola dan menampilkan berita yang dibuat menggunakan Laravel 12. Aplikasi ini dikembangkan untuk tujuan pembelajaran mahasiswa dalam memahami konsep MVC (Model-View-Controller), ORM (Object-Relational Mapping), dan routing di Laravel.

## 📥 Instalasi

### 1. Clone atau Download Repository

#### Clone repository (jika menggunakan git)
git clone <repository-url>

<img width="741" height="236" alt="Screenshot 2025-11-06 090655" src="https://github.com/user-attachments/assets/24213bde-6233-4d4c-b080-bc18cddebf84" />

cd news-app
Masuk ke file direktori news-app

### 2. Install Dependencies PHP

composer install

<img width="1476" height="449" alt="Screenshot 2025-11-06 091325" src="https://github.com/user-attachments/assets/ff80f4f5-3711-4388-b70a-38335c37031c" />

### 3. Install Dependencies JavaScript

npm install

<img width="635" height="167" alt="Screenshot 2025-11-06 091407" src="https://github.com/user-attachments/assets/10b08af0-d9f1-4524-836d-b89fdaa7d38f" />

### 4. Konfigurasi Environment

#### Copy file .env.example menjadi .env
copy .env.example .env

<img width="403" height="116" alt="image" src="https://github.com/user-attachments/assets/a93abb4d-ccbf-4381-a438-941f1cdc94c2" />

#### Generate application key
php artisan key:generate

<img width="785" height="77" alt="Screenshot 2025-11-06 091639" src="https://github.com/user-attachments/assets/0ae76022-e7ee-41dd-8517-a001322898af" />

### 5. Konfigurasi Database

Edit file `.env` dan sesuaikan dengan konfigurasi database Anda:

<img width="265" height="174" alt="image" src="https://github.com/user-attachments/assets/dd4e2d41-5862-4df9-8191-d626346f73b4" />

### 6. Jalankan Migration & Seeder

#### Membuat tabel-tabel di database
php artisan migrate

<img width="1493" height="423" alt="Screenshot 2025-11-06 092241" src="https://github.com/user-attachments/assets/df68d839-6340-47b2-905a-0d216fef6617" />

#### (Optional) Generate data dummy untuk testing
php artisan db:seed

<img width="1450" height="420" alt="Screenshot 2025-11-07 094936" src="https://github.com/user-attachments/assets/6a83f264-5144-4868-932c-426a3400cc64" />

### 7. Build Assets Frontend

#### Untuk development (dengan hot reload)
npm run dev

#### Untuk production
npm run build

<img width="737" height="238" alt="Screenshot 2025-11-07 102455" src="https://github.com/user-attachments/assets/1792a9e2-ce8c-4182-8f0a-560531e0c1fe" />

### 8. Jalankan Aplikasi

#### Menggunakan Laravel built-in server
php artisan serve
Untuk menjalankan web server

### 9. Menginstall Filament
composer require filament/filament: "^3.3" -W

<img width="1284" height="590" alt="Screenshot 2025-11-12 133452" src="https://github.com/user-attachments/assets/4db25111-ec2a-4f69-a0ab-c3a8828d4f20" />

php artisan filament:install --panels

<img width="1090" height="588" alt="Screenshot 2025-11-12 133512" src="https://github.com/user-attachments/assets/6ccd828f-8e5f-4ce7-921b-f6490f4c207e" />

### 10. Membuat Filament user
php artisan make:filament-user

<img width="709" height="225" alt="Screenshot 2025-11-12 133526" src="https://github.com/user-attachments/assets/e9498fc6-5d14-448f-9224-2803df240569" />

### 11. Membuat Resource Wartawan, News, Komentar
php artisan make:filament-resource Wartawan --generate

<img width="1301" height="81" alt="Screenshot 2025-11-12 133540" src="https://github.com/user-attachments/assets/14ad7098-5a0b-4d5b-ab9d-18584d2a2b89" />

php artisan make:filament-resource News --generate

<img width="1305" height="81" alt="Screenshot 2025-11-12 133616" src="https://github.com/user-attachments/assets/7ab58387-f53e-4dc7-ba4d-16e7fe7c82c7" />

php artisan make:filament-resource Komentar --generate

<img width="1408" height="582" alt="image" src="https://github.com/user-attachments/assets/ccbd0dd4-c2da-47de-a557-ebb3fa62444d" />

### Menambahkan Detail Page Berita

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/356bf74d-52c3-4232-a32c-e7ec831f4ade" />

### Hasil Halaman Daftar Berita

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/16572580-ad5e-485b-8ccc-0dd47648f3e4" />

### Hasil Halaman Detail Berita

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/f49d22a7-c123-4363-ad4f-49c7115f5f76" />

