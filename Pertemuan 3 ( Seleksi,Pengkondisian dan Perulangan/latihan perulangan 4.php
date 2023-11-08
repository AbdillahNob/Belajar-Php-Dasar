<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-kolom{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($baris=1; $baris <=4 ; $baris++) :?>
            <?php if ($baris %2 == 0) : ?>
                <tr class="warna-kolom">
            <?php else :?>
                <tr>
            <?php endif ?>
                <?php //Kolom ?>
                <?php for ($kolom=1; $kolom <=5 ; $kolom++) :?>
                    <td><?= $baris.",".$kolom ?></td> 
                <?php endfor ?>

                </tr>
            <?php endfor ?>
    </table>
    
</body>
</html>