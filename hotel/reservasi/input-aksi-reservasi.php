<?php
include "../koneksi.php";

$id_reservasi= $_POST['id_reservasi'];
$id_kamar = $_POST['id_kamar'];
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$total_harga = $_POST['total_harga'];

mysqli_query($koneksi, "INSERT INTO reservasi VALUES('$id_reservasi','$id_kamar','$id_pelanggan','$tgl_masuk','$tgl_keluar',$total_harga)");
header("location:reservasi.php");
?>