<?php 
    $buku =[
        ["judul"=>"Haikyuu",
        "genre"=>"Sport and Comedy",
        "stok"=>"32",
        "harga"=>"Rp.34.000",
        "gambar"=>"haikyuu.jpg"],

        ["judul"=>"One Piece",
        "genre"=>"Adventure,Shounen and Comedy",
        "stok"=>"67",
        "harga"=>"Rp.56.000",
        "gambar"=>"one_piece.jpg"],

        ["judul"=>"Tate No Yuusha",
        "genre"=>"Action, and Fantasy",
        "stok"=>"42",
        "harga"=>"Rp.44.000",
        "gambar"=>"tate_no_yuusha.jpeg"],

        ["judul" => "Hyouka",
        "genre" => "Mistery,Drama and School",
        "stok" => "16",
        "harga" => "Rp.34.000",
        "gambar" => "hyouka.jpg"],

        ["judul" => "Kimi No Nawa",
        "genre" => "Drama and School",
        "stok" => "27",
        "harga" => "Rp.41.000",
        "gambar" => "kimi_no_nawa.jpg"],

    ];
    function salam($nama,$waktu){
        echo "<h1>Selamat $waktu</h1>";
        echo "<h1>Apa ada yang bisa saya bantu tuan $nama ?</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Manga</title>
</head>
<body>
    <?php salam("Abdillah P Al-Iman", "Siang");?>
    <ul>
        <?php foreach($buku as $tampung): ?>
            <li>
                <a href="data_buku.php?
                    judul=<?= $tampung["judul"];?>&
                    genre=<?= $tampung["genre"];?>&
                    stok=<?= $tampung["stok"]; ?>&
                    harga=<?= $tampung["harga"];?>&
                    gambar=<?= $tampung["gambar"];?>">
                <?= $tampung["judul"];?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>