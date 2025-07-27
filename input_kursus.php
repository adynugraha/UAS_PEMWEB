<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Input Kursus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Form Input Data Kursus</h2>
  <form action="tambah.php" method="POST">
      <label>Nama Kursus:</label>
      <input type="text" name="nama_kursus" required>

      <label>Bahasa yang Diajarkan:</label>
      <input type="text" name="bahasa" required>

      <label>Nama Pengajar:</label>
      <input type="text" name="pengajar" required>

      <label>Hari & Jam:</label>
      <input type="text" name="jadwal" required>

      <label>Biaya Kursus:</label>
      <input type="number" name="biaya" required>

      <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
