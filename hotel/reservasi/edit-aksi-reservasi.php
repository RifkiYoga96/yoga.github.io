<?php
include '../koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$id_kamar = $_POST['id_kamar'];
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$total_harga = $_POST['total_harga'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi', id_kamar='$id_kamar',
id_pelanggan='$id_pelanggan',tgl_masuk='$tgl_masuk',tgl_keluar='$tgl_keluar',total_harga='$total_harga' WHERE id_reservasi='$id_reservasi'");
header("location: reservasi.php"); 

?>