<html>
    <head>
        <link rel="stylesheet" href="../styletable.css">
    </head> <br>

    <div class="navbar">
    <h2>Tabel Reservasi</h2>
    <ul>
        <li><a href="../">Home</a></li>
        <li><a href="../kamar/kamar.php">Kamar</a></li>
        <li><a href="../pelanggan/pelanggan.php">pelanggan</a></li>
        <li><a href="../pegawai/pegawai.php">pegawai</a></li>
        <li><a href="../reservasi/reservasi.php">reservasi</a></li>
    </ul>
    </div>
    <a href="input-reservasi.php"><button class="input"><b>+</b> Tambah Data</button></a>
<table border="1">
    <tr>
        <th>ID Reservasi</th>
        <th>ID Kamar</th>
        <th>ID Pelanggan</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Total Harga</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "../koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM reservasi");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_reservasi'] ?></td>
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <?php echo $tampil['id_pelanggan'] ?></td>
        <td> <?php echo $tampil['tgl_masuk'] ?></td>
        <td> <?php echo $tampil['tgl_keluar'] ?></td>
        <td> <?php echo $tampil['total_harga'] ?></td>
        <td>
                <a href="hapus-reservasi.php?id_reservasi=<?php echo $tampil['id_reservasi']; ?>"><button class="hps">Hapus</button></a>
                <a href="edit-reservasi.php?id_reservasi=<?php echo $tampil['id_reservasi']; ?>"><button class="edt">Edit</button></a>
                <a href="konfirmasi-reservasi.php?id_reservasi=<?php echo $tampil['id_reservasi']; ?>"><button class="konf">Konfirmasi</button></a>
            </td>
    </tr>

    <?php
    }
    ?>

</table>


</html>