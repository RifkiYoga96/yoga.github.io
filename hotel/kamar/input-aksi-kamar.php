<?php
include "../koneksi.php";

$id_kamar= $_POST['id_kamar'];
$nama_kamar = $_POST['nama_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO kamar VALUES('$id_kamar','$nama_kamar','$tipe_kamar','$harga')");
header("location:kamar.php");
?>