<?php
session_start();

// Periksa apakah pengguna sudah masuk atau belum
if (!isset($_SESSION['username'])) {
  header("Location: login.php"); // Ganti dengan halaman login yang sesuai
  exit;
}

// Mengambil data pengguna dari sesi
$username = $_SESSION['username'];
$email = $_SESSION['email'];


?>

<!DOCTYPE html>
<html>
<head>
    <title>JobLess - User Page</title>
    <link rel="stylesheet" href="css/user.css" />
</head>
<body>
    <nav>
        <ul>
            <li><a href="user.php">Home</a></li>
            <li><a href="Profile">Profile</a></li>
            <li><a href="index.php">Kembali</a></li>
        </ul>
    </nav>
    <h1>Selamat Datang, <?php echo $username; ?></h1>
    <h2></h2>
    <p>Di sini Anda dapat, memperbarui profil Anda, .</p>
    <h3>Profile</h3>
    
    <p>Email: <?php echo $email; ?></p>
   
    <p>username: <?php echo $username; ?></p>

</body>
</html>