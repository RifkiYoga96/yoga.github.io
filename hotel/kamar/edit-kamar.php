
    <link rel="stylesheet" href="../edit.css">
<?php
include '../koneksi.php';
$id_kamar = $_GET['id_kamar'];
$data = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <div>
        <h3>Edit Data Kamar</h3>
        <form method="post" action="edit-aksi-kamar.php">
            <table>
                <tr>
                    <td>ID Kamar</td>
                    <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Kamar</td>
                    <td><input type="text" name="nama_kamar" value="<?php echo $tampil['nama_kamar']; ?>"></td>
                </tr>
                <tr>
                    <td>Tipe Kamar</td>
                    <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
                </tr>
                
            </table>
            <a href="kamar.php"><button class="buton1">KEMBALI</button></a>
            <input class="buton2" type="submit" value="SIMPAN">
        </form>

    </div>
    <?php
}
?>