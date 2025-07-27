<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM kursus WHERE id='$id'");

if ($query) {
  header("Location: dashboard.php");
} else {
  echo "Gagal menghapus data.";
}
?>
