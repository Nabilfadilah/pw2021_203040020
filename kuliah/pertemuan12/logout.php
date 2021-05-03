<?php
/* 
Mohammad Nabil Fadilah
203040020
https://github.com/Nabilfadilah/pw2021_203040020
Pertemuan 12 - 3 Mei 2021
Mempelajari mengenai fitur login dan registrasi 
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
