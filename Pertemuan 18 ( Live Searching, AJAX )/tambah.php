<?php 
session_start();
// validasi ini akan mengembalikan user ke halaman LOGIN apabila user belum login sebelumnya
if(!isset($_SESSION["masuk"])){
   header("location:login.php"); 
   exit;
}
require 'function_koneksi.php';

if(isset($_POST["submit"])){
    
    // 0 kosong, -1 data/sintaks salah, 1 data dan sintaks benar/berhasil
      if( tambah($_POST)>0){
            echo"
                <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href='index.php';
                </script>
                    ";
      }else{
                echo"
                <script>
                alert('Data Gagal Ditambahkan');
                </script>
                    ";
      }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="stok">Stok :</label>
                <input type="text" name="stok" id="stok" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Kembali ke Halaman Utama</a>
    
</body>
</html>