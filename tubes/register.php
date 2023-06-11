<?php 
require 'functions.php';

//cek tombol submit
if(isset($_POST["submit"])){
 if(regis($_POST)>0){
  echo '<script>alert("data berhasil ditambahkan");</script>';
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  <link rel="stylesheet" type="text/css" href="css/loginregis.css">
</head>
<body>
  <form action ="" method ="post" class="register-form">
    <h1>Register</h1>
    <div class="form-group">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" placeholder="Masukan nama lengkap" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Masukan email anda" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukan username anda" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukan password anda" required>
    </div>

    <div class="type-category">
     <select name="role" id="role"class="from-select">
    <option selected> Pilih type regis</option>
    <option value="admin">Admin</option>
    <option value="user">User</option>
    <option value="author">Author</option>
     </select>
    </div>
    <button type="submit" name="submit">Register</button>
    <p class="login-link">Sudah Memiliki akun? <a href="login.php">Login</a></p>
  </form>
</body>
</html>
