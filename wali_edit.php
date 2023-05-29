<?php

$id = $_GET['id'];
$wali = new App\Wali();

$row = $wali->edit($id);
?>

<h2>Edit Wali</h2>

<form action="wali_proses.php" method="post">
    <input type="hidden" name="id_wali" value="<?php echo $row['id_wali']; ?>">
    <table>
        <tr>
            <td>ID Wali</td>
            <td><input type="text" name="id_wali" value="<?php echo $row['id_wali']; ?>"></td>
        </tr>
        <tr>
            <td>ID KELAS</td>
            <td><textarea name="id_kelas" id="" cols="30" rows="10"><?php echo $row['id_kelas']; ?></textarea></td>
        </tr>
        <tr>
            <td>NAMA WALI</td>
            <td><input type="text" name="nama_wali" value="<?php echo $row['nama_wali']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><textarea name="tanggal_lahir" id="" cols="30" rows="10"><?php echo $row['tanggal_lahir']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>