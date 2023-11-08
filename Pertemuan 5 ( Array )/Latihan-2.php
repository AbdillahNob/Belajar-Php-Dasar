<?php 
 $lahir = [10,11,2002,21,3,2010];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: sandybrown;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{clear: both;}
    </style>
</head>
<body>
   <?php for ($i=0; $i < count($lahir) ; $i++) { ?> 
    <div class="kotak"><?= $lahir[$i]?></div>
    <?php }?>
     
    <div class="clear"></div>

    <?php //as ddlm foreach berfungsi utk mengambil dan menampilkan 1/1 Nilai ?>
    <?php foreach($lahir as $tampung){?>
        <div class="kotak"><?= $tampung; ?></div>
    <?php }?>
    <div class="clear"></div>

    <?php foreach($lahir as $tampung) :?>
        <div class="kotak"><?= $tampung; ?></div>
        <?php endforeach; ?>
</body>
</html>