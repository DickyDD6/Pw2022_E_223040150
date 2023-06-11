<?php 
require("functions.php");

$id = $_GET['id_pekerjaan'];

$lmrn = query("SELECT * FROM pekerjaan WHERE id_pekerjaan = $id ")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lamaran</title>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <img src="img/<?= $lmrn["gambar"]; ?>" alt="<?= $lmrn['gambar']; ?>"width="200px"> 
            <p> <?= $lmrn['judul']; ?> </p>
            <p> <?= $lmrn['nama_perusahaan']; ?> </p>
            <p> <?= $lmrn['lokasi']; ?> </p>
            <p> <?= $lmrn['deskripsi']; ?> </p>
            <p> <?= $lmrn['persyaratan']; ?> </p>
            <p> <?= $lmrn['gaji']; ?> </p>
            <p> <?= $lmrn['tanggal_posting']; ?> </p>
            <p> <?= $lmrn['tanggal_kadaluarsa']; ?> </p>
        </div>
    </div>
</body>
</html>