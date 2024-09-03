# 🚀 Dynamic Landing Page Generator

Sebuah sistem sederhana namun powerful untuk menghasilkan landing page dinamis berdasarkan kata kunci.

## 📋 Daftar Isi

- [🌟 Fitur](#-fitur)
- [🛠️ Instalasi](#️-instalasi)
- [📁 Struktur File](#-struktur-file)
- [🔧 Cara Kerja](#-cara-kerja)
- [🚀 Penggunaan](#-penggunaan)
- [🔒 Keamanan](#-keamanan)
- [✨ Kustomisasi](#-kustomisasi)
- [🐞 Troubleshooting](#-troubleshooting)
- [📈 Optimisasi](#-optimisasi)
- [📝 Lisensi](#-lisensi)

## 🌟 Fitur

- Generasi landing page dinamis berdasarkan kata kunci
- Proteksi XSS (Cross-Site Scripting)
- Pencegahan akses langsung ke file sensitif
- URL yang SEO-friendly

## 🛠️ Instalasi

1. Clone repositori ini:
   ```
   git clone https://github.com/rackiet/dynamic-landing-page-generator.git
   ```
2. Pastikan server Anda mendukung PHP 7.0 atau lebih tinggi.
3. Aktifkan modul `mod_rewrite` pada server Apache Anda.
4. Sesuaikan permission file:
   ```
   chmod 644 *.php *.txt .htaccess
   chmod 755 .
   ```

## 📁 Struktur File

```
.
├── .htaccess
├── index.php
├── index2.php
└── keyword.txt
```

## 🔧 Cara Kerja

1. `.htaccess` mengarahkan semua request ke `index.php`.
2. `index.php` memproses request, membaca `keyword.txt`, dan mencocokkan URL dengan kata kunci.
3. Jika cocok, `index2.php` dijalankan untuk menghasilkan landing page.
4. Jika tidak cocok, error 404 ditampilkan.

## 🚀 Penggunaan

1. Edit `keyword.txt`, tambahkan kata kunci Anda (satu per baris).
2. Akses situs Anda: `http://domain-anda.com/kata-kunci`
3. Landing page dinamis akan ditampilkan untuk kata kunci yang cocok.

## 🔒 Keamanan

Sistem ini menerapkan beberapa langkah keamanan:

- Sanitasi input untuk mencegah XSS
- Pembersihan kata kunci dari karakter berbahaya
- Pencegahan akses langsung ke `index2.php`
- Validasi path untuk mencegah directory traversal

Namun, selalu lakukan audit keamanan secara berkala.

## ✨ Kustomisasi

- Edit `index2.php` untuk mengubah tampilan landing page.
- Modifikasi CSS dalam `<style>` tag di `index2.php` untuk styling kustom.
- Tambahkan logika PHP di `index2.php` untuk konten dinamis lebih lanjut.

## 🐞 Troubleshooting

- **Error 404 untuk Semua Halaman**: Periksa konfigurasi `.htaccess` dan `mod_rewrite`.
- **Kata Kunci Tidak Bekerja**: Pastikan format `keyword.txt` benar dan file dapat dibaca.
- **Masalah Keamanan**: Jalankan scan keamanan dan perbarui sistem secara teratur.

## 📈 Optimisasi

- Implementasikan caching untuk `keyword.txt` untuk performa lebih baik.
- Minify CSS di `index2.php`.
- Gunakan CDN untuk aset statis jika ada.

## 📝 Lisensi

Proyek ini dilisensikan di bawah MIT License. Lihat file `LICENSE` untuk detail lengkap.

---

Dibuat dengan ❤️ oleh [rackiet]

Untuk bantuan lebih lanjut atau melaporkan masalah, silakan buka issue di repositori GitHub ini.
