<?php 
require "../functions.php";
$keyword = $_GET['keyword'];
$query = "SELECT * FROM
           pekerjaan
           Where
            judul LIKE '%$keyword%' or 
            nama_perusahaan LIKE '%$keyword%'or
            lokasi  LIKE '%$keyword%'or
            deskripsi  LIKE '%$keyword%' 
";
$pekerjaan = query($query);
?>
<?php if($pekerjaan):?> 
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
      <?php foreach ($pekerjaan as $list_p) : ?>

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
  <?php else: ?>
    <div class="row">
     <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
         A simple danger alert—check it out!
      </div>
  </div>
</div>
    <?php endif;?>
