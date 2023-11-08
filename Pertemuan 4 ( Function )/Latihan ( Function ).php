<?php 
// echo date("l d M Y");
// echo "<br>";

// echo time();
// echo "<br>";

//saya mau tahu hari, tanggal,bln,thn brpa 10 hari ke dpn ?
// echo date("l d M Y", time()+60*60*24*10);

//mktime adalah format yg membuat wktu kita sndri
//mktime(jam,menit,detik,bulan,tanggal,tahun)
// echo mktime(0,0,0,11,20,2002);

//saya mau tahu hari lahir saya?( jadi in akan mencetak hari berdasarkan bln,hri,thn sy lahir)
echo date("l", mktime(0,0,0,11,20,2002));
echo "<br>";
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir pendaftaran</title>
</head>
<body>
    <h2>Formulir pendaftaran Tentara</h2>
    <form action="proses.php" method="get">
        Nama : <input type="text" name="nama">
        <br><br>
        email : <input type="text" name="email">
        <br><br>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html> -->