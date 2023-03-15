<?php 
$hari= array('senin','selasa','rabu','kamis','jumat','sabtu',);
$pelajaran=['pw','pbd','mtk'];
$saya=['dicky','6','150','false'];
$binatang = ['😾','🚗','🪑','🐛','🚪'];
$bulan= ['januari','februari'];

var_dump($pelajaran[1]);
echo"<br>";
print_r($binatang);

echo"<hr>";
// menambahkan elemen di akhir dengan mengosongkan indexnya
$hari[]="minggu";
print_r($hari);
echo"<hr>";
// menambahkan elemen di akhir menggunakan array_push
array_push($bulan,'maret','april','mei',);

print_r($bulan)

?>
