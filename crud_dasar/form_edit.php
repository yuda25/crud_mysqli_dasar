<?php
$id = $_GET['id'];
include('koneksi.php');

$query = "SELECT * FROM tb_perjalanan WHERE id='$id'";
$result = mysqli_query($conn , $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form edit | yuda</title>
</head>
<body>
    <form role="form" action="edit.php" method="post">
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input required="" autocomplete="off" type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>"> 
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input required="" autocomplete="off" type="text" name="nik" class="form-control" value="<?php echo $row['nik']; ?>"> 
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input required="" autocomplete="off" type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>"> 
            </div>
            <div class="form-group">
                <label>Tujuan</label>
                <input required="" autocomplete="off" type="text" name="tujuan" class="form-control" value="<?php echo $row['tujuan']; ?>"> 
            </div>
            <div class="form-group">
                <label>Catatan</label>
                <textarea required="" autocomplete="off" type="text" name="catatan" class="form-control"><?php echo $row['catatan']; ?></textarea>
            </div>
        </div>

        <div class="card-footer">
            <a href="catatan.php">batal</a>
            <button type="submit" onclick = "return confirm('data akan segera di edit');">Update</button>
        </div>
        <?php
        }
        mysqli_close($conn);
        ?>
    </form>
</body>
</html>