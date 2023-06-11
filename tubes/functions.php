<?php
$conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
function regis($regis)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $fullname = $regis["fullname"];
  $email = $regis["email"];
  $username = $regis["username"];
  $password = $regis["password"];
  $role = $regis["role"];


  //cek username
$result = mysqli_query($conn,"SELECT username FROM user WHERE
         username = '$username'");
        if(mysqli_fetch_assoc($result)){
          echo "<script>
          alert('username sudah digunakan')
          </script>";
          return false;
        }
  //query insert data
  $query = "INSERT INTO user
           VALUES
         (null,'$fullname','$email','$username','$password','$role')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  global $conn;

  $judul = $data["judul"];
  $gambar = $data["gambar"];
  $nama_perusahaan = $data["nama_perusahaan"];
  $deskripsi = $data["deskripsi"];
  $persyaratan = $data["persyaratan"];
  $gaji = $data["gaji"];
  $tanggal_posting = $data["tanggal_posting"];
  $tanggal_kadaluarsa = $data["tanggal_kadaluarsa"];

  $sql = "INSERT INTO pekerjaan VALUES (null,'$gambar','$judul', '$nama_perusahaan',  '$deskripsi', '$persyaratan', '$gaji', '$tanggal_posting', '$tanggal_kadaluarsa')";

  mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}
function update($data) {
  global $conn;

  $id = $data["id_pekerjaan"];
  $judul = mysqli_real_escape_string($conn, $data["judul"]);
  $nama_perusahaan = mysqli_real_escape_string($conn, $data["nama_perusahaan"]);
  $deskripsi = mysqli_real_escape_string($conn, $data["deskripsi"]);
  $persyaratan = mysqli_real_escape_string($conn, $data["persyaratan"]);
  $gaji = mysqli_real_escape_string($conn, $data["gaji"]);
  $tanggal_posting = mysqli_real_escape_string($conn, $data["tanggal_posting"]);
  $tanggal_kadaluarsa = mysqli_real_escape_string($conn, $data["tanggal_kadaluarsa"]);

  // Cek apakah gambar diubah
  if ($_FILES["gambar"]["error"] === 0) {
      $gambar = $_FILES["gambar"]["name"];
      $gambar_tmp = $_FILES["gambar"]["tmp_name"];
      move_uploaded_file($gambar_tmp, "img/" . $gambar);
  } else {
      // Jika gambar tidak diubah, dapatkan gambar dari database
      $result = mysqli_query($conn, "SELECT gambar FROM pekerjaan WHERE id_pekerjaan = '$id'");
      $row = mysqli_fetch_assoc($result);
      $gambar = $row['gambar'];
  }

  $sql = "UPDATE pekerjaan SET gambar = '$gambar',
      judul = '$judul',
      nama_perusahaan = '$nama_perusahaan',
      deskripsi = '$deskripsi',
      persyaratan = '$persyaratan',
      gaji = '$gaji',
      tanggal_posting = '$tanggal_posting',
      tanggal_kadaluarsa = '$tanggal_kadaluarsa'
      WHERE id_pekerjaan = '$id'";

  mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
function delet($id){
global $conn;
mysqli_query($conn,"DELETE FROM pekerjaan WHERE id_pekerjaan='$id'");
return mysqli_affected_rows($conn); 

}
}
function search($keyword){
$query = "SELECT * FROM pekerjaan
         Where
         judul LIKE '%$keyword%'or
         nama_perusahaan LIKE '%$keyword%'or
         lokasi LIKE '%$keyword%'or
         gaji LIKE '%$keyword%'
";
 return query($query);
}
function searchIndex($keyword){
$query = "SELECT * FROM pekerjaan
         Where
         judul LIKE '%$keyword%'
";
 return query($query);
}
