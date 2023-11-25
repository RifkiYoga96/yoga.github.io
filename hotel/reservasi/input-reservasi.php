<link rel="stylesheet" href="../input.css">
<div>
<h3>INPUT DATA RESERVASI</h3>
    <form method="post" action="input-aksi-reservasi.php">
        <table>
            <tr>
                <td>ID Reservasi</td>
                <td><input type="text" name="id_reservasi"></td>
            </tr>
            <tr>
                <td>ID Kamar</td>
                <td><input type="text" name="id_kamar"></td>
            </tr>
            <tr>
                <td>ID Pelanggan</td>
                <td><input type="text" name="id_pelanggan"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td><input type="text" name="tgl_masuk"></td>
            </tr>
            <tr>
                <td>Tanggal Keluar</td>
                <td><input type="text" name="tgl_keluar"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input type="number" name="tgl_keluar"></td>
            </tr>
        </table>
        <a href="reservasi.php"><button class="buton1">KEMBALI</button></a>
            <input class="buton2" type="submit" value="SIMPAN">
    </form>
</div>
