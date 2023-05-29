<?php

$id = $_GET['id'];

$siswa = new App\Siswa();
$rows = $siswa->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=siswa_tampil">Kembali</a>
</div>