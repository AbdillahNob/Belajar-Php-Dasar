<?php 
    //Variabel Scope
    //Variabel lokal
    $lokal=20;

    function belajar(){
        // Global berfungsi untuk mencari variabel di luar function yg sudah di Definisikan
        // sehingga menjadi variabel GLOBAL.
        global $lokal;
        echo $lokal;
    }
    belajar();
    echo"<br>";

    // Variabel SuperGlobal adalh variabel yg sudah disediakan PHP
    // dan konsepnya hampir sama dgn Array Assosiative sprti key and value
    // post,get,server,session dan cookie.
    // var_dump($_SERVER);
    echo $_SERVER["SERVER_ADMIN"];

?>