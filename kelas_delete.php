<?php

$id = $_GET['id'];

$kelas = new App\Kelas();
$rows = $kelas->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=kelas_tampil">Kembali</a>
</div>