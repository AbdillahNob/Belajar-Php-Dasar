<?php 
// Array adalah variabel yg bisa menampung lebih dari 1 Nilai
// dan pasangan key(Index) dan value
//Element adalah nilai/Value pd dlm indeks

// di php dlm 1 Array bisa menampung jenis data yg berbeda

// penulisan cara lama
$lama = array("abdi","aku",20);
echo $lama[2];
echo "<br>";

//Penulisan cara terbaru
$baru = ["Abdillah","Aini",2002,true];
echo $baru[1];


//Pemanggilan 1 Element
$Mahasiswa = ["Abdillah P Al-Iman","Ooka","Mande"];
$karyawan = ["Aini","Mila","Ayat"];
echo "<br>";

var_dump($Mahasiswa);
echo "<br>";
print_r($karyawan);

//Menambah Element baru pd Array
$Mahasiswa[] = "aqila";
$karyawan[] = "HARU";

echo "<br><br>";
var_dump($Mahasiswa);
echo "<br>";
print_r($karyawan);

?>