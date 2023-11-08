<?php 
session_start();
require 'function_koneksi.php';

// jika User sudah login dan klik REMEMBER ME sbmlnya dan tiba"close dari Browser tnpa LOG-OUT dan apabila user masuk
// kmbli ke Website, user lngsng diarahkan kmbli ke halaman yg trkhir dibuka sblmnya dan msh dlm keadaan login.
if(isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];
    $result = mysqli_query($con,"SELECT username FROM registrasi WHERE id = $id");
    $verifikasi = mysqli_fetch_assoc($result);
    
// apakah cocok username di COOKIE yg di input dgn username yg sdh Enkripsi dan username yg ad di DB.
    if($key === hash("sha256", $verifikasi["username"]) ){
            $_SESSION["masuk"]=true;
            // echo "
            //         <script>
            //             alert('username anda di Cookie sama dgn username di DATABASE');
            //         </script>";
    }
}

// validasi ini bekerja apabila user ingin kembali ke halaman login tanpa log-out
if(isset($_SESSION["masuk"])){
    header("location:index.php");
    exit;
}

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
            // superglobal ini yg akan mengembalikan user ke halaman LOGIN apabila user mengAKSES halaman lain
            //  apabila belum LOGIN.
            $_SESSION["masuk"]=true;

            // Set Cookie 
            if(isset($_POST["remember"])){
                // agar org lain/hacker tdk memahami isi dari cookie yg trsmpn ada di client/browser user
                // hash(); sama fungsi dgn password_hash();
                setcookie("id",$verifikasi["id"], time()+60);
                setcookie("key", hash('sha256', $verifikasi["username"]), time()+60);
            }

            header("location:index.php");
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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="login">LOGIN</button>
            </li>
        </ul>
    </form>
    
</body>
</html>