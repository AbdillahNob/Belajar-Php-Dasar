<?php 
require 'function_koneksi.php';
    if(isset($_POST["submit"])){
        if(regis($_POST) > 0){
            echo "<script>
                    alert('Anda berhasil REGISTRASI');

                  </script>";
        }
        else{
            echo 
                "<script>
                    alert('Anda gagal REGISTRASI');
                </script>";
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form method="POST" action="">
      <ul>
        <li>
            <label for="username">USERNAME</label>
            <input type="text" name="username" id="username" placeholder="masukkan username anda" autocomplete="off">
        </li>
        <li>
            <label for="password">PASSWORD</label>
            <input type="password" name="password" id="password" placeholder="masukkan password anda" autocomplete="off">
        </li>
        <br>
        <li>
            <label for="password2">Konfirmasi PASSWORD</label>
            <input type="password" name="password2" id="password2" placeholder="masukkan password anda" autocomplete="off">
        </li>
            <button type="submit" name="submit">SUBMIT</button>
      </ul>
        
        
    </form>
</body>
</html>