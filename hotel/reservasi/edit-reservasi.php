<link rel="stylesheet" href="../edit.css">
<?php
include '../koneksi.php';
$id_reservasi = $_GET['id_reservasi'];
$data = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE id_reservasi='$id_reservasi'");
while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <div>
        <h3>Edit Table Reservasi</h3>
        <form method="post" action="edit-aksi-reservasi.php">
            <table>
                <tr>
                    <td>ID Reservasi</td>
                    <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
                </tr>
                <tr>
                    <td>ID Kamar</td>
                    <td><input type="text" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
                </tr>
                <tr>
                    <td>ID Pelanggan</td>
                    <td><input type="text" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td><input type="text" name="tgl_masuk" value="<?php echo $tampil['tgl_masuk']; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Keluar</td>
                    <td><input type="text" name="tgl_keluar" value="<?php echo $tampil['tgl_keluar']; ?>"></td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td><input type="text" name="total_harga" value="<?php echo $tampil['total_harga']; ?>"></td>
                </tr>
            </table>
            <a href="reservasi.php"><button class="buton1">KEMBALI</button></a>
            <input class="buton2" type="submit" value="SIMPAN">
        </form>
    </div>
    <?php
}
?>