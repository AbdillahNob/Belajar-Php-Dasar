<?php 
// Array
$angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
];
// echo $angka[2][2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <style>
        .warna-kotak{
            background-color: yellowgreen;
            height: 30px;
            width: 30px;
            text-align: center;
            float: left;
            margin: 3px;
            line-height: 30px;
            transition: 0.5s;
        }
        .warna-kotak:hover{
            transform: rotate(360deg);
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php foreach($angka as $kotak): ?>
        <?php foreach($kotak as $pensil):?>
            <div class="warna-kotak"><?= $pensil;?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
    
</body>

</html>