<link rel="stylesheet" href="../edit.css">
<?php
include '../koneksi.php';
$id_pelanggan = $_GET['id_pelanggan'];
$data = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <div>
        <h3>Edit Table Pelanggan</h3>
        <form method="post" action="edit-aksi-pelanggan.php">
            <table>
                <tr>
                    <td>ID Pelanggan</td>
                    <td><input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama_pelanggan" value="<?php echo $tampil['nama_pelanggan']; ?>"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" value="<?php echo $tampil['email']; ?>"></td>
                </tr>
                <tr>
                    <td>sandi</td>
                    <td><input type="text" name="sandi" value="<?php echo $tampil['sandi']; ?>"></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td><input type="text" name="level" value="<?php echo $tampil['level']; ?>"></td>
                </tr>
            </table>
            <a href="pelanggan.php"><button class="buton1">KEMBALI</button></a>
            <input class="buton2" type="submit" value="SIMPAN">
        </form>
    </div>

    <?php
}
?>