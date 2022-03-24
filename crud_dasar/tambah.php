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
    <title>tambah data | yuda</title>
</head>
<body>
    <form role="form" action="insert.php" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input autocomplete="off" required="" type="text" name="nama" class="form-control" placeholder="masukkan nama anda">
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input autocomplete="off" required="" type="text" name="nik" class="form-control" placeholder="masukkan nik anda">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input autocomplete="off" required="" type="date" name="tanggal" class="form-control">
            </div>
            <div class="form-group">
                <label>Tujuan</label>
                <input autocomplete="off" required="" type="text" name="tujuan" class="form-control" placeholder="masukkan tujuan anda">
            </div>
            <div class="form-group">
                <label>Catatan</label>
                <textarea autocomplete="off" required="" name="catatan" class="form-control"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" onclick = "return confirm('yakin ingin menambahkan data?')">tambah data</button>
        </div>
    </form>
</body>
</html>