<?php 
if( isset($_POST["submit"])){
    if( $_POST["username"]=="Abdillah P Al-Iman" && $_POST["password"]=="12345"){
        header("location: index.php");
        exit;
    }else{
        $error=true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <?php if( isset($error)) :?>
        <p style="font: italic; color:red;">Maaf Password atau Username anda salah!</p>

    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Password">
            </li>
            <br>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password">
            </li>
            <button type="submit" name="submit">SUBMIT</button>
        </ul>
    </form>
    
</body>
</html>