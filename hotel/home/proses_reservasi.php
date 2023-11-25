<?php
// Pastikan Anda memiliki koneksi database yang sesuai di sini
include "../koneksi.php";

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nama_pelanggan = $_GET["nama_pelanggan"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $nama_kamar = $_GET["nama_kamar"];
    $tgl_masuk = $_GET["tgl_masuk"];
    $tgl_keluar = $_GET["tgl_keluar"];
    $total_harga = $_GET["total_harga"];

    // Simpan data reservasi ke tabel reservasi
    $sql_insert_reservasi = "INSERT INTO reservasi (id_kamar, id_pelanggan, tgl_masuk, tgl_keluar, total_harga)
                             VALUES ((SELECT id_kamar FROM kamar WHERE nama_kamar = '$nama_kamar'),
                                     (SELECT id_pelanggan FROM pelanggan WHERE email = '$email'),
                                     '$tgl_masuk', '$tgl_keluar', $total_harga)";

    if (mysqli_query($koneksi, $sql_insert_reservasi)) {
        echo "Pemesanan berhasil. ID Reservasi: " . mysqli_insert_id($koneksi);
    } else {
        echo "Error: " . $sql_insert_reservasi . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
