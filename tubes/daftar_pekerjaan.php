<?php
require "functions.php";
$result = mysqli_query($conn, "SELECT * FROM pekerjaan");
$list_pekerjaan = query("SELECT * FROM pekerjaan");
if (isset($_POST["search-b"])) {
  $list_pekerjaan = search($_POST["keyword"]);
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Admin - Job Portal</title>
    <link rel="stylesheet" href="css/admin.css " />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>
  <script>
    $(document).ready(function() {

      // event ketika keyword ditulis
      $('#keyword').on('keyup', function() {
        $.get('ajax/search.php?keyword=' + $('#keyword').val(), function(data) {
          $('#container').html(data);
        });
      });
    });
  </script>

    <style>
        table th, td{
            border:1px solid black;
        }
    </style>
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
      <li><a href="index.php">Kembali </a></li>
		  </ul>	
    </nav>

    <a href="tambah_pekerjaan.php">tambah pekerjaan</a>

    <<div class="row">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group my-3">
          <input type="search" class="form-control" placeholder="masukan keyword " name="keyword" id="keyword" autofocus autocomplete="off">
          <button class="btn btn-primary" type="submit" name="search-b" id="search-b">search</button>
        </div>
      </form>
    </div>
  </div>

  <div id="container">
    <table cellpadding="10" cellspacing="0">
      <th>aksi</th>
      <th>gambar</th>
      <th>judul</th>
      <th>nama_perusahaan</th>
      <th>lokasi</th>
      <th>deskripsi</th>
      <th>persyaratan</th>
      <th>gaji</th>
      <th>tanggal posting</th>
      <th>tanggal Kadaluarsa</th>
      <?php foreach ($list_pekerjaan as $list_p) : ?>

        <tr>
          <td><a href="update_pekerjaan.php?id_pekerjaan=<?= $list_p["id_pekerjaan"]; ?>">update </a>
            <a href="delet.php?id_pekerjaan=<?= $list_p["id_pekerjaan"]; ?>" onclick="return confirm('yang benerr???')">delete </a>
          </td>

          <td><img src="img/<?= $list_p["gambar"]; ?>" alt="<?= $list_p["gambar"]; ?>" width="200px"></td>
          <td><?= $list_p["judul"]; ?></td>
          <td><?= $list_p["nama_perusahaan"]; ?></td>
          <td><?= $list_p["lokasi"]; ?></td>
          <td><?= $list_p["deskripsi"]; ?></td>
          <td><?= $list_p["persyaratan"]; ?></td>
          <td><?= $list_p["gaji"]; ?></td>
          <td><?= $list_p["tanggal_posting"]; ?></td>
          <td><?= $list_p["tanggal_kadaluarsa"]; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>