<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<?php

$fashion = [
    [
        "nama" => "Sepatu Commpas",
        "ukuran" => "41",
        "deskripsi" => "Sepatu lokal dengan kualitas bagus cocok untuk anak muda.",
        "harga" => "Rp. 500.000",
        "stok" => "123",
        "produk" => "beli" 
    ],
    [
        "nama" => "Hoodie Screamous Blue Dark",
        "ukuran" => "L",
        "deskripsi" => "Brand lokal yang kualitas, dengan harga yang terjangkau.",
        "harga" => "Rp. 250.000",
        "stok" => "98",
        "produk" => "beli" 
    ],
    [
        "nama" => "Sandal Eiger",
        "ukuran" => "42",
        "deskripsi" => "Brand lokal dari Eiger Indonesia yang tidak diragukan lagi kualitasnya",
        "harga" => "Rp. 150.000",
        "stok" => "57",
        "produk" => "beli" 
    ],
    [
        "nama" => "Hoodie Screamous Yellow",
        "ukuran" => "41",
        "deskripsi" => "Brand lokal yang kualitas, dengan harga yang terjangkau.",
        "harga" => "Rp. 250.000",
        "stok" => "13",
        "produk" => "beli" 
    ],
    [
        "nama" => "Sepatu Converse",
        "ukuran" => "41",
        "deskripsi" => "Sepatu kekinian yang tak pernah ketinggalan zaman.",
        "harga" => "Rp. 699.000",
        "stok" => "16",
        "produk" => "beli" 
    ],
    ];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Latihan3e</title>
    </head>
    <body>

    <div class="container">
        <h1>Gordon Industries</h1>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>GAMBAR</th>
                <th>NAMA</th>
                <th>UKURAN</th>
                <th>DESKRIPSI</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>PRODUK</th>
            </tr>
        </thead>

        <?php $no = 1;
        foreach ($fashion as $fsh) : ?>
            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><img src="img/compas.jpg" alt=""></td>
                <td>Sepatu Commpas</td>
                <td>41</td>
                <td>Sepatu lokal dengan kualitas bagus cocok untuk anak muda.</td>
                <td>Rp.500.000</td>
                <td>23</td>
                <td><button>beli</button></td>    
            </tr>

            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><img src="img/Hdd.jpg" alt=""></td>
                <td>Hoodie Screamous Dark</td>
                <td>L</td>
                <td>Brand lokal yang kualitas, dengan harga yang terjangkau.</td>
                <td>Rp.250.000</td>
                <td>56</td>
                <td><button>beli</button></td>    
            </tr>

            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><img src="img/sandal.jpg" alt=""></td>
                <td>Sandal Eiger</td>
                <td>40</td>
                <td>Brand lokal dari Eiger Indonesia yang tidak diragukan lagi kualitasnya.</td>
                <td>Rp.150.000</td>
                <td>324</td>
                <td><button>beli</button></td>    
            </tr>

            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><img src="img/scam.jpg" alt=""></td>
                <td>Hoodie Screamous Yellow</td>
                <td>M</td>
                <td>Brand lokal yang kualitas, dengan harga yang terjangkau.</td>
                <td>Rp.250.000</td>
                <td>12</td>
                <td><button>beli</button></td>    
            </tr>

            <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><img src="img/vanss.jpg" alt=""></td>
                <td>Sepatu Converse</td>
                <td>41</td>
                <td>Sepatu kekinian yang tak pernah ketinggalan zaman.</td>
                <td>Rp.699.000</td>
                <td>45</td>
                <td><button>beli</button></td>    
            </tr>

            
            
        <?php endforeach ?>

    </table>
    </body>
</html>
