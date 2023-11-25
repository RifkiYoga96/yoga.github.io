<?php
// Koneksi ke database (gantilah dengan informasi database Anda)
include"../koneksi.php";
// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari URL
$nama_pelanggan = $_GET['nama_pelanggan'];
$email = $_GET['email'];
$password = $_GET['password'];
$nama_kamar = $_GET['nama_kamar'];
$tgl_masuk = $_GET['tgl_masuk'];
$tgl_keluar = $_GET['tgl_keluar'];
$total_harga = $_GET['total_harga'];

// Simpan data reservasi ke tabel
$sql_insert_reservasi = "INSERT INTO reservasi (id_kamar, id_pelanggan, tgl_masuk, tgl_keluar, total_harga) VALUES (
    (SELECT id_kamar FROM kamar WHERE nama_kamar = '$nama_kamar'),
    (SELECT id_pelanggan FROM pelanggan WHERE nama_pelanggan = '$nama_pelanggan'),
    '$tgl_masuk',
    '$tgl_keluar',
    $total_harga
)";

if ($koneksi->query($sql_insert_reservasi) === TRUE) {
    echo "Reservasi berhasil disimpan.";
} else {
    echo "Error: " . $sql_insert_reservasi . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
