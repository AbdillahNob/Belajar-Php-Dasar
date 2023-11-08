<?php 

// 2. ini Fungsi CREATE
 $conn = mysqli_connect("localhost","root","","manga");

 if(isset($_POST["submit"])){
        $judul=$_POST["judul"];
        $genre = $_POST["genre"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];
        $gambar = $_POST["gambar"];

        $create = "INSERT INTO buku VALUES
                ('',
                '$judul',
                '$genre',
                '$harga',
                '$stok',
                '$gambar')";
    //Memasukkan Data baru yg di tangkap ke dalam Tabel
        mysqli_query($conn, $create);

    // Check Apakah data dan sintaks error atau tidak.
    // -1 error, 0 kosong, 1 benar/berhasil
    var_dump(mysqli_affected_rows($conn));
     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan tambah data</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul">
            </li>
            <li>
                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="stok">Stok :</label>
                <input type="text" name="stok" id="stok">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
    <a href="contoh_kasus.php">Kembali ke halaman utama</a>
    
</body>
</html>