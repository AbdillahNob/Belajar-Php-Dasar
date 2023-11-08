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
    <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="JS/kelola_jquery.js"></script>
    
    <style>
       .loader{
            width: 40px;
            position: absolute;
            z-index: -1;
            top: 130px;
            left: 190px;
            display: none;
       }

       /* element ini tidak akan di tampilkan pd saat print pdf di browser */
       @media print{
        .tambah, .form, .logout, .aksi{
            display: none;
        }

       }
    </style>
    
</head>
<body>
    <a href="log_out.php" class="logout">LOG-OUT</a>
    <h1>Welcome To Manga Toko</h1>
    <br>
    <a href="tambah.php" class="tambah">Tambah Data</a>
    <form action="" method="POST" class="form">
        <input type="search" name="search" autofocus placeholder="Cari Nama" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="cari">CARI</button>
        <img src="img/loaderS.gif" class="loader">
    </form>
    <br><br>
    <div id="container">
    <table border="" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
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
            <td class="aksi">
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
    </div>
    
</body>
</html>