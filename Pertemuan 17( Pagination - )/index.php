<?php 
session_start();

// validasi ini akan mengembalikan user ke halaman LOGIN apabila user belum login sebelumnya
if(!isset($_SESSION["masuk"])){
   header("location:login.php"); 
   exit;
}
require 'function_koneksi.php';

// Pagination
$dataPerhalaman = 3;
// cara 1 : 
// floor(); membulat nilai ke-bwh, ceil(); membulatkan nilai ke atas, round(); membulatkan nilai ke angka trdkt
$jumlahData = count(query("SELECT * FROM buku"));
$jumlahHalaman = ceil($jumlahData/$dataPerhalaman);

// jika user masuk ke halaman berapa selain 1.
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"]: 1;
// hal 2 = 3
// hal 3 = 6
$dataAwal = ( $dataPerhalaman * $halamanAktif) - $dataPerhalaman; 

// cara ke-2
// mysqli_num_rows(); fungsi yg hitung total record/baris data dalam bentuk array Object
// $result = mysqli_query($con, "SELECT * FROM buku");
// $totalData = mysqli_num_rows($result);

// 1. ini fungsi READ
$komik = query("SELECT * FROM buku LIMIT $dataAwal, $dataPerhalaman ");
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
    <!--  tombol previous-->
        <?php if($halamanAktif > 1): ?>
            <a href="?halaman= <?= $halamanAktif-1; ?>">&laquo;</a>
        <?php endif; ?>

    <!--  Looping utk menampilkan semua Halaman-->
        <?php for($i = 1; $i<=$jumlahHalaman; $i++):?>
            <!-- memberikan efek ke no Halaman yg sedang di Akses -->
            <?php if($i == $halamanAktif):?>
                <a href="?halaman=<?= $i;?>" style="font-weight: bold; color:red">
                    <?= $i; ?>
                </a>
            <?php else: ?>               
                <a href="?halaman=<?= $i?>">
                        <?= $i;?>
                    </a>
            <?php endif; ?>

        <?php endfor;?>

        <?php if($halamanAktif < 5 ):?>
            <a href="?halaman=<?= $halamanAktif +1; ?>">&raquo;</a>
        <?php endif; ?>

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