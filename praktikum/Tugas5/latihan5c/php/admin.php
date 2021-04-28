<?php 
// menghubungkan dengan file php lainya
require 'functions.php';

// melakukan query 
$tabel_product = query("SELECT * FROM tabel_product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="add">
            <button><a href="tambah.php">Tambah Data</a></button>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Ukuran</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Produk</th>
            </tr>
        </thead>   
        <?php $i = 1 ?>
        <?php foreach ($tabel_product as $tp) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <button><a href="hapus.php?id=<? $tp['id']; ?>" onclick="return confirm('Hapus Data??');">Hapus</a></button>
                </td>
                <td><img src="../assets/img/<?= $tp["img"]; ?>" alt=""></td>
                <td><?= $tp["nama"] ?></td>
                <td><?= $tp["ukuran"] ?></td>
                <td><?= $tp["deskripsi"] ?></td>
                <td><?= $tp["harga"] ?></td>
                <td><?= $tp["stok"] ?></td>
                <td><button><?= $tp["produk"] ?></button></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?> 
    </div>
    
</body>
</html>