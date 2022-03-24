<?php
$id = $_GET['id'];
include('koneksi.php');

$query = "DELETE FROM tb_perjalanan WHERE id='$id'";

if(mysqli_query($conn , $query)) {
    header("location:catatan.php");
}else{
    echo "ERROR, data gagal di hapus" . mysql_error($conn);
}
mysqli_close($conn);
?>