<?php 
/*Array Associative secara definisi sama dengan Array biasa kecuali, 
    kecuali key/indeks nya kita buat sendiri */ 

    $buku = [
        ["kategori" => "Anime",
        "judul" => "Haikyuu",
        "stok" => "20",
        "harga" => "Rp.40.000",
        "gambar" => "haikyuu.jpg"],
        
        ["judul" => "one piece",
        "kategori" => "Anime",
        "stok" => "42",
        "harga" => "Rp.52.000",
        "gambar" => "one_piece.jpg"],

        ["judul" => "Hyouka",
        "kategori" => "Anime",
        "stok" => "16",
        "harga" => "Rp.34.000",
        "gambar" => "hyouka.jpg"],

];
function salam($nama){
    return "Selamat Datang Toko kami $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
</head>
<body>
    <h1><?= salam("Abdillah"); ?></h1>
    <h2>Anda Lahir pada Hari :<?= date("l", mktime(0,0,0,11,20,2002)); ?></h2>
    <br><br>
    <ul>
        <?php foreach($buku as $ambil) :?>
            <img src="img/<?= $ambil["gambar"] ?>">
            <li>Judul :<?= $ambil["judul"]; ?></li>
            <li>Kategori :<?= $ambil["kategori"]; ?></li>
            <li>Stok :<?= $ambil["stok"]; ?></li>
            <li>Harga :<?= $ambil["harga"]; ?></li>
            <li>gambar :<?= $ambil["gambar"]; ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>