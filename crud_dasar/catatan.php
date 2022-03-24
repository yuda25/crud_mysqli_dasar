<?php
include('koneksi.php');
$query = "SELECT * FROM tb_perjalanan";
$result = mysqli_query($conn , $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catatan | yuda</title>
</head>
<body>
    <a href="tambah.php">tambah data</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['nik']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['tujuan']; ?></td>
                <td><?php echo $row['catatan']; ?></td>
                <td><a href="hapus.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('yakin ingin di hapus?')">hapus</a> |
                <a href="form_edit.php?id=<?php echo$row['id']; ?>">edit</a></td>
            </tr>
            <?php 
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>