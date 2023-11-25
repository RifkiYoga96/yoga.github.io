<html>

<head>
    <link rel="stylesheet" href="../styletable.css">
</head> <br>

<div class="navbar">
    <h2>Tabel Pelanggan</h2>
    <ul>
        <li><a href="../">Home</a></li>
        <li><a href="../kamar/kamar.php">Kamar</a></li>
        <li><a href="../pelanggan/pelanggan.php">pelanggan</a></li>
        <li><a href="../pegawai/pegawai.php">pegawai</a></li>
        <li><a href="../reservasi/reservasi.php">reservasi</a></li>
    </ul>
</div>
<a href="input-pelanggan.php"><button class="input"><b>+</b> Tambahkan Data</button></a>
<table border="1">
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>email</th>
        <th>password</th>
        <th>level</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "../koneksi.php";
    $kamar = mysqli_query($koneksi, "SELECT * FROM pelanggan");
    while ($tampil = mysqli_fetch_array($kamar)) {

        ?>
        <tr>
            <td>
                <?php echo $tampil['id_pelanggan'] ?>
            </td>
            <td>
                <?php echo $tampil['nama_pelanggan'] ?>
            </td>
            <td>
                <?php echo $tampil['email'] ?>
            </td>
            <td>
                <?php echo $tampil['sandi'] ?>
            </td>
            <td>
                <?php echo $tampil['level'] ?>
            </td>
            <td> <a href="hapus-pelanggan.php?id_pelanggan=<?php echo $tampil['id_pelanggan']; ?>"><button
                        class="hps">Hapus</button></a>
                <a href="edit-pelanggan.php?id_pelanggan=<?php echo $tampil['id_pelanggan']; ?>"><button
                        class="edt">Edit</button></a>
            </td>
        </tr>

        <?php
    }
    ?>

</table>


</html>