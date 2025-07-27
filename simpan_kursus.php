<?php
include 'koneksi.php';

$nama = $_POST['nama_kursus'];
$bahasa = $_POST['bahasa'];
$pengajar = $_POST['pengajar'];
$jadwal = $_POST['jadwal'];
$biaya = $_POST['biaya'];

$query = "INSERT INTO kursus (nama_kursus, bahasa, pengajar, jadwal, biaya)
          VALUES ('$nama', '$bahasa', '$pengajar', '$jadwal', $biaya)";

if (mysqli_query($conn, $query)) {
    echo "<script>
        alert('Data berhasil disimpan!');
        window.location.href = 'input_kursus.php';
    </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
