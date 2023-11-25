<?php
include "../koneksi.php";

$id_reservasi = $_GET['id_reservasi'];

mysqli_query($koneksi,"DELETE FROM reservasi where id_reservasi='$id_reservasi'");
header("location:reservasi.php");
?>