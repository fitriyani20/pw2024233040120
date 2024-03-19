<?php

$mahasiswa = [
    [
        "nama" => "Fitriyani Rahmadini",
        "nrp" => "233040120",
        "email" => "rahmadini@gmail.com"
    ],
    [
        "nama" => "Milda Khaerunnisa",
        "nrp" => "233040125",
        "email" => "mildakhaerunnisa@gmail.com"
    ],
    [
        "nama" => "Dera Triyadi Fatimah",
        "nrp" => "233040146",
        "email" => "deratriyadi@gmail.com"
    ],
    [
        "nama" => "Zeina Qurotun Nisa",
        "nrp" => "233040144",
        "email" => "zeinaqurotunnisa@gmail.com"
    ],
    [
        "nama" => "Adinda Juliana Ruhiyat",
        "nrp" => "233040142",
        "email" => "adindajuliana@gmail.com"
    ],
    [
        "nama" => "Ilona Aqila Zahra",
        "nrp" => "233040127",
        "email" => "ilonaaqila@gmail.com"
    ],
    [
        "nama" => "Adell Lailla Amallia",
        "nrp" => "2330401140",
        "email" => "adelllailla@gmail.com"
    ],
    [
        "nama" => "Anindya Gita Lestari",
        "nrp" => "233040134",
        "email" => "anindyagita@gmail.com"
    ],
    [
        "nama" => "Anandita Putri Salsabila Athaya",
        "nrp" => "233040118",
        "email" => "ananditaputri@gmail.com"
    ],
    [
        "nama" => "Denis Setya Pradana",
        "nrp" => "233040148",
        "email" => "denossetyapradana@gmail.com"
    ],   
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>   
</body>
</html>