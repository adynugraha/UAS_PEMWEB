<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <!-- Bootstrap CSS for buttons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Button styles */
    .btn-edit {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      text-decoration: none;
    }
    .btn-edit:hover {
      background-color: #218838;
      color: white;
    }
    .btn-delete {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      text-decoration: none;
    }
    .btn-delete:hover {
      background-color: #c82333;
      color: white;
    }
  </style>
</head>
<body>
  <div class="dashboard-center" style="width: 90%; margin: auto;">
    <div style="text-align: right; margin-top: 20px; margin-right: 30px;">
  <a href="logout.php" class="logout-button">Logout</a>
</div>

    <h1 class="welcome-text">Selamat Datang di Kursus Bahasa!</h1>

    <h2>👋 Hai, <?= $_SESSION['username']; ?></h2>
    <p>Selamat datang di Dashboard Kursus Bahasa.</p>

    <div class="menu-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
      <h2>📚 Data Kursus</h2>
      <a href="tambah.php" class="btn btn-success">+ Tambah Data</a>
    </div>

    <table id="kursusTable" class="display" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kursus</th>
          <th>Bahasa</th>
          <th>Pengajar</th>
          <th>Jadwal</th>
          <th>Biaya</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM kursus");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama_kursus']}</td>
                    <td>{$row['bahasa']}</td>
                    <td>{$row['pengajar']}</td>
                    <td>{$row['jadwal']}</td>
                    <td>Rp " . number_format($row['biaya'], 0, ',', '.') . "</td>
                    <td>
                      <a href='edit_kursus.php?id={$row['id']}' class='btn-edit'>Edit</a>
                      <a href='hapus_kursus.php?id={$row['id']}' class='btn-delete' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Delete</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#kursusTable').DataTable({
        "language": {
          "search": "Cari:",
          "lengthMenu": "Tampilkan _MENU_ entri",
          "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          "paginate": {
            "first": "Pertama",
            "last": "Terakhir",

            <li><a href="logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a></li>
            </script>

            <?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Biodata Diri</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .biodata-box {
      width: 400px;
      margin: 50px auto;
      padding: 20px;
      border-radius: 10px;
      background-color: #f9f9f9;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    .biodata-box h2 {
      text-align: center;
      color: #333;
    }
    .biodata-box p {
      font-size: 16px;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="biodata-box">
    <h2>Biodata Diri</h2>
    <p><strong>Nama:</strong> <?php echo $_SESSION['username']; ?></p>
    <p><strong>Email:</strong> adynugraha@gmail.com</p>
    <p><strong>No. Telepon:</strong> 0812-2377-4355</p>
    <p><strong>Alamat:</strong> KP. Rancabogo No. 12, Subang</p>
  </div>
</body>
</html>


        

