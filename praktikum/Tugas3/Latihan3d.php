<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<?php

$bola = [
    [
        'nama' => 'Cristiano Ronaldo',
        'club' => 'Juventus',
        'main' => '100',
        'gol' => '76',
        'assist' => '30'
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<body>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>


        <?php $no = 1;
        foreach ($bola as $b) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $b["nama"] ?></td>
                <td><?= $b["club"] ?></td>
                <td><?= $b["main"] ?></td>
                <td><?= $b["gol"] ?></td>
                <td><?= $b["assist"] ?></td>
            </tr>
        <?php endforeach ?>

            <tr>
                <th>Jumlah</th>
            </tr>
            
            <tr>
                <td>669</td>
                <td>367</td>
                <td>195</td>
            </tr>


    </table>


</body>

</html>