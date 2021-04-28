<?php 

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<scipt>
                alert('Data Berhasil dihapus!');
                document.location.href = 'admin.php';
            </scipt>"
} else {
    echo "<script>
                alert('Data Gagal dihapus!');
                document.location.href = 'admin.php';
            </script>"
}
?>