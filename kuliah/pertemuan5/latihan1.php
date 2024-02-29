<?php 

// ARRAY
// Membuat Array

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Dena', 18, false];
$binatang = ['🦢', '🕊️', '🐬', '🦋', '🐞'];

// Menampilkan isi array
// Mencetak satu elemen pada array menggunakan ndex

echo $hari[2];
echo "<br>";
echo $bulan[1];
echo "<br>";
echo $myArray[1];
echo "<br>";
echo $binatang[4];
echo "<hr>";

// mencetak seluruh isi array
// var_dump , print_r

var_dump ($hari);
echo "<br>";
print_r ($bulan);
echo "<br>";
var_dump ($myArray);
echo "<br>";
print_r ($binatang);
echo "<hr>";

// Manipulasi isi array
// Isi elemen menggunakan indeksnya

$hari[3] = 'Kamis';
print_r($hari);
echo "<br>";

// Menambahkan elemen di akhir array menggunakan index kosong []

$hari[] = "Jum'at";
$hari[] = 'Sabtu';
print_r ($hari);
echo "<br>";

// Menambahkan elemen baru di akhir array menggunakan array_push()

array_push($bulan, 'April', 'Mei', 'Juni', 'Juli');
print_r ($bulan);
echo "<hr>";

// Menambahkan elemen baru di awal array menggunakan array_unshift()

array_unshift($binatang, '🦄', '🐣');
print_r ($binatang);
echo "<hr>";

// Menghapus elemen di akhir array menggunakan array_pop

array_pop($hari);
array_pop($hari);
print_r ($hari);
echo "<hr>";

// Menghapus elemen di awal array menggunakan array_shift

array_shift($hari);
print_r($hari);
echo "<hr>";



?>