<?php
require 'functions.php';

$id = $_GET['id'];
$tp = query("SELECT * FROM tabel_product WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.herf = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.herf = 'admin.php';
            </script>"
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Ubah Data Produk</h2>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" id="id" value="<?= $tp['id']; ?>">
            <li>
                <label for="img">Foto :</label><br>
                <input type="text" name="img" id="img" required value="<?= $tp['img']; ?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $tp['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="ukuran">Ukuran :</label><br>
                <input type="text" name="ukuran" id="ukuran" required value="<?= $tp['ukuran']; ?>"><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $tp['deskripsi']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $tp['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required value="<?= $tp['stok']; ?>"><br><br>
            </li>
            <li>
                <label for="produk">Produk :</label><br>
                <input type="text" name="produk" id="produk" required value="<?= $tp['produk']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
    
</body>
</html>