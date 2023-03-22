<?php 
$peliharaan = ['😾','👽','👾','🐛','🐱‍🐉'];
$makanan = ['🍔','🥪','🍱','🍜','🧃'];
$nmahasiswa = ['Dicky','Sena','Ryan','Kholis','Rizki']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <li>Nama:Dicky</li>
        <li>Makanan Favorit:🍜</li>
        <li>peliharaan:🐈</li>
    </ul>
    <?php foreach($makanan as $i => $mkn){?>
        <li>Nama: <?= $nmahasiswa[$i]; ?> </li>
        <li>Makanan Favorit: <?= $makanan[$i]; ?></li>
        <li>peliharaan: <?= $peliharaan[$i]; ?></li>
        <?php }?>
</body>
</html>