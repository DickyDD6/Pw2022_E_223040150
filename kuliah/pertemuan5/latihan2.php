<?php 
$spoiler = ['😾','🚗','🪑','🐛','🚪'];
$makanan = ['🍔','🥪','🍱','🍜','🍙']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>
        Daftar Spoiler
    </h2>
    <ul>
        <?php foreach($spoiler as $tragedi) { ?>
        <li>
            <?= $tragedi; ?>
        </li>
        <?php }?>
    </ul>
    <h2>
        Daftar Makanan
    </h2>
    <ul>
        <?php foreach($makanan as $iklan){?>
        <li>
            <?= $iklan; ?>

        </li>
        <?php }?>
    </ul>
</body>
</html>