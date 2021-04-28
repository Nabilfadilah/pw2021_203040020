<?php 

$hari = ["Senin", "Selasa"];

print_r($hari);
echo "</br>";
$hari[] = "Rabu"; //Menambahkan elemen pada urutan terkhir array
print_r($hari);
echo "</br>";
$hari[3] = "kamis"; //Menambhkan elemen pada index yang kita tentukan.
                    //jika index sudah terisi, maka elemen lama akan diganti elemen baru.
print_r($hari);

?>