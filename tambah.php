<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Kursus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Logo jika ingin ditampilkan -->
  <img src="img/logo.png" class="corner-logo top-left" alt="Logo">

  <div class="form-tambah">
    <h2>Tambah Data Kursus</h2>
    <form action="proses_tambah.php" method="POST">
      <label for="nama_kursus">Nama Kursus</label>
      <input type="text" name="nama_kursus" required>

      <label for="bahasa">Bahasa</label>
      <input type="text" name="bahasa" required>

      <label for="pengajar">Pengajar</label>
      <input type="text" name="pengajar" required>

      <label for="jadwal">Jadwal</label>
      <input type="text" name="jadwal" required>

      <label for="biaya">Biaya</label>
      <input type="number" name="biaya" required>

      <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="dashboard.php" class="action-button">← Kembali ke Dashboard</a>
  </div>
</body>
</html>
