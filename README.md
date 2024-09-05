# 🌐 Dynamic URL Processor

## 📋 Deskripsi Proyek
Proyek ini adalah sistem pengolah URL dinamis yang memungkinkan penanganan kata kunci melalui URL khusus. Sistem ini dirancang untuk memberikan respons berbeda berdasarkan kata kunci yang diberikan dalam URL.

## 🗂️ Struktur Proyek
```
root/
│
├── .htaccess
├── index.php
├── index2.php
├── keyword.txt
└── README.md
```

## 🚀 Fitur Utama
- 🔗 Pemrosesan URL dinamis
- 🔍 Pencocokan kata kunci dari file
- 🛡️ Pengalihan otomatis ke halaman 404 untuk kata kunci yang tidak valid
- 🔒 Konfigurasi keamanan tingkat lanjut melalui .htaccess

## 🛠️ Cara Penggunaan
1. Pastikan server web Anda mendukung file .htaccess dan mod_rewrite diaktifkan.
2. Tempatkan semua file di direktori root web Anda.
3. Sesuaikan isi file `keyword.txt` dengan daftar kata kunci yang diinginkan.
4. Akses situs dengan format URL: `http://yourdomain.com/foldername/gantibos=keyword`

### 📝 Contoh URL
- `http://yourdomain.com/foldername/` - Menampilkan halaman index.php
- `http://yourdomain.com/foldername/gantibos=kesehatan` - Memproses kata kunci "kesehatan"
- `http://yourdomain.com/foldername/gantibos=kesehatan%20mental` - Memproses kata kunci "kesehatan mental"

## 🔐 Fitur Keamanan
- ⚔️ Pencegahan directory listing
- 🚫 Pembatasan akses ke file sensitif
- 🛡️ Proteksi terhadap XSS, clickjacking, dan MIME-sniffing
- 🔒 Pembatasan metode HTTP yang diizinkan

## ⚙️ Konfigurasi
- Tambahkan kata kunci baru ke `keyword.txt`, satu kata kunci per baris.
- Sesuaikan tampilan halaman sukses di `index2.php` sesuai kebutuhan.
- Pastikan Anda memiliki halaman 404 kustom di `/404/` untuk penanganan error.

## 📌 Catatan Penting
- Selalu uji konfigurasi baru di lingkungan pengembangan sebelum menerapkannya di produksi.
- Pastikan semua modul Apache yang diperlukan (seperti mod_headers) diaktifkan di server Anda.

## 🤝 Kontribusi
Kontribusi untuk meningkatkan proyek ini sangat diterima. Silakan buat pull request atau buka issue untuk saran dan perbaikan.

## 📄 Lisensi
Proyek ini dilisensikan di bawah [MIT License].

---

🌟 Dibuat dengan ❤️ oleh [rackiet]
