<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<?php 
$nama = [
    "1" => "Mohammad Salah", 
    "2" => "Cristiano Ronaldo", 
    "3" => "Lionel Messi", 
    "4" => "Zlatan Ibrahimmovic", 
    "5" => "Neymar Jr"];
$namabaru = [
    "1" => "Cristiano Ronaldo",
    "2" => "Lionel Messi", 
    "3" => "Luca Modric", 
    "4" => "Mohammad Salah", 
    "5" => "Neymar Jr", 
    "6" => "Sadio Mane", 
    "7" => "Zlatan Ibrahimovic"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
<table border = "1" cellspacing = "0" cellspacing = "10">
<tr>
<th></th>
<h3>Daftar pemain bola terkenal</h3>
<?php 
    foreach ($nama as $pemain => $bola) : ?>
        <div class="kotak"><li><?php echo "$pemain.  $bola" ?></li></div>
<?php endforeach ?>
<h3>Daftar pemain bola terkenal baru</h3>
<?php 
    foreach ($namabaru as $player => $kita) : ?>
        <div class="kotak"><li><?php echo "$player. $kita" ?></li></div>
<?php endforeach ?>
</tr>
</table>
    
</body>
</html>