<?php 
require "functions.php";
$id=$_GET["id_pekerjaan"];
if (delet($id)>0){
    echo '<script>alert("data berhasil dihapus");
        window.location.href="daftar_pekerjaan.php";
        </script>';
    } else {
        echo '<script>alert("data gagal dihapus"); 
        window.location.href="daftar_pekerjaan.php";
        </script>';
    }

?>