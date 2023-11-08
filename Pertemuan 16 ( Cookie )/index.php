<?php 
session_start();

if(!isset($_SESSION["masuk"])){
   header("location:login.php"); 
   exit;
}
// validasi ini akan mengembalikan user ke halaman LOGIN apabila user belum login sebelumnya

require 'function_koneksi.php';

// 1. ini fungsi READ
$komik = query("SELECT * FROM buku");
// Apakah tombol cari dicari
if(isset($_POST["cari"])){
    $komik = cari($_POST["search"]);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <a href="log_out.php">LOG-OUT</a>
    <h1>Welcome To Manga Toko</h1>
    <br>
    <a href="tambah.php">Tambah Data</a>
    <form action="" method="POST">
        <input type="search" name="search" autofocus placeholder="Cari Nama" autocomplete="off">
        <button type="submit" name="cari">CARI</button>
    </form>
    <br><br>

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
            <td>
                <a href="edit.php?id=<?= $tampung["id"]; ?>">Edit</a>||
                <a href="hapus.php?id=<?= $tampung["id"];?>" 
                onclick="return confirm('Apa Anda Yakin Ingin Menghapusnya ?')">Hapus</a>
            </td>

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