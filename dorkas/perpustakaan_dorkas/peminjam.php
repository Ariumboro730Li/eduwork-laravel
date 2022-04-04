<?php
session_start();

include_once "functions.php";

include_once("connect.php");


$query = "SELECT p.id_pinjam, p.id_anggota, p.tgl_pinjam, p.tgl_kembali, a.nama, a.username, a.password, a.sex, a.telp, a.alamat, a.email, a.tgl_entry, a.role, dp.qty ,b.judul FROM peminjaman as p LEFT JOIN anggota as a ON p.id_anggota = a.id_anggota left JOIN detail_peminjaman as dp ON p.id_pinjam = dp.id_pinjam LEFT JOIN buku as b ON dp.isbn = b.isbn;";
$peminjam = mysqli_query($mysqli, $query);
?>

<html>

<head>
    <title> CRUD Perpustakaan | Dorkas Sinambela</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- Akhir bootstrap icons-->

</head>

<body>
    <div>
        <?php if (flashdata_exist('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= get_flashdata('success'); ?>
            </div>
        <?php endif; ?>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">CRUD PERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home.php">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Pengarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peminjam.php">Peminjam</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if (flashdata_exist('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= get_flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <table class="table" width='80%' border=1>
        <tr>
            <th>Nama Peminjam</th>
            <th>Buku </th>
            <th>tanggal pinjam </th>
            <th>tanggal kembali </th>
            <th>aksi </th>
        </tr>
        <?php
        while ($peminjam_data = mysqli_fetch_array($peminjam)) :
        ?>
            <tr>
                <td><?= $peminjam_data['nama'] ?></td>
                <td><?= $peminjam_data['judul'] ?></td>
                <td><?= $peminjam_data['tgl_pinjam'] ?></td>
                <td><?= $peminjam_data['tgl_kembali'] ?></td>
                <td>
                    <a class="btn btn-danger" href="delete_pinjam.php?id_pinjam=<?= $peminjam_data['id_pinjam'] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
        <p>Created With <i class="bi bi-heart-fill text-danger"></i> By <a href="https://www.instagram.com/dorkasa.n.sinambela/" class="text-white fw-bold">Dorkas A.N. Sinambela"></a></p>
    </footer>
    <!-- Akhir Footer -->
</body>

</html>