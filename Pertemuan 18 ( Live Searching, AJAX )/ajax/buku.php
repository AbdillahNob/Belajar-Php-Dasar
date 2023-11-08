<?php 
require'../function_koneksi.php';
$keyword = $_GET["keyword"];
// stlh event keyup di lakukan maka seluruh data dari tabel buku akan tampil dalam container pd hal index.
$query = "SELECT * FROM buku 
                    WHERE 
                        judul LIKE '%$keyword%' OR 
                        genre LIKE '%$keyword%' OR 
                        harga LIKE '%$keyword%' OR
                        stok LIKE '%$keyword%'";
$komik = query($query);


?>
<table border="" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach($komik as $tampung): ?>
        <tr>
            <td><?= $no;?></td>
            <td>
                <a href="edit.php?id=<?= $tampung["id"]; ?>">Edit</a>||
                <a href="hapus.php?id=<?= $tampung["id"];?>" 
                onclick="return confirm('Apa Anda Yakin Ingin Menghapusnya ?')">Hapus</a>
            </td>

            <td><img src="img/<?= $tampung["gambar"];?>" width="200"></td>
            <td><?= $tampung["judul"];?></td>
            <td><?= $tampung["genre"];?></td>
            <td><?= $tampung["harga"];?></td>
            <td><?= $tampung["stok"];?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>