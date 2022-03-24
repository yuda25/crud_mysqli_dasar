<?php
$conn = mysqli_connect("localhost","root","","crud_dasar");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " .mysqli_connect_error();
}else{
    // echo "yuda ganteng";
}
?>