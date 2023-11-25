<DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="../styletable.css">
    </head> <br>

    <body>


        <div>
            <div class="navbar">
                <h2>Tabel Kamar</h2>
                <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="kamar.php">Kamar</a></li>
                    <li><a href="../pelanggan/pelanggan.php">pelanggan</a></li>
                    <li><a href="../pegawai/pegawai.php">pegawai</a></li>
                    <li><a href="../reservasi/reservasi.php">reservasi</a></li>
                </ul>
            </div>
            <a href="input-kamar.php" class="tambah"><button class="input"><b>+</b> Tambah Data</button></a>

            <table border="1">
                <tr>
                    <th>ID Kamar</th>
                    <th>Nama Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>

                <?php
                include "../koneksi.php";
                $kamar = mysqli_query($koneksi, "SELECT * FROM kamar");
                while ($tampil = mysqli_fetch_array($kamar)) {

                    ?>
                    <tr>
                        <td>
                            <?php echo $tampil['id_kamar'] ?>
                        </td>
                        <td>
                            <?php echo $tampil['nama_kamar'] ?>
                        </td>
                        <td>
                            <?php echo $tampil['tipe_kamar'] ?>
                        </td>
                        <td>
                            <?php echo $tampil['harga'] ?>
                        </td>
                        <td> <a href="hapus-kamar.php?id_kamar=<?php echo $tampil['id_kamar']; ?>"><button
                                    class="hps">Hapus</button></a>
                            <a href="edit-kamar.php?id_kamar=<?php echo $tampil['id_kamar']; ?>"><button
                                    class="edt">Edit</button></a>
                        </td>
                    </tr>

                    <?php
                }
                ?>

            </table>
        </div>

    </body>

    </html>