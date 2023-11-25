<?php
include '../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$sandi = $_POST['sandi'];
$level = $_POST['level'];

mysqli_query($koneksi,"UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan',
email='$email',sandi='$sandi',level='$level' WHERE id_pelanggan='$id_pelanggan'");
header("location: pelanggan.php"); 

?>