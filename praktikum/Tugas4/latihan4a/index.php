<?php 

$conn = mysqli_connect("localhost", "root", "");

mysqli_select_db($conn, "pw_tubes_203040020");

$result = mysqli_query($conn, "SELECT * FROM tabel_product");

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
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["ukuran"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>
                    <td><?= $row["harga"] ?></td>
                    <td><?= $row["stok"] ?></td>
                    <td><button><?= $row["produk"] ?></button></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile ?>
    </div>
    
</body>
</html>