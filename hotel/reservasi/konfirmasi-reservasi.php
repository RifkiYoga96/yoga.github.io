<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_reservasi"])) {
    $id_reservasi = $_GET["id_reservasi"];

    // Ambil data reservasi
    $sql_reservasi = "SELECT * FROM reservasi WHERE id_reservasi = $id_reservasi";
    $result_reservasi = mysqli_query($koneksi, $sql_reservasi);
    $data_reservasi = mysqli_fetch_assoc($result_reservasi);

    // Transfer data ke tabel transaksi
    $sql_insert_transaksi = "INSERT INTO transaksi (id_reservasi, tgl_masuk, tgl_keluar, total_harga)
                             VALUES ('$id_reservasi', '{$data_reservasi['tgl_masuk']}', '{$data_reservasi['tgl_keluar']}', '{$data_reservasi['total_harga']}')";

    if (mysqli_query($koneksi, $sql_insert_transaksi)) {
        // Hapus data reservasi setelah berhasil dikonfirmasi
        $sql_hapus_reservasi = "DELETE FROM reservasi WHERE id_reservasi = $id_reservasi";
        mysqli_query($koneksi, $sql_hapus_reservasi);

        echo "Data Berhasil Di Konfirmasi";
    } else {
        echo "Error: " . $sql_insert_transaksi . "<br>" . mysqli_error($koneksi);
    }
}
?>
