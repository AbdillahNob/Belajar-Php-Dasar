<?php 
session_start();
// validasi ini akan mengembalikan user ke halaman LOGIN apabila user belum login sebelumnya
if(!isset($_SESSION["masuk"])){
   header("location:login.php"); 
   exit;
}
require 'function_koneksi.php';

// menangkap id yang dikrm dari data yg ingin di edit berdasarkan id nya
$id = $_GET["id"];

// Ambil 1 record data berdsrkn id yg dikrm oleh user dgn.
// menirim parameter query ke fungsi query
// lalu fungsi query skrng berisi $bukus[[]];
$data= query("SELECT * FROM buku WHERE id = $id")[0];

if(isset($_POST["submit"])){
    // 0 kosong, -1 data/sintaks salah, 1 data dan sintaks benar/berhasil
      if( ubah($_POST)>0){
            echo"
                <script>
                alert('Data Berhasil Di Edit');
                document.location.href='contoh_kasus.php';
                </script>
                    ";
      }else{
                echo"
                <script>
                alert('Data Gagal Di Edit');
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
    <title>Edit Data Data</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <ul>
                <input type="hidden" name="gambarLama" value="<?= $data['gambar']?>">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required value="<?= $data["judul"];?>">
            </li>
            <li>
                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre" required value="<?= $data["genre"];?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required value="<?= $data["harga"];?>">
            </li>
            <li>
                <label for="stok">Stok :</label>
                <input type="text" name="stok" id="stok" required value="<?= $data["stok"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <br>
                <img src="img/<?= $data["gambar"];?>" width="200">
                <br>
                <input type="file" name="gambar" id="gambar" >
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Kembali ke Halaman Utama</a>
    
</body>
</html>