<?php 
/* 
Mohammad Nabil Fadilah
203040020
https://github.com/Nabilfadilah/pw2021_203040020
Pertemuan 5 - 5 Februari 2021
Mempelajari mengenai ARRAY pada PHP 
*/
?>

<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Araay
// var_dump() / print_r()
// var_dump($hari); 
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);




?>