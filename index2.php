<?php
if (!defined('SECURE_ACCESS')) {
    die('Akses langsung tidak diizinkan');
}
// Sisa kode index2.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $katakuncinya; ?> - Demo Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em;
            margin-bottom: 20px;
        }
        h1 {
            margin-bottom: 0.5em;
        }
        .cta-button {
            display: inline-block;
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #005f7f;
        }
        img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $katakuncinya; ?></h1>
        <p>Selamat datang di halaman demo kami</p>
    </header>

    <main>
        <h2>Tentang <?php echo $katakuncinya; ?></h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.
        </p>

        <img src="/api/placeholder/600/400" alt="Placeholder Image">

        <h2>Mengapa Memilih Kami?</h2>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
            <li>Donec sit amet nisl. Aliquam semper ipsum sit amet velit.</li>
            <li>Suspendisse id sem consectetuer libero luctus adipiscing.</li>
        </ul>

        <h2>Layanan Kami</h2>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
        </p>

        <a href="#" class="cta-button">Pelajari Lebih Lanjut</a>
    </main>
</body>
</html>
