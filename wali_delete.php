<?php

$id = $_GET['id'];

$wali = new App\Wali();
$rows = $wali->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=wali_tampil">Kembali</a>
</div>