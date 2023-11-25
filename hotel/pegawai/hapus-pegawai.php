<?php
include "../koneksi.php";

$id_pegawai = $_GET['id_pegawai'];
 
mysqli_query($koneksi,"DELETE FROM pegawai where id_pegawai='$id_pegawai'");
header("location:pegawai.php");
?>