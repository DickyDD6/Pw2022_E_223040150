<?php 

$mahasiswa = [
    [//1.
        "nrp" => "223040150",
        "nama" => "Dicky Dwi Dermawan",
        "email" => "dicky.223040150@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ], 
    [//2.
        "nrp" => "223040167",
        "nama" => "Muhamad Rizki Maulana",
        "email" => "rizki.223040167@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//3.
        "nrp" => "223040168",
        "nama" => "Genta Sena Irasta",
        "email" => "genta.223040168@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//4.
        "nrp" => "223040166",
        "nama" => "Muhamad Rinaldi Agus Pratama",
        "email" => "rinaldi.223040166@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//5.
        "nrp" => "223040165",
        "nama" => "Ilman hanifa",
        "email" => "ilman.223040165@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//6.
        "nrp" => "223040141",
        "nama" => "Muhammad Kholish Kamil",
        "email" => "kholish.223040141@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//7.
        "nrp" => "223040164",
        "nama" => "Herdy Sya'banul Hakim",
        "email" => "herdy.223040164@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//8.
        "nrp" => "223040145",
        "nama" => "Miftahul Huda",
        "email" => "miftahul.223040145@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//9.
        "nrp" => "223040173",
        "nama" => "Ryan Hidayat",
        "email" => "ryan.223040173@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//10.
        "nrp" => "223040159",
        "nama" => "Aditya Fauzan Salmannaufal",
        "email" => "aditya.223040159@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ]
    
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>