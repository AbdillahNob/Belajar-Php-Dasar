<?php 
    $con= mysqli_connect("localhost","root","","manga");
// mengambil semua data 1/satu didlm tabel lalu di susun secara ber-urut di array/kotak baru
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

        // hubungkan dan masukkan data baru ke dalam tabel
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
    // hubungkan dan hapus data di dalam tabel buku
    mysqli_query($con,"DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($con);
}

function ubah($edit){
    global $con;
        $id = $edit["id"];
        $judul=htmlspecialchars($edit["judul"]);
        $genre=htmlspecialchars($edit["genre"]);
        $harga=htmlspecialchars($edit["harga"]);
        $stok=htmlspecialchars($edit["stok"]);
        $gambar=htmlspecialchars($edit["gambar"]);

        $query = "UPDATE buku SET 
            judul='$judul', 
            genre='$genre', 
            harga='$harga', 
            stok='$stok', 
            gambar='$gambar' WHERE id = $id ";
        // Hubungkan dan masukkan data yg sdh dirubah ke tabel buku
        mysqli_query($con,$query);

    return mysqli_affected_rows($con);

}

// Proses Tombol Search
function cari($cari){
    // global $con;
    $query = "SELECT * FROM buku 
                WHERE 
                judul LIKE '%$cari%' OR 
                genre LIKE '%$cari%' OR 
                harga LIKE '%$cari%' OR
                stok LIKE '%$cari%'
                ";
    // $nilai = mysqli_query($con, $query);

// Function query sdh memiliki nilai utk koneksi dengan DB,Tabel dan memiliki nilai semua nilai dri TBL yg dimasukn kedlm kotak array/$bukus[] 
// lalu fungsi query dikembalikan ke fungsi cari
    return query($query);

}

?>