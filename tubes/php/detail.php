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

<style>
    body {
        background: white;
        color: white;
        font-family: sans-serif;
        letter-spacing: .7px;
    }

    .penjelasan {
        text-align: justify;
        margin-top: -20px;
    }

    .container {
        background-color: white;
        padding: 20px;
    }

    .card {
        padding: 61px;
        border-radius: 10px;
        background: black;
    }

    .gambar {
        align-items: center;
        justify-content: center;
        display: flex;
    }
</style>


<body style="background-image: url(../assets/slider/detail.jpg); background-size: 512px;">
    <div class="container">
        <div class="row">
            <div class="col m4">
                <div class="card">
                    <div class="gambar">
                        <img src="../assets/img/<?= $tabel_product["img"]; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col m8">
                <div class="card">
                    <div class="keterangan">

                        <table style="color: white;">
                            <tr>
                                <td><b>Nama</b></td>
                                <td><b> : </b></td>
                                <td><?= $tabel_product['nama'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Harga</b></td>
                                <td><b> : </b></td>
                                <td><?= $tabel_product['harga'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Ukuran</b></td>
                                <td><b> : </b></td>
                                <td><?= $tabel_product['ukuran'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Stok Produk</b></td>
                                <td><b> : </b></td>
                                <td><?= $tabel_product['stok'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">

                <div class="card">
                    <div class="penjelasan" style="color: white;">
                        <h4 class="center">Detail</h4>
                        <p class="center"><?= $tabel_product['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="waves-effect grey darken-4 lighten-1 btn-small">
            <i class="material-icons right">chevron_left</i><a href="../index.php" style="color: white;">Kembali</a>
        </button>
    </div>

</body>

</html>