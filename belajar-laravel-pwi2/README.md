# Belajar Laravel 12 (PWI2)

Praktikum Pemrograman Web Interaktif 2: CRUD produk dengan Laravel 12 dan MySQL.

Fitur: tampil data dengan pagination, tambah data dengan validasi, detail, edit (update), hapus (delete) dengan modal konfirmasi Bootstrap, dan daftar kategori produk (Resource Controller).

## Cara menjalankan

Prasyarat: PHP 8.2+, Composer, dan MySQL (XAMPP / Laragon / Herd).

```bash
# 1. install library (folder vendor tidak ikut di-upload ke GitHub)
composer install

# 2. salin konfigurasi dan buat APP_KEY
cp .env.example .env        # Windows (cmd): copy .env.example .env
php artisan key:generate

# 3. buat database kosong bernama laravel_pwi2 di MySQL, lalu sesuaikan DB_* pada file .env

# 4. buat tabel dan isi data contoh
php artisan migrate:fresh --seed

# 5. jalankan
php artisan serve
```

Buka http://127.0.0.1:8000/product dan http://127.0.0.1:8000/category.
