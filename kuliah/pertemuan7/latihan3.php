<?php 
/* 
Mohammad Nabil Fadilah
203040020
https://github.com/Nabilfadilah/pw2021_203040020
Pertemuan 7 - 15 Maret 2021
Mempelajari mengenai GET & POST pada PHP 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
    
</body>
</html>