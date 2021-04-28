<?php 
/*
Mohammad Nabil Fadilah
203040020
Shift Rabu 09:00 WIB
https://github.com/Nabilfadilah/Praktikum_pw2021_203040020
*/
?>

<?php 
$kata = ["ada", "abel", "men", "pung", "nilai"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a</title>
    <style>
        .kotak {
            font-family: arial;
            border: 1px solid black;
            padding: 10px;
            padding-bottom: 30px;
            margin-right: 60%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
    for ($i = 1; $i <= 1; $i++ ) { ?>
        <div class="kotak"><?php echo "Array $kata[0]lah suatu vari$kata[1] yang dapat $kata[2] am$kata[3] banyak $kata[4] "; ?></div>
    <?php } ?>
    
</body>
</html>