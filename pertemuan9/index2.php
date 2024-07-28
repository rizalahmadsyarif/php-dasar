<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// Ambil data dari tabel mahasiswa
$reslut = mysqli_query($conn, "SELECT * FROM mahasiswa");
//ambil data dari result query


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-5">🧑‍🎓 Daftar Mahasiswa</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($reslut)) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><a href="" class="badge text-bg-warning">Edit</a> | <a href="" class="badge text-bg-danger">Delete</a> </td>
                                <td><img src="img/<?= $row['gambar']; ?>" alt="" width="50px"></td>
                                <td><?= $row['nrp']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['jurusan']; ?></td>
                            </tr>
                            <?= $i++; ?>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>