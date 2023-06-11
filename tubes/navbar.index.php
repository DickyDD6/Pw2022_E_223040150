<?php
session_start();

// Periksa apakah pengguna sudah masuk atau belum
if (isset($_SESSION['username'])) {
  $greeting = "Hi, " . $_SESSION['username'];
  $profileLink = ""; // Inisialisasi tautan profil kosong
  $role = $_SESSION['role']; // Dapatkan nilai role dari sesi pengguna

  // Kondisi untuk mengarahkan tautan profil sesuai dengan role pengguna
  if ($role == 'admin') {
    $profileLink = "admin.php";
  } elseif ($role == 'author') {
    $profileLink = "author.php";
  } elseif ($role == 'user') {
    $profileLink = "user.php";
  }
} else {
  $greeting = "Hi, User";
  $profileLink = "#"; // Ganti dengan tautan masuk/daftar yang sesuai
}
?>

<nav>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#jobs">Lowongan Pekerjaan</a></li>
    <li><a href="#about-us">About Us</a></li>
    <?php if (isset($_SESSION['username'])) : ?>
      <li><a href="../tubes/logout.php">Log Out</a></li>
    <?php else : ?>
      <li><a href="login.php">Login</a></li>
    <?php endif; ?>
  </ul>
  <div class="ms-auto">
    <ul>
      <li class="nav-item dropdown d-flex ml-auto">
        <a class="nav-link dropdown-toggle text-white ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $greeting; ?>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $profileLink; ?>">Profile</a></li>
          <?php if (isset($_SESSION['username'])) : ?>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../tubes/logout.php">Log Out</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </div>
</nav>
