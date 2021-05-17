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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zibantek Shoes</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="home" class="scrollspy">
    <div class="container" style="text-align: center;">
        <div class="gambar" style="margin-top: 10px;">
            <img src="../assets/img/<?= $tabel_product["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $tabel_product["nama"]; ?></p>
            <p><?= $tabel_product["ukuran"]; ?></p>
            <p><?= $tabel_product["deskripsi"]; ?></p>
            <p><?= $tabel_product["harga"]; ?></p>
            <p><?= $tabel_product["stok"]; ?></p>
        </div>
        <button class="waves-effect blue-grey lighten-1 btn-small">
            <i class="material-icons right">chevron_left</i><a href="../index.php" style="color: white;">Kembali</a>
        </button>
    </div>

</body>

</html>