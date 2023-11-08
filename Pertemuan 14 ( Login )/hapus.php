<?php 
require 'function_koneksi.php';

$id = $_GET["id"];

// 0 kosong, -1 data/sintaks salah, 1 data dan sintaks benar/berhasil
if( hapus($id)>0){
        echo"
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='contoh_kasus.php';
            </script>";
} else{
    echo"
            <script>
                alert('Data gagal Dihapus');
                document.location.href='contoh_kasus.php';
            </script>";
}

?>