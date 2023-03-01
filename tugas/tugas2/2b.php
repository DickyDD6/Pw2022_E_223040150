<?php for ($i=1; $i<=10; $i++) : ?>
        <?php for ($o=1; $o < $i; $o++) :?>
            <?= $o ?>
        <?php endfor ?>
        <?= $i . "<br>" ?>
    <?php endfor ?>