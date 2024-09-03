<?php
// File: index.php

// Fungsi untuk membersihkan input
function cleanInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}

// Baca file keyword.txt
$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Sanitasi keywords
$keywords = array_map('cleanInput', $keywords);

// Dapatkan path dari URL
$request_uri = $_SERVER['REQUEST_URI'];
$path = cleanInput(trim(parse_url($request_uri, PHP_URL_PATH), '/'));

// Cek apakah path cocok dengan salah satu keyword
$matched_keyword = null;
foreach ($keywords as $keyword) {
    $slug = strtolower(str_replace(' ', '-', $keyword));
    if ($path === $slug) {
        $matched_keyword = $keyword;
        break;
    }
}

if ($matched_keyword) {
    // Jika cocok, siapkan variabel untuk index2.php
    $katakuncinya = $matched_keyword; // Sudah di-sanitasi oleh cleanInput()

    // Definisikan konstanta untuk mencegah akses langsung ke index2.php
    define('SECURE_ACCESS', true);

    // Memanggil file index2.php
    include __DIR__ . '/index2.php';
} else {
    // Jika tidak cocok, tampilkan halaman 404
    header("HTTP/1.0 404 Not Found");
    echo "404 - Halaman tidak ditemukan";
}

exit(0);
?>
hahaha
