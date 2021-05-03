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

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';


// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>";
} else {
  echo "data gagal dihapus!";
}
