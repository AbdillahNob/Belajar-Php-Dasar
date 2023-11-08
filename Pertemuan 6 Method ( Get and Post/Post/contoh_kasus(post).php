<?php 
// $_POST Adalah variabel SuperGlobal yang mengirim/memasukkan data di form melalui balik layar
// dan menangkap Data dgn menggunakan $_post dan key-nya.

//  apabila method dan action kosong pd form secara otomatis actionny mengirim data pada laman in
// dan methodnya menjadi $_GET.

?>
<!-- Validasi apabila Tombol Submit belum di tekan -->
<?php if(isset($_POST["submit"])): ?>
    <?php if( $_POST["nama"]=="Abdillah" && $_POST["judul"]=="Haikyu"):?>
            <?php 
                header("location: data_buku1.php");
                exit;
                ?>
            <?php else :?>
                <?php $kosong=true ?>
            <?php endif; ?>
        
<?php  endif; ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <?php ?>
  
    <?php if(isset($kosong)):?>
        <p style="font-style: italic; color:red;">Maaf Anda isi data terlebih dahulu</p>
      
    <?php endif; ?>

    <form action="" method="post">
        Nama :
        <input type="text" name="nama">
        <br>
        Judul :
        <input type="text" name="judul">
        <br>
        <button type="submit" name="submit">KIRIM</button>
    </form>
    
</body>
</html>