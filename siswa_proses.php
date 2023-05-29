<?php

require_once "inc/Koneksi.php";
require_once "app/Siswa.php";

$siswa = new App\Siswa();

if (isset($_POST['btn_simpan'])) {
    $siswa->simpan();
    header("location:index.php?hal=siswa_tampil");
}

if (isset($_POST['btn_update'])) {
    $siswa->update();
    header("location:index.php?hal=siswa_tampil");
}