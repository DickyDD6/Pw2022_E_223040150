<?php
require 'functions.php';

if (isset($_POST['submit'])){
    if (tambah($_POST) > 0){
        echo '<script>alert("data berhasil ditambah");
        document.location.href="daftar_pekerjaan_author.php"
        </script>';
    } else {
        echo '<script>alert("data gagal ditambah"); 
        document.location.href="daftar_pekerjaan_author.php"
        </script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Pekerjaan</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <style>
        body {
            padding: 40px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="mb-4">Form Input Pekerjaan</h2>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Pekerjaan:</label>
                <input type="text" id="judul" name="judul" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="nama_perusahaan" class="form-label">Nama Perusahaan:</label>
                <input type="text" id="nama_perusahaan" name="nama_perusahaan" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Pekerjaan:</label>
                <textarea id="deskripsi" name="deskripsi" required class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="persyaratan" class="form-label">Persyaratan:</label>
                <textarea id="persyaratan" name="persyaratan" required class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji:</label>
                <input type="text" id="gaji" name="gaji" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="tanggal_posting" class="form-label">Tanggal Posting:</label>
                <input type="date" id="tanggal_posting" name="tanggal_posting" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa:</label>
                <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
