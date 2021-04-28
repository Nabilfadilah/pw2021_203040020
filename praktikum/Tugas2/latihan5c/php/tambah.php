<?php
// require 'functions.php';

// if (isset($_POST['tambah'])) {
//     if (tambah($_POST) > 0) {
//         echo "<script>
//                 alert('Data berhasil ditambahkan!');
//                 document.location.herf = 'admin.php';
//             </script>";
//     } else {
//         echo "<script>
//                 alert('Data Gagal ditambahkan!');
//                 document.location.herf = 'admin.php';
//             </script>"
//     }
// }

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
    <h2>Form Tambah Data Produk</h2>
    <form action="" method="post">
        <ul>
            <li>
                <label for="img">Foto :</label><br>
                <input type="text" name="img" id="img" required><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="ukuran">Ukuran :</label><br>
                <input type="text" name="ukuran" id="ukuran" required><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="stok">Stok :</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
            </li>
            <li>
                <label for="produk">Produk :</label><br>
                <input type="text" name="produk" id="produk" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
    
</body>
</html>