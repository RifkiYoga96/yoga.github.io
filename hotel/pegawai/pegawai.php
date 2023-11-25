<html>

<head>
    <link rel="stylesheet" href="../styletable.css">
</head> <br>
<div class="navbar">
    <h2>Tabel Pegawai</h2>
    <ul>
        <li><a href="../">Home</a></li>
        <li><a href="../kamar/kamar.php">Kamar</a></li>
        <li><a href="../pelanggan/pelanggan.php">pelanggan</a></li>
        <li><a href="../pegawai/pegawai.php">pegawai</a></li>
        <li><a href="../reservasi/reservasi.php">reservasi</a></li>
    </ul>
</div>
<a href="input-pegawai.php"><button class="input"><b>+</b> Tambah Data</button></a>

<table border="1">
    <tr>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Gaji</th>
        <th>email</th>
        <th>sandi</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "../koneksi.php";
    $kamar = mysqli_query($koneksi, "SELECT * FROM pegawai");
    while ($tampil = mysqli_fetch_array($kamar)) {

        ?>
        <tr>
            <td>
                <?php echo $tampil['id_pegawai'] ?>
            </td>
            <td>
                <?php echo $tampil['nama_pegawai'] ?>
            </td>
            <td>
                <?php echo $tampil['gaji'] ?>
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
            <td> <a href="hapus-pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']; ?>"><button
                        class="hps">Hapus</button></a>
                <a href="edit-pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']; ?>"><button
                        class="edt">Edit</button></a>
            </td>
        </tr>

        <?php
    }
    ?>

</table>

</html>