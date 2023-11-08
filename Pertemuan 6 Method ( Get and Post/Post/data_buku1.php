<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku1</title>
</head>
<body>
<?php if ( isset($_POST["nama"])  && $_POST["judul"]) :?>
    <h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
    <h1>Judul Manga :<?= $_POST["judul"]; ?></h1>
  
<?php endif; ?>
    
    
</body>
</html>