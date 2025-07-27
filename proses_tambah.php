<?php
include 'koneksi.php';

$nama = $_POST['nama_kursus'];
$bahasa = $_POST['bahasa'];
$pengajar = $_POST['pengajar'];
$jadwal = $_POST['jadwal'];
$biaya = $_POST['biaya'];

$sql = "INSERT INTO kursus (nama_kursus, bahasa, pengajar, jadwal, biaya)
        VALUES ('$nama', '$bahasa', '$pengajar', '$jadwal', '$biaya')";

if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
} else {
    echo "Gagal menambah data: " . mysqli_error($conn);
}
?>
