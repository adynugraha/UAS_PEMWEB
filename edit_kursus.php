<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM kursus WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Kursus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Edit Data Kursus</h2>
    <form action="proses_edit.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['id']; ?>">
      <input type="text" name="nama_kursus" value="<?= $row['nama_kursus']; ?>" required>
      <input type="text" name="bahasa" value="<?= $row['bahasa']; ?>" required>
      <input type="text" name="pengajar" value="<?= $row['pengajar']; ?>" required>
      <input type="text" name="jadwal" value="<?= $row['jadwal']; ?>" required>
      <input type="number" name="biaya" value="<?= $row['biaya']; ?>" required>
      <button type="submit">Simpan Perubahan</button>
    </form>
  </div>
</body>
</html>
