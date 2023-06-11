<?php
require 'functions.php';

// Mulai sesi
session_start();

// Fungsi untuk mengatur data sesi
function setSessionData($username, $role ) {
  $_SESSION['username'] = $username;
  $_SESSION['role'] = $role;
}

// Login
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];
    $_SESSION['email'] = $row['email'];

    if ($password === $row["password"]) {
      // Panggil fungsi untuk mengatur data sesi
      setSessionData($username, $role);

      if ($role == 'admin') {
        header("Location: admin.php");
      } elseif ($role == 'user') {
        header("Location: index.php");
      } else {
        header("Location: author.php");
      }

      exit;
    } else {
      echo "<script>alert('Password salah');</script>";
    }
  }
}



?>



<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/loginregis.css">
</head>
<body>
  <form class="login-form" action="" method="post">
    <h1>Login</h1>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukkan password">
    </div>
    <button type="submit" id="submit" name="submit">Login</button>
    <p class="register-link">Tidak memiliki akun? <a href="register.php">Register</a></p>
  </form>
</body>
</html>
