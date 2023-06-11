<?php
session_start();

// Periksa apakah pengguna sudah masuk atau belum
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
  header("Location: login.php"); // Ganti dengan halaman login yang sesuai
  exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Admin - Job Portal</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <h1>Job Portal - Halaman Admin</h1>
    </header>
    <nav>
      <ul>
        <li><a href="admin.php">Dashboard</a></li>
        <li><a href="daftar_pekerjaan.php">Manajemen Lowongan</a></li>
        <li><a href="daftar_user.php">Manajemen User</a></li>
        <li><a href="#">Manajemen Author</a></li>
        <li><a href="index.php">Kembali</a></li>
      </ul>
    </nav>
    <section>
      <h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
      <p>Halaman ini dapat mengelola lowongan pekerjaan, pelamar, dan pengaturan website.</p>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
