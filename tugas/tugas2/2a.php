<?php
  $ndepan = "Dicky";
  $nbelakang = "Dwi ";
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
<?php for ($i=1; $i<=100; $i++) : ?>
        <?php if ($i % 3 == 0 && $i % 5 == 0) : ?>
            <p><?= "$ndepan $nbelakang" ?></p>
        <?php elseif ($i % 3 == 0) : ?>
            <p><?= $ndepan ?></p>
        <?php elseif ($i % 5 == 0) : ?>
            <p><?= $nbelakang ?></p>
        <?php else : ?>
            <p><?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>
</body>
</html>