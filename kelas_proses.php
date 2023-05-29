<?php

require_once "inc/Koneksi.php";
require_once "app/Kelas.php";

$kelas = new App\Kelas();

if (isset($_POST['btn_simpan'])) {
    $kelas->simpan();
    header("location:index.php?hal=kelas_tampil");
}

if (isset($_POST['btn_update'])) {
    $kelas->update();
    header("location:index.php?hal=kelas_tampil");
}