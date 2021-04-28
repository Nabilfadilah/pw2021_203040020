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
    <title>Latihan2a</title>
    <style>
        .style1 {
            width: 50%;
            margin: auto;
            border: 2px solid black;
            box-shadow: 0 0 15px #000;
            border-radius: 5px;
        }

        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin-left: 15px;
        }
    </style>
</head>
<body>


<?php 
function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2") {
    return "<div class=$style1><p class=$style2>$tulisan</p></div>";
}

echo gantiStyle("Selamat datang di praktikum pw");

?>
    
</body>
</html>