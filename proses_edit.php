<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_kursus'];
$bahasa = $_POST['bahasa'];
$pengajar = $_POST['pengajar'];
$jadwal = $_POST['jadwal'];
$biaya = $_POST['biaya'];

$query = mysqli_query($conn, "UPDATE kursus SET 
  nama_kursus='$nama',
  bahasa='$bahasa',
  pengajar='$pengajar',
  jadwal='$jadwal',
  biaya='$biaya'
  WHERE id='$id'
");

if ($query) {
  header("Location: dashboard.php");
} else {
  echo "Gagal mengedit data.";
}
?>
