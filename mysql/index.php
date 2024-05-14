<?php

//koneksi ke database

require 'function.php';

// ambil data dari tabel mahasiswa / query data mahasiswa

$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() // mengebalikan array associative
//mysqli_fetch_array() // mengebalikan keduanya
//mysqli_fetch_object() //

// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;  ?>
        <?php foreach($mahasiswa as $row) : ?>

        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["Gambar"]; ?>" alt="" width="80" height="80"></td>
            <td><?= $row["NRP"]; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Email"]; ?></td>
            <td><?= $row["Jurusan"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>    
    </table>

</body>
</html>