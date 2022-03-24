<?php  
include('koneksi.php');

$id      = $_POST['id']; 
$nama    = $_POST['nama'];
$nik     = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$tujuan  = $_POST['tujuan'];
$catatan = $_POST['catatan'];

$query = "UPDATE tb_perjalanan SET nama='$nama' , nik='$nik' , tanggal='$tanggal' , tujuan='$tujuan' , catatan='$catatan' WHERE id='$id' ";

if(mysqli_query($conn , $query)){
    header('location:catatan.php');
}else{
    echo 'ERROR, data gagal di update ' . mysqli_error($conn);
}
mysqli_close($conn);
?>