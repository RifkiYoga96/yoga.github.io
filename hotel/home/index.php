<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Kamar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    form {
      max-width: 400px;
      margin: 50px auto;
    }

    input, select, button {
      margin-bottom: 10px;
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    h1{
        text-align:center;
    }
  </style>
</head>
<body>

<?php

include "../koneksi.php";
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_pelanggan = $_POST["nama_pelanggan"];
  $email = $_POST["email"];
  $password = md5($_POST["password"]); // Gunakan metode hash untuk penyimpanan yang aman
  $nama_kamar = $_POST["nama_kamar"];
  $tgl_masuk = $_POST["tgl_masuk"];
  $tgl_keluar = $_POST["tgl_keluar"];

  // Hitung total harga
  $sql_harga_kamar = "SELECT harga FROM kamar WHERE nama_kamar = '$nama_kamar'";
  $result_harga_kamar = mysqli_query($koneksi, $sql_harga_kamar);
  $row_harga_kamar = mysqli_fetch_assoc($result_harga_kamar);
  $harga_kamar = $row_harga_kamar["harga"];

  $tgl_masuk_obj = new DateTime($tgl_masuk);
  $tgl_keluar_obj = new DateTime($tgl_keluar);
  $durasi_malam = $tgl_masuk_obj->diff($tgl_keluar_obj)->days;

  $total_harga = $harga_kamar * $durasi_malam;

  // Menampilkan konfirmasi total harga
  echo "<script>
          var konfirmasi = confirm('Total Harga: $total_harga IDR. Lanjutkan pembayaran?');

          if (konfirmasi) {
            // Lanjutkan ke proses penyimpanan data ke tabel reservasi
            window.location.href = 'proses_reservasi.php?nama_pelanggan=$nama_pelanggan&email=$email&password=$password&nama_kamar=$nama_kamar&tgl_masuk=$tgl_masuk&tgl_keluar=$tgl_keluar&total_harga=$total_harga';
          } else {
            // Kembali ke halaman pemesanan
            window.location.href = 'index.php';
          }
        </script>";
}
?>

    <h1>Pesan Kamar</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="nama_pelanggan">Nama Pelanggan:</label>
  <input type="text" name="nama_pelanggan" required>

  <label for="email">Email:</label>
  <input type="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" name="password" required>

  <label for="nama_kamar">Nama Kamar:</label>
  <select name="nama_kamar" required>
    <?php
    // Mengambil nama kamar dari database
    $sql_kamar = "SELECT nama_kamar FROM kamar";
    $result_kamar = mysqli_query($koneksi, $sql_kamar);
    while ($row_kamar = mysqli_fetch_assoc($result_kamar)) {
      echo "<option value='" . $row_kamar['nama_kamar'] . "'>" . $row_kamar['nama_kamar'] . "</option>";
    }
    ?>
  </select>

  <label for="tgl_masuk">Tanggal Check-in:</label>
  <input type="date" name="tgl_masuk" required>

  <label for="tgl_keluar">Tanggal Check-out:</label>
  <input type="date" name="tgl_keluar" required>

  <button type="submit">Pesan Sekarang</button>
</form>

</body>
</html>
