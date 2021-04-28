<?php 
/* 
Mohammad Nabil Fadilah
203040020
https://github.com/Nabilfadilah/pw2021_203040020
Pertemuan 6 - 11 Maret 2021
Mempelajari mengenai ASSOCIATIVE ARRAY pada PHP 
*/
?>

<?php 
// $mahasiswa = [
//     ["Nabil Fadilah", "11240353", "BerkahJaya75@gmail.com", "Teknik Informatika"],
//     ["Ilham Soepono", "11240671", "soepo77@gmail.com", "Teknik Geologi"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

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
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>