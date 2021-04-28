<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<?php 

$pemainbola = [
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi"  => "Barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "Ac Milan"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
    </style>
</head>
<body>

<h1>Daftar pemain bola terkenal dan clubnya</h1>
    <?php 
        foreach ($pemainbola as $player => $club) : ?>
            <li><?php echo "$player : $club" ?></li>
    <?php endforeach ?>
    
</body>
</html>