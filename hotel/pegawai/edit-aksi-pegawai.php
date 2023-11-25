<?php
include '../koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$gaji = $_POST['gaji'];
$email = $_POST['email'];
$sandi = $_POST['sandi'];
$level = $_POST['level'];

mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai',
level='$level',gaji='$gaji',email='$email',sandi='$sandi' WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php"); 

?>