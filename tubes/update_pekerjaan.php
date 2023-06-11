<?php

require 'functions.php';

$id = $_GET["id_pekerjaan"];
$P = query("SELECT * FROM pekerjaan WHERE id_pekerjaan=$id")[0];
if (isset($_POST['submit'])) {
    if (update($_POST) > 0) {
        echo '<script>alert("data berhasil diubah");
        window.location.href="daftar_pekerjaan.php";
        </script>';
    } else {
        echo '<script>alert("data gagal diubah"); 
        window.location.href="daftar_pekerjaan.php";
        </script>';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Form Input Pekerjaan</title>
</head>

<body>
    <h2>Form Input Pekerjaan</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_pekerjaan" value="<?= $P["id_pekerjaan"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $P["gambar"]; ?>">
        <label for="judul">Judul Pekerjaan:</label><br>
        <input type="text" id="judul" name="judul" value="<?= $P["judul"]; ?>"><br><br>

        <label for="gambar">Gambar:</label><br>
        <img src="img/<?= $P['gambar']; ?>" alt="Gambar Pekerjaan"><br><br>
        <input type="file" id="gambar" name="gambar"><br><br>

        <label for="nama_perusahaan">Nama Perusahaan:</label><br>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan" value="<?= $P["nama_perusahaan"]; ?>"><br><br>

        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="lokasi" value="<?= $P["lokasi"]; ?>"><br><br>

        <label for="deskripsi">Deskripsi Pekerjaan:</label><br>
        <textarea id="deskripsi" name="deskripsi"><?= $P["deskripsi"]; ?></textarea><br><br>

        <label for="persyaratan">Persyaratan:</label><br>
        <textarea id="persyaratan" name="persyaratan"><?= $P["persyaratan"]; ?></textarea><br><br>

        <label for="gaji">Gaji:</label><br>
        <input type="text" id="gaji" name="gaji" value="<?= $P["gaji"]; ?>"><br><br>

        <label for="tanggal_posting">Tanggal Posting:</label><br>
        <input type="date" id="tanggal_posting" name="tanggal_posting" value="<?= $P["tanggal_posting"]; ?>"><br><br>

        <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label><br>
        <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" value="<?= $P["tanggal_kadaluarsa"]; ?>"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>