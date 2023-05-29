<h2>Add Kelas</h2>

<form action="siswa_proses.php" method="post">
    <table>
        <tr>
            <td>ID SISWA</td>
            <td><input type="text" name="id_siswa"></td>
        </tr>
        <tr>
            <td>ID KELAS</td>
            <td><textarea name="id_kelas" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>ID WALI</td>
            <td><textarea name="id_wali" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>NAMA SISWA</td>
            <td><textarea name="nama_siswa" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td> TANGGAL LULUS</td>
            <td><textarea name="tanggal_lulus" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>