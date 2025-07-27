<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];

// Cek konfirmasi
if ($password !== $konfirmasi) {
    echo "<script>
        alert('Konfirmasi password tidak sesuai!');
        window.location.href = 'daftar.php';
    </script>";
    exit();
}

// Cek apakah username sudah ada
$cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>
        alert('Username sudah terdaftar!');
        window.location.href = 'daftar.php';
    </script>";
    exit();
}

// Simpan akun baru
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
    echo "<script>
        alert('Pendaftaran berhasil! Silakan login.');
        window.location.href = 'login.php';
    </script>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
