<?php 
// Function yang menghubungkan ke DATABASE
    $conn= mysqli_connect("localhost","root","","manga");
// Function yg berfungsi mengambil data Tabel dari Database dgn perintah query/sql
   $result=mysqli_query($conn,"SELECT * FROM buku");

// Cara mengecheck apakah perintah querynya error/tidak
// if(!$result){
//     echo mysqli_error($conn);
// }
    // var_dump($result);

// ambil data langsung (fetch) dri result/tabel
//mysqli_fetch_row() = ambil dan kembalikan semua data dengan cara array Numerik
//mysqli_fetch_assoc() = ambil dan kembalikan semua data dengan cara array Assosiative[key/field]
//mysqli_fetch_array() = ambil dan kembalikan semua data dengan cara array N dan A (jika dpnggl smua maka 1 data tampil dlm 2 jenis array)
//mysqli_fetch_object() = ambil dan kembalikan semua data dengan cara ->nama(string) keynya.
//  while($buku = mysqli_fetch_assoc($result)){
//  var_dump($buku);
//  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 PHP dan Mysql</title>
    <style>
        .kotak{
            float:unset;
        }
    </style>
</head>
<body>
   <div class="kotak">
     <table border="" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>
        <?php $no=1; ?>
        <!-- ambil data dan di tampilkan 1/1 scra langsung tanpa disimpan dlm array/kotak baru -->
         <?php  while ($buku = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $no; ?></td>
            <td>edit || hapus</td>
            <td><img src="img/<?= $buku["gambar"]; ?>" width="100"></td>
            <td><?= $buku["judul"]; ?></td>
            <td><?= $buku["genre"];?></td>
            <td><?= $buku["stok"]; ?></td>
            <td><?= $buku["harga"]; ?></td>

        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>
    </table>
   </div>
    <a href="">masuk</a>
    
</body>
</html>