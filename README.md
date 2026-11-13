AUTHOR : CANDRA ANGGRIANA
# Laravel Project - Pemrograman Web 2

Halo! Ini adalah proyek belajar Laravel yang saya buat untuk mata kuliah Pemrograman Web 2. Proyek ini sederhana sih, cuma sistem manajemen produk, tapi lumayan buat latihan karena di sini saya coba implementasi beberapa hal sekaligus: form modal pop-up, validasi input, Eloquent ORM, dan format Rupiah di tabel.

# Fitur
Beberapa fitur yang sudah jalan di proyek ini:
- Modal Pop-up Form — Tambah produk baru tanpa reload halaman, pakai Tailwind CSS biar tampilannya nggak terlalu polos.
- Validasi Input — Field wajib diisi, harga dan stok harus angka. Kalau salah isi, bakal muncul pesan error.
- Eloquent ORM & Migrations — Datanya disimpan di database lewat Eloquent, strukturnya dibuat pakai migration.
- Format Rupiah — Harga di tabel otomatis jadi format Rp (contoh: Rp 150.000), nggak perlu ngetik manual.

# Struktur File Penting

Kalau mau ngoprek, ini file-file yang paling sering saya sentuh:
- Controller: app/Http/Controllers/ProductController.php
- Model: app/Models/Product.php
- Migration: database/migrations/..._create_products_table.php
- Routes: routes/web.php
- View: resources/views/products/index.blade.php

# Cara Menjalankan

Kalau mau coba di lokal, ikuti langkah berikut:
1. Clone repo-nya:
   bash
   git clone (https://github.com/Candra143/Laravel-Pemrograman-Web-2)
   cd Laravel_Project_Ilham
   

2. Install dependency:
   bash
   composer install
   npm install
   

3. Copy file .env dan generate key:
   bash
   cp .env.example .env
   php artisan key:generate
   

4. Buat database baru (misalnya namanya laravel_product), lalu sesuaikan konfigurasi di .env:
   env
   DB_DATABASE=laravel_product
   DB_USERNAME=root
   DB_PASSWORD=
   
   (sesuaikan dengan setting MySQL di komputer kamu)

5. Jalankan migrasi:
   bash
   php artisan migrate
   

6. Build asset frontend:
   bash
   npm run dev
   
   Biarkan terminal ini tetap jalan selama development.

7. Jalankan server Laravel (buka terminal baru):
   bash
   php artisan serve
   
8. Buka http://127.0.0.1:8000/products di browser. Selesai!

# Catatan
- Kalau Tailwind-nya nggak muncul, cek lagi npm run dev masih jalan atau nggak.
- Kalau nemu error pas migrate, biasanya karena nama database atau password di .env belum disesuaikan.
- Proyek ini dibuat untuk keperluan belajar, jadi masih banyak yang bisa dikembangkan (edit/hapus produk, pagination, search, dll). Silakan kalau mau dijadiin referensi.
