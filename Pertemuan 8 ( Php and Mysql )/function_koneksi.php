<?php 
    $con= mysqli_connect("localhost","root","","manga");

function query($nilai){
    global $con;
    $result= mysqli_query($con, $nilai);
    // membuat array di database.
    $bukus=[];
    while($buku = mysqli_fetch_assoc($result)){
        $bukus[]=$buku;
    }
    return $bukus;
}

?>