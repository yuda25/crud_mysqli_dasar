<?php
include('koneksi.php');

$id      = $_POST['id']; 
$nama    = $_POST['nama'];
$nik     = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$tujuan  = $_POST['tujuan'];
$catatan = $_POST['catatan'];

$query = "INSERT INTO tb_perjalanan (nama , nik , tanggal , tujuan , catatan) VALUES ('$nama' , '$nik' , '$tanggal' , '$tujuan' , '$catatan')";

if (mysqli_query($conn , $query)){
    header('location:catatan.php');
}else{
    echo "ERROR. data tidak berhasil di tambahkan " . mysqli_error($conn);
}
mysqli_close($conn);
?>