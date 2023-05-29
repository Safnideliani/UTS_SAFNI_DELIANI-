<?php

require_once "inc/Koneksi.php";
require_once "app/Wali.php";

$wali = new App\Wali();

if (isset($_POST['btn_simpan'])) {
    $wali->simpan();
    header("location:index.php?hal=wali_tampil");
}

if (isset($_POST['btn_update'])) {
    $wali->update();
    header("location:index.php?hal=wali_tampil");
}