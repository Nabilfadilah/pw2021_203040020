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
$mahasiswa = [
    ["Nabil Fadilah", "203040020", "Teknik Informatika", "jayaselalu795@gmail.com"],
    ["Ilham Herdianto", "203040233", "Teknik Informatika", "herdiham63@gmail.com"],
    ["Syahrul Alfiansyah", "203040053", "Teknik Informatika", "alfi131@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>


















