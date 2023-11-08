<?php 
session_start();
// validasi ini akan mengembalikan user ke halaman LOGIN apabila user belum login sebelumnya
if(!isset($_SESSION["masuk"])){
   header("location:login.php"); 
   exit;
}
require 'function_koneksi.php';

$id = $_GET["id"];

// 0 kosong, -1 data/sintaks salah, 1 data dan sintaks benar/berhasil
if( hapus($id)>0){
        echo"
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='index.php';
            </script>";
} else{
    echo"
            <script>
                alert('Data gagal Dihapus');
                document.location.href='index.php';
            </script>";
}

?>