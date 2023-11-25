<link rel="stylesheet" href="../input.css">

<div>
<h3>INPUT DATA PEGAWAI</h3>
    <form method="post" action="input-aksi-pegawai.php">
        <table>
            <tr>
                <td>ID Pegawai</td>
                <td><input type="number" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>sandi</td>
                <td><input type="text" name="sandi"></td>
            </tr>
            <td>
                <?php echo $tampil['level'] ?>
            </td>
        </table>
        <a href="pegawai.php"><button class="buton1">KEMBALI</button></a>
        <input class="buton2" type="submit" value="SIMPAN">
        
    </form>
</div>
