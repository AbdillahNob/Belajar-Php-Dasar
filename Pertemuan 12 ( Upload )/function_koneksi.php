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

        $gambar = upload();
        if(!$gambar){
            return false;
        }

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
        $gambarLama=htmlspecialchars($edit["gambarLama"]);
  
    if($_FILES['gambar']['error'] === 4){
        $gambar=$gambarLama;
    }
    else{
        $gambar = upload();
    }

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
    // perintah utk menampilkan data yg mirip di DB dgn di search
    $query = "SELECT * FROM buku 
                WHERE 
                judul LIKE '%$cari%' OR 
                genre LIKE '%$cari%' OR 
                harga LIKE '%$cari%' OR
                stok LIKE '%$cari%'
                ";
    // $nilai = mysqli_query($con, $query);

// Function query sdh memiliki nilai utk koneksi dengan DB,Tabel dan memiliki nilai semua nilai dri TBL yg dimasukn kedlm kotak array/$bukus[] 
// lalu fungsi query yg pnya parameter $query dikembalikan ke fungsi cari
    return query($query);

}

function upload(){
    // $_files adlh array multidimensi
    // setelh tombol submit dtekan maka fungsi tambah dikerjakan
    // $_FILES akn tangkap key gambar bsrta valuenya dlm bentuk array multidimensi/2 dimensi
    $namaFoto = $_FILES["gambar"]["name"];
    $sizeFoto = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // key error selain dari 0 atau 4 maka tdk data ddlmnya
    // 1.cek apakah adakah gambar di Upload 
    if($error === 4){
        echo"
            <script>
                alert('Maaf Anda harus masukkan foto terlebih dahulu !');
            </script>
            ";
            return false;
    }

    $ekstensiGambarValid = ["jpg","jpeg","png"];
    // explode utk memisahkan nilai string menjadi array cth : abdillah.jpg = [abdillah][jpg].
    $ekstensiFoto = explode(".", $namaFoto);
    // strlower memaksa nilai yg ditangkp menjadi hruf kecil dan end berfungsi utk mengambil array paling trkhir.
    // ambil ekstensi pada file yg di UP user
    $ekstensiFoto = strtolower(end($ekstensiFoto));

    // 2.cek apakah file yg dimasukkan berupa ekstensi file gambar 
    if (!in_array($ekstensiFoto, $ekstensiGambarValid)){
        echo"
            <script>
                alert('Maaf yg anda masukkan bukan FOTO !');
            </script>
            ";
            return false;
    }

    // 3. cek ukuran file foto dgn max 2,5 mb
    if($sizeFoto > 2500000){
        echo"
            <script>
                alert('Maaf ukuran foto anda melebihi 2,5 MB');
            </script>
            ";
            return false;
    } 

    // apabila foto yg di UP pnya nama yg sama dgn foto yg sdh ada di DB 
    // maka uniqid akan mengubah string/nama foto ini menjadi random
    $namaFotoBaru = uniqid();
    $namaFotoBaru .= '.';
    $namaFotoBaru .= $ekstensiFoto;

    // Upload foto dri directory/penyimpanan file smntra/tmp ke folder tmpt pemanggilan data foto
    move_uploaded_file($tmpName, 'img/'. $namaFotoBaru);


    return $namaFotoBaru;
}


?>