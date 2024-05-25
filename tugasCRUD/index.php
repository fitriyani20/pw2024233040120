<?php

$conn = mysqli_connect('localhost', 'root','','phpdasar');

$resault = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>

</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

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
    <?php $i =1;?>
    <?php while( $row = mysqli_fetch_assoc($resault)) : ?>
    <tr>

     

     <td><?= $i; ?></td>
     <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>   
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin');">hapus</a>
     </td>

     <td><img src="img/<?= $row["Gambar"]; ?>" width="80"  height="80"></td>
     <td><?= $row["Nama"]; ?></td>
     <td><?= $row["NRP"]; ?></td>
     <td><?= $row["Email"]; ?></td>
     <td><?= $row["Jurusan"]; ?></td>





    </tr>
    <?php $i++;  ?>
     <?php endwhile; ?>
    </table>
</body>
</html>