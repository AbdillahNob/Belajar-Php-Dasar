<?php 
//Perulangan for, while, do while, foreach.
    /* for ($i=1; $i <= 3 ; $i++) { 
        echo "Abdillah P Al-Iman <br>";
    }*/
    //--------------
    /* $a=1;
    while ($a <=3) {
        echo"Abu ";
        $a++;
    }*/
    //--------------
   /* $angka = 1;
    do {
        echo"Abdillah dan Aini <br>";
        $angka++;
    } while ($angka <=4);*/


//Pengkondisian if tunggal, if jamak, if bersarang, seleksi(switch case).
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .warna-baris {
            background-color: blue;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="12" cellspacing="0">
        <?php
            /* html didlm php
            for ($i=1; $i <=6 ; $i++) { 
                echo "<tr>";
                    for ($b=1; $b < 5; $b++) { 
                      echo "<td>$i,$b</td>";
                    }
                echo "</tr>";
            } 
        */?>
        <?php for ($i=1; $i <=6 ; $i++) :?>
            <?php if ($i %2 == 0) : ?>
                <tr class="warna-baris">
            <?php else :?>
                <tr>
            <?php endif ?>
                <?php for ($B=1; $B < 5 ; $B++) : ?> 
                    <td><?= $i.",".$B; ?></td>
                <?php endfor ?>
            </tr>
            
        <?php endfor ?>

    </table>
    
</body>
</html>