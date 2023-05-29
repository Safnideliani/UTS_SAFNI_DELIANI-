<?php

$id = $_GET['id'];
$kelas = new App\Kelas();

$row = $kelas->edit($id);
?>

<h2>Edit Kelas</h2>

<form action="kelas_proses.php" method="post">
    <input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas']; ?>">
    <table>
        <tr>
            <td>ID KELAS</td>
            <td><input type="text" name="id_kelas" value="<?php echo $row['id_kelas']; ?>"></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><textarea name="kelas" id="" cols="30" rows="10"><?php echo $row['kelas']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>