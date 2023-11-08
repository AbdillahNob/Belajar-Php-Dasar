<?php 
require 'function_koneksi.php';

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($con, "SELECT * FROM registrasi WHERE username = '$username'");
    // cek apakah username yg di input ada dlm DATABASE.
    // mysqli_num_rows adlh fungsi yg mengecheck 1/1 setiap record dan field yg WHERE dalam data DB-
    // -apakah ada yg sama dgn nilai yg di input user.
    if(mysqli_num_rows($result) === 1){
        
        // ambil data password dari DB
        $verifikasi = mysqli_fetch_assoc($result);

        // password_verify adlh fungsi yg check apakah pass yg di input user sama dgn pass-
        // yg telah di ENKRIPSI dlm DATABASE.
        if(password_verify($password, $verifikasi["password"])){
            header("location: contoh_kasus.php");
            exit;
        }

    }
    $salah = true;
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman LOGIN Akun</h1>
    <?php if(isset($salah)): ?>
        <p style="font-style: italic; color:red">
        Username/Password anda salah !
        </p>
    <?php endif; ?>

    <form method="POST" action="">
        <ul>
            <li>
                <label for="username">USERNAME :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">PASSWORD :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">LOGIN</button>
            </li>
        </ul>
    </form>
    
</body>
</html>