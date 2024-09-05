<?php
// File: namafolder/index2.php

// Fungsi untuk membaca kata kunci dari file
function getKeywords($filename) {
    return file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

// Mendapatkan kata kunci dari parameter URL dan decode-nya
$keyword = isset($_GET['keyword']) ? urldecode($_GET['keyword']) : '';

if (!empty($keyword)) {
    // Membaca kata kunci dari file
    $keywords = getKeywords(__DIR__ . '/keyword.txt');
    
    // Memeriksa apakah kata kunci ada dalam daftar
    if (in_array(strtolower($keyword), array_map('strtolower', $keywords))) {
        // Kata kunci ditemukan, lakukan sesuatu di sini
        // echo "Kata kunci valid: $keyword";
        // Tambahkan logika tambahan sesuai kebutuhan
    } else {
        // Kata kunci tidak ditemukan, alihkan ke halaman 404
        header("HTTP/1.0 404 Not Found");
        header("Location: /404/");
        exit();
    }
} else {
    // Tidak ada kata kunci, alihkan ke halaman 404
    header("HTTP/1.0 404 Not Found");
    header("Location: /404/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses <?php echo $keyword; ?></title>
</head>
<body>
    <h1>Mother Father Sukses <?php echo $keyword; ?></h1>
</body>
</html>
