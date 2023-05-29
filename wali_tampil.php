<?php

$wali = new App\Wali;
$rows = $wali->tampil();

?>

<h2>WALI</h2>

<a href="index.php?hal=wali_input" class="btn">Add Wali</a>

<table>
    <tr>
        <th>ID WALI</th>
        <th>ID KELAS</th>
        <th>NAMA WALI</th>
        <th>TANGGAL LAHIR</th>
        <th>EDIT</th>
        <th>DELETE</th>s
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_wali']; ?></td>
        <td><?php echo $row['id_kelas']; ?></td>
        <td><?php echo $row['nama_wali']; ?></td>
        <td><?php echo $row['tanggal_lahir']; ?></td>
        <td><a href="index.php?hal=wali_edit&id=<?php echo $row['id_wali']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=wali_delete&id=<?php echo $row['id_wali']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
