<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="3">

    <?php for($i = 1; $i <= 6; $i++) : ?>
    <tr>
    <?php for($j = 1; $j <= 6; $j++) : ?>

    <?php if(($i + $j) % 2 == 1) { ?>
        <td bgcolor="salmon"></td>
    <?php } else if(($i + $j) % 2 == 0) { ?>
        <td bgcolor="skyblue"></td>
    <?php } ?>

    <?php endfor; ?>
    </tr>
    <?php endfor; ?>

    </table>
    
</body>
</html>