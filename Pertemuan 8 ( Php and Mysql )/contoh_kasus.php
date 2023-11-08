<?php 
require 'function_koneksi.php';
$komik = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Kasus</title>
</head>
<body>
    <table border="" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach($komik as $tampung): ?>
        <tr>
            <td><?= $no;?></td>
            <td><a href="">Edit</a>||<a href="">Hapus</a></td>
            <td><img src="img/<?= $tampung["gambar"];?>" width="200"></td>
            <td><?= $tampung["judul"];?></td>
            <td><?= $tampung["genre"];?></td>
            <td><?= $tampung["harga"];?></td>
            <td><?= $tampung["stok"];?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>