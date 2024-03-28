<?php

include 'koneksi.php';

//show data
$query = "SELECT * FROM kendaraan";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h4>Nama kendaraan</h4>
    <table class="table table-striped" style="width:100%">
        <tr>
            <th>id</th>
            <th>nama kendaraan</th>
            <th>jenis kendaraan</th>
            <th>merk kendaraan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td> <?= $row['id'] ?>       </td>
            <td>  <?= $row['nama_kendaraan'] ?>      </td>
            <td>  <?= $row['jenis_kendaraan'] ?>      </td>
            <td>  <?= $row['merk_kendaraan'] ?>      </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <h2>Tambah kendaraan</h2>
    <form action="insert.php" method="POST">
        kendaraan: <input type="text" name="nama_kendaraan" required><br>
        jenis kendaraan: <input type="text" name="jenis_kendaraan" required><br>
        merk kendaraan: <input type="text" name="merk_kendaraan" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>


