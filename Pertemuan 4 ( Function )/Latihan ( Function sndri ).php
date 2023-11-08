<?php 
// tdk bisa function di dlm Function klu membuat fungsi sndri kecuali fungsi 
//yg memilikiformat sprti date,time,mktime dll
function sambutan($nama, $waktu = "Siang"){
    return "selamat $waktu, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<body>
    <h1><?= sambutan("Abdillah");?></h1>
    <br>
    <h3> Anda Lahir pada Hari <?= date("l", mktime(0,0,0,11,20,2002) ); ?></h3>
</body>
</html>