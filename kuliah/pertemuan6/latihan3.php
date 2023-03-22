<?php 
$mahasiswa =[
    ['nama'=>'Dicky','makanan'=>'🍜','peliharaan'=>'😾'], 
    ['nama'=>'Sena','makanan'=>'🍔','peliharaan'=>'👾'], 
    ['nama'=>'Kholis','makanan'=>'🧃','peliharaan'=>'🦠'], 
    ['nama'=>'Ryan','makanan'=>'🥪','peliharaan'=>'🐱‍🐉'], 
    ['nama'=>'Rizki','makanan'=>'🍱','peliharaan'=>'👽']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs){?>
        <ul>
        <li>Nama: <?= $mhs["nama"]; ?> </li>
        <li>Makanan Favorit: <?=$mhs["makanan"]; ?></li>
        <li>peliharaan: <?= $mhs["peliharaan"]; ?></li>
        </ul>    
    <?php }?>
</body>
</html>