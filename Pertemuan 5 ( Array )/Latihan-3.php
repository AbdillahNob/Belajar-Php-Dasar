<?php 
$mahasiswa = [
    ["Abdillah P Al-Iman",202300,"Teknik Informatika"],
    ["Ooka",202301,"Teknik Informatika"],
    ["Mande",202302,"Teknik Informatika"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>Nim : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>