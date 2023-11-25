<?php
include "../koneksi.php";

$id_pelanggan= $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$sandi = $_POST['sandi'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('$id_pelanggan','$nama_pelanggan','$email','$sandi','$level')");
header("location:pelanggan.php");
?>