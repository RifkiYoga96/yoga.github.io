<?php
include "../koneksi.php";

$id_pegawai= $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$gaji = $_POST['gaji'];
$email = $_POST['email'];
$sandi = $_POST['sandi'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO pegawai VALUES('$id_pegawai','$nama_pegawai','$level','$gaji','$email','$sandi')");
header("location:pegawai.php");
?>