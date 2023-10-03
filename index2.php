<?php 
require "myfunc.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="my-5 text-center">Daftar Mahasiswa</h1>

    <table  class="table table-striped" border="1" cellspacing ="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row) :  ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row['nama'] ?></td>
                <td><img src="" alt="" width="50px"></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td>
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
            </tr>
        <?php $i++ ?>
        <?php endforeach ; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>