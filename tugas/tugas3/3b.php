<?php 

    function urutanAngka($angka){
        $f=1;
        for ($x=1; $x <= $angka ; $x++) { 
            for ($z=1; $z <= $x ; $z++) { 
                echo $f ." ";
                $f++;
            }
            echo "<br>";
        }
    }
    echo urutanAngka(5);
?>