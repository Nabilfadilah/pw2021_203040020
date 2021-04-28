<?php 
// Mengecek apakah ada id yang dikirimkan 
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$tabel_product = query("SELECT * FROM tabel_product WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $tabel_product["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $tabel_product["nama"]; ?></p>
            <p><?= $tabel_product["ukuran"]; ?></p>
            <p><?= $tabel_product["deskripsi"]; ?></p>
            <p><?= $tabel_product["harga"]; ?></p>
            <p><?= $tabel_product["stok"]; ?></p>
            <p><button><?= $tabel_product["produk"]; ?></button></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>