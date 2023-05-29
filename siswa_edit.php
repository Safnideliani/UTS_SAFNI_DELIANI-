<?php

$id = $_GET['id'];
$siswa = new App\Siswa();

$row = $siswa->edit($id);
?>


<h2>Edit Siswa</h2>

<form action="siswa_proses.php" method="post">
    <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">
    <table>
        <tr>
            <td>ID SISWA</td>
            <td><input type="text" name="id_siswa" value="<?php echo $row['id_siswa']; ?>"></td>
        </tr>
        <tr>
            <td>ID KELAS</td>
            <td><textarea name="id_kelas" id="" cols="30" rows="10"><?php echo $row['id_kelas']; ?></textarea></td>
        </tr>
        <tr>
            <td>ID WALI</td>
            <td><textarea name="id_wali" id="" cols="30" rows="10"><?php echo $row['id_wali']; ?></textarea></td>
        </tr>
        <tr>
            <td>NAMA SISWA</td>
            <td><textarea name="nama_siswa" id="" cols="30" rows="10"><?php echo $row['nama_siswa']; ?></textarea></td>
        </tr>
        <tr>
            <td>TANGGAL LULUS</td>
            <td><textarea name="tanggal_lulus" id="" cols="30" rows="10"><?php echo $row['tanggal_lulus']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>