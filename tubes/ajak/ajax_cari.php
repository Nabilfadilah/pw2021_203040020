<?php
/* 
Mohammad Nabil Fadilah
203040020
https://github.com/Nabilfadilah/pw2021_203040020
Pertemuan 13 - 4 Mei 2021
Mempelajari mengenai fitur ajak & upload gambar 
*/
?>

<?php
require '../php/functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($tabel_product as $tp) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $tp['gambar']; ?>" width="60"></td>
      <td><?= $tp['nama']; ?></td>
      <td>
        <a href="detail.php?id= <?= $tp['id']; ?>">Lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>