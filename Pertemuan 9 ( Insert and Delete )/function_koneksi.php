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
function tambah($nambah){
        global $con;
        // htmlspecialchars() fungsi bertugas utk mematikan kode script yg di masukkan oleh user/hacker 
        // dan nilainya tetap string.
        $judul=htmlspecialchars($nambah["judul"]);
        $genre=htmlspecialchars($nambah["genre"]);
        $harga=htmlspecialchars($nambah["harga"]);
        $stok=htmlspecialchars($nambah["stok"]);
        $gambar=htmlspecialchars($nambah["gambar"]);

        $query = "INSERT INTO buku VALUES 
                    ('',
                    '$judul',
                    '$genre',
                    '$harga',
                    '$stok',
                    '$gambar')";

        mysqli_query($con,$query);

    return mysqli_affected_rows($con);
}

function hapus($id){
    global $con;
    mysqli_query($con,"DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($con);
}

?>