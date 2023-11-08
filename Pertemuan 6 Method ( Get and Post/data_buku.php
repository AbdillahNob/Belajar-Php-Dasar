<?php
if (!isset($_GET["judul"])||
    !isset($_GET["gambar"])||
    !isset($_GET["genre"])||
    !isset($_GET["stok"])||
    !isset($_GET["harga"])):

    header("location:contoh_kasus.php");
endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Library Manga</h1>
    <ul>
        <img src="img/<?= $_GET["gambar"]; ?>">
        <li>Judul Manga : <?= $_GET["judul"]; ?></li>
        <li>Genre : <?= $_GET["genre"]; ?></li>
        <li>Stok : <?= $_GET["stok"]; ?></li>
        <li>Harga : <?= $_GET["harga"]; ?></li>
    </ul>

    <a href="contoh_kasus.php">Kembali ke Halaman Utama</a>
</body>
</html>