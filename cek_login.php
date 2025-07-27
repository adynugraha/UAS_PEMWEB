<?php
session_start();
ini_set('display_errors', 1); // Tampilkan error ke browser
error_reporting(E_ALL);

include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");

if (!$query) {
    die("Query gagal: " . mysqli_error($conn));
}

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $user;
    header("Location: dashboard.php");
    exit(); // ⚠️ WAJIB setelah header()
} else {
    echo "<script>
        alert('Login gagal! Username atau password salah.');
        window.location.href = 'login.php';
    </script>";
}
?>
