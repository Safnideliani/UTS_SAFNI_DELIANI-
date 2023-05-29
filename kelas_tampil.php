<?php

$kelas = new App\Kelas;
$rows = $kelas->tampil();

?>

<h2>KELAS</h2>

<a href="index.php?hal=kelas_input" class="btn">Add Kelas</a>

<table>
    <tr>
        <th>ID KELAS</th>
        <th>KELAS</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_kelas']; ?></td>
        <td><?php echo $row['kelas']; ?></td>
        <td><a href="index.php?hal=kelas_edit&id=<?php echo $row['id_kelas']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=kelas_delete&id=<?php echo $row['id_kelas']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
