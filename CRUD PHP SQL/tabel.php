<?php 


require 'fungsi.php';

$satu = tampil("SELECT*FROM warga_kk ");


?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <a href = "tambah.php">Tambah Data</a>
    <table border = "1">
        <tr>
            <th>Nomor KK</th>
                <th>RT</th>
                    <th>RW</th>
                        <th>Nama KK</th>
                            <th>Status</th>
        </tr>

        <?php foreach ($satu as $himpunan): ?>

        <tr>
            <td><?php echo $himpunan["nokk"] ?></td>
                <td><?php echo $himpunan["RT"] ?></td>
                     <td><?php echo $himpunan["RW"] ?></td>
                         <td><?php echo $himpunan["namakk"] ?></td>
                             <td><?php echo $himpunan["status"] ?></td>
                             <td>
                             <a href = "delete.php?id=<?php echo $himpunan ["id"] ?>"onclick ="return confirm('Apakah anda yakin ?')">Delete</a>
                             <a href = "update.php?id=<?php echo $himpunan ["id"] ?>">Update</a>
                             </td>
        </tr>


        <?php endforeach; ?>

    </table>

</body>
</html>