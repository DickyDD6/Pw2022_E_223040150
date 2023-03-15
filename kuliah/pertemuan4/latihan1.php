<?php 
$angka = 10;
$angka1 = 5;
if($angka % 2 == 1) {
    echo "$angka adalah bilangan ganjil"; } 
else {
   echo "$angka adalah bilangan genap";}
   echo"<br>";
if($angka1 % 2 == 1) {
    echo "$angka1 adalah bilangan ganjil"; } 
else {
   echo "$angka1 adalah bilangan genap";}
   echo"<br>";
?>  

<?php 
$angka_1 = 20;

function cek_genap_ganjil($angka_2)//parameter di dalem sini bisa diganti-ganti
{
    if($angka_2 % 2 == 1) {
        return "$angka_2 adalah bilangan ganjil"; } 
    else {
       return "$angka_2 adalah bilangan genap";}
      
}
echo cek_genap_ganjil($angka_1);//argument
echo"<br>";
echo cek_genap_ganjil(200);
echo"<br>";

?>