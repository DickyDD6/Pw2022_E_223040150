<?php 

require("functions.php");
require("header.php");
$konten= query("SELECT * FROM pekerjaan");

if (isset($_POST["search-bu"])) {
  $konten = searchIndex($_POST["keyword"]);
}
?>
    <main>
      <section class="hero" id="home">
        <h1>Selamat Datang JobLess</h1>
        <p>Cari pekerjaan yang kamu inginkan disini</p>
        <form action="" method="post">
          <input type="text" name="keyword" id="keyword" placeholder="Masukkan kata kunci pekerjaan">
          <input type="submit" name="search-bu" id="search-bu">
        </form> 
      </section>

      <section class="jobs" id="jobs">
        <h2>Daftar Pekerjaan</h2>
        <div class="job-listings">
          <?php foreach($konten as $kon):?>
          <div class="job">
            <h3><?= $kon['judul']; ?></h3>
            <p><?= $kon['nama_perusahaan']; ?></p>
            <p><?= $kon['lokasi']; ?></p>
            <button><a href="lamaran.php?id_pekerjaan=<?= $kon['id_pekerjaan']; ?>">Info Lengkap</a></button>
          </div>
          <?php endforeach;?>
        </div>
      </section>

    
    </main>
<?php 
require("about.php");
require("footer.php");
?>
    
