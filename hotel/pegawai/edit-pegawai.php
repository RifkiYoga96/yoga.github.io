<?php
include '../koneksi.php';
$id_pegawai = $_GET['id_pegawai'];
$data = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <link rel="stylesheet" href="../edit.css">
    <div>
        <h3>Edit Table Pegawai</h3>
        <form method="post" action="edit-aksi-pegawai.php">
            <table>
                <tr>
                    <td>ID Pegawai</td>
                    <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Pegawai</td>
                    <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td><input type="text" name="gaji" value="<?php echo $tampil['gaji']; ?>"></td>
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
                    <td>Level</td>
                    <td><input type="text" name="level" value="<?php echo $tampil['level']; ?>"></td>
                </tr>
            </table>
            <a href="pegawai.php"><button class="buton1">KEMBALI</button></a>
            <input class="buton2"type="submit" value="SIMPAN">
        </form>
    </div>
    <?php
}
?>