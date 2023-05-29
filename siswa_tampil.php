<?php

$siswa = new App\Siswa;
$rows = $siswa->tampil();

?>

<h2>SISWA</h2>

<a href="index.php?hal=siswa_input" class="btn">Add Siswa</a>

<table>
    <tr>
        <th>ID SISWA</th>
        <th>ID KELAS</th>
        <th>ID WALI</th>
        <th>ID NAMA SISWA</th>
        <th>ID TANGGAL LULUS</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_siswa']; ?></td>
        <td><?php echo $row['id_kelas']; ?></td>
        <td><?php echo $row['id_wali']; ?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['tanggal_lulus']; ?></td>
        <td><a href="index.php?hal=siswa_edit&id=<?php echo $row['id_siswa']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=siswa_delete&id=<?php echo $row['id_siswa']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
