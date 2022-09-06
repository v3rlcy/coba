<?php
require 'function.php';
$tbabsen = query("SELECT * FROM tbabsen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
</head>
<body>
    <a href="tambah.php">TAMBAHKAN DATA</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Hoby</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($tbasben as $row): ?>
            <tr>
                <td><?php $i = 1; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick = "return confirm ('yakin?');"></a>
                </td>
                <td><?php echo $row["nama"];?></td>
                <td><?php echo $row["nis"];?></td>
                <td><?php echo $row["hobi"];?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
</body>
</html>