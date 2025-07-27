<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Akun Baru</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
  <div class="login-container">
    <h2>Daftar Akun</h2>
    <form action="simpan_akun.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="konfirmasi" placeholder="Konfirmasi Password" required>
      <button type="submit">Daftar</button>
    </form>
    <a href="login.php">Sudah punya akun? Login</a>
  </div>
</body>
</html>
