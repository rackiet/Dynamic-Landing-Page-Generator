# 🚀 Dynamic Landing Page Generator

## 📋 Daftar Isi
- [🌟 Pengenalan](#-pengenalan)
- [🛠️ Persiapan](#️-persiapan)
- [🗂️ Struktur File](#️-struktur-file)
- [🔧 Cara Kerja](#-cara-kerja)
- [📁 Penjelasan File](#-penjelasan-file)
  - [.htaccess](#htaccess)
  - [index.php](#indexphp)
  - [index2.php](#index2php)
  - [keyword.txt](#keywordtxt)
- [🚀 Penggunaan](#-penggunaan)
- [🔍 Contoh](#-contoh)
- [✨ Kustomisasi](#-kustomisasi)
- [🐞 Troubleshooting](#-troubleshooting)
- [🔒 Keamanan](#-keamanan)
- [📈 Optimisasi](#-optimisasi)
- [📝 Lisensi](#-lisensi)

## 🌟 Pengenalan

Dynamic Landing Page Generator adalah alat sederhana namun powerful untuk membuat landing page dinamis berdasarkan kata kunci. Sistem ini memungkinkan Anda untuk membuat berbagai halaman landing tanpa perlu membuat file HTML terpisah untuk setiap kata kunci.

## 🛠️ Persiapan

1. Clone repositori ini ke mesin lokal atau server web Anda:
   ```
   git clone https://github.com/username/dynamic-landing-page-generator.git
   ```
2. Pastikan server Anda mendukung PHP (minimal versi 7.0).
3. Aktifkan modul `mod_rewrite` pada server Apache Anda.
4. Pastikan file `.htaccess` dapat dibaca oleh server web Anda.

## 🗂️ Struktur File

```
.
├── .htaccess
├── index.php
├── index2.php
└── keyword.txt
```

## 🔧 Cara Kerja

1. Permintaan masuk diarahkan ke `index.php` melalui aturan rewrite dalam `.htaccess`.
2. `index.php` membaca daftar kata kunci dari `keyword.txt`.
3. URL yang diminta dibandingkan dengan kata kunci yang ada.
4. Jika ditemukan kecocokan, `index2.php` dijalankan untuk menghasilkan halaman landing.
5. Jika tidak ada kecocokan, ditampilkan pesan error 404.

## 📁 Penjelasan File

### .htaccess

File ini mengatur aturan rewrite untuk Apache server:

```apache
RewriteEngine On
RewriteBase /

# Jika file atau direktori tidak ada, arahkan ke index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [L,QSA]
```

Aturan ini mengarahkan semua permintaan yang tidak mengarah ke file atau direktori yang ada ke `index.php`.

### index.php

File ini adalah entry point utama aplikasi:

1. Membaca kata kunci dari `keyword.txt`.
2. Memproses URL yang diminta.
3. Mencocokkan URL dengan kata kunci.
4. Jika cocok, memanggil `index2.php` dengan kata kunci yang sesuai.
5. Jika tidak cocok, menampilkan error 404.

### index2.php

File ini berisi template HTML untuk landing page:

1. Menggunakan kata kunci yang cocok (`$katakuncinya`) untuk mengisi konten.
2. Menyediakan struktur dasar HTML dengan beberapa placeholder konten.
3. Mencakup CSS inline untuk styling dasar.

### keyword.txt

File teks sederhana yang berisi daftar kata kunci, satu per baris. Contoh:

```
sayang
cinta
arjuna ireng
sendal jepit
```

## 🚀 Penggunaan

1. Tambahkan kata kunci ke `keyword.txt`, satu kata kunci per baris.
2. Akses situs Anda menggunakan pola URL: `http://domain-anda.com/kata-kunci`
3. Server akan menghasilkan landing page dinamis untuk setiap kata kunci yang cocok.

## 🔍 Contoh

Dengan kata kunci di atas, Anda bisa mengakses:

- `http://domain-anda.com/sayang`
- `http://domain-anda.com/cinta`
- `http://domain-anda.com/arjuna-ireng`
- `http://domain-anda.com/sendal-jepit`

Setiap URL akan menampilkan landing page khusus dengan kata kunci sebagai judul.

## ✨ Kustomisasi

1. Edit `index2.php` untuk mengubah struktur HTML landing page:
   - Modifikasi tag `<title>` untuk SEO yang lebih baik.
   - Ubah konten dalam tag `<main>` sesuai kebutuhan.
   - Tambahkan bagian baru seperti testimonial atau galeri.

2. Perbarui CSS dalam `<style>` tag di `index2.php`:
   - Ubah skema warna dengan mengganti nilai dalam properti `background-color` dan `color`.
   - Sesuaikan `max-width` pada `body` untuk mengubah lebar halaman.
   - Tambahkan aturan CSS baru untuk elemen tambahan yang Anda buat.

3. Tambahkan fungsionalitas dinamis:
   - Gunakan `$katakuncinya` di berbagai bagian halaman untuk personalisasi lebih lanjut.
   - Tambahkan logika PHP untuk menampilkan konten berbeda berdasarkan kata kunci tertentu.

## 🐞 Troubleshooting

- **Error 404 untuk Semua Halaman**: Pastikan `mod_rewrite` aktif dan `.htaccess` terkonfigurasi dengan benar.
- **Kata Kunci Tidak Bekerja**: Periksa apakah `keyword.txt` dapat dibaca dan formatnya benar.
- **Halaman Tidak Ter-update**: Pastikan untuk membersihkan cache browser Anda.

## 🔒 Keamanan

1. Batasi akses langsung ke `index2.php` dengan menambahkan di awal file:
   ```php
   if (!defined('SECURE_ACCESS')) {
       die('Akses langsung tidak diizinkan');
   }
   ```
   Kemudian di `index.php`, tambahkan `define('SECURE_ACCESS', true);` sebelum memanggil `index2.php`.

2. Validasi dan sanitasi input pengguna di `index.php` untuk mencegah XSS:
   ```php
   $katakuncinya = htmlspecialchars($matched_keyword, ENT_QUOTES, 'UTF-8');
   ```

3. Gunakan prepared statements jika Anda menambahkan interaksi database di masa depan.

## 📈 Optimisasi

1. Implementasikan caching untuk meningkatkan kinerja:
   - Cache hasil pembacaan `keyword.txt` menggunakan APC atau file-based caching.
   - Pertimbangkan untuk meng-cache output HTML untuk kata kunci yang sering diakses.

2. Minify CSS di `index2.php` untuk mengurangi ukuran file.

3. Gunakan lazy loading untuk gambar jika Anda menambahkan lebih banyak konten media.

## 📝 Lisensi

Proyek ini bersifat open-source dan tersedia di bawah Lisensi MIT. Lihat file `LICENSE` untuk informasi lebih lanjut.

---

Selamat menggunakan Dynamic Landing Page Generator! 🎉 Jika Anda memiliki pertanyaan atau butuh bantuan lebih lanjut, jangan ragu untuk membuka issue di repositori ini.
