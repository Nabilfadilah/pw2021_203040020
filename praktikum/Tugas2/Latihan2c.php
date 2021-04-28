<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<?php 
    function tumpukanBola($tumpukan) {
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>

    <style>
        .bola {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 5px;
            border-radius: 50px;
            display: inline-block;
            border: 3px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="bola"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>
    
</body>
</html>