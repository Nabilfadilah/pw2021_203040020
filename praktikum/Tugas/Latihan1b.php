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
    <title>Latihan1b</title>
</head>
<body>

    <table border = "1" cellspacing = "0" cellspacing = "10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
            <tr>
            <?php else : ?>
            <tr>
            <?php endif; ?>
            <?php for ($j = 0; $j < 1; $j++) : ?>
                <th><?= "Baris $i"; ?></th>
                <?php endfor; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?= "Baris ke $i, kolom ke $j" ?></td>
                <?php endfor; ?>
            </tr>

            <?php endfor; ?>

            </tr>
    </table>
    
</body>
</html>