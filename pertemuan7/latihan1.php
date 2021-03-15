<?php 
/* 
Mohammad Nabil Fadilah
203040020
https://github.com/Nabilfadilah/pw2021_203040020
Pertemuan 7 - 15 Maret 2021
Mempelajari mengenai GET & POST pada PHP 
*/
?>

<?php 
// Variabel Scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();
?>

<?php 
// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];
?>

<?php 
// $_GET

$mahasiswa = [
    [
        "nama" => "Nabil Fadilah",
        "nrp" => "11240353",
        "email" => "BerkahJaya75@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "bill.jpg"
    ],
    [
        "nama" => "Ilham Soepono",
        "nrp" => "11240671",
        "email" => "soepo77@gmail.com",
        "jurusan" => "Teknik Geologi",
        "gambar" => "ham.jpg"
    ],
    [
        "nama" => "Ronal fajriansyah",
        "nrp" => "11030033",
        "email" => "fajarlsss0@gmail.com",
        "jurusan" => "Teknik industri",
        "gambar" => "ronal.jpg"
    ],
    [
        "nama" => "bagas Saputra Wijaya",
        "nrp" => "16030233",
        "email" => "bagas3030@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "bagas.jpg"
    ],
    [
        "nama" => "Oktaviansyah Adi Baskara",
        "nrp" => "610800123",
        "email" => "Bassskara2@gmail.com",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "peba.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
    
</body>
</html>