<?php
session_start();

include_once "functions.php";

include_once("connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
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
    <a class="btn btn-success ml-5 mt-5" href="add_penerbit.php">Add New Penerbit</a><br /><br />

    <table class="table" width='80%' border=1>
        <tr>
            <th>ID Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($penerbit_data = mysqli_fetch_array($penerbit)) {
            echo "<tr>";
            echo "<td>" . $penerbit_data['id_penerbit'] . "</td>";
            echo "<td>" . $penerbit_data['nama_penerbit'] . "</td>";
            echo "<td>" . $penerbit_data['email'] . "</td>";
            echo "<td>" . $penerbit_data['telp'] . "</td>";
            echo "<td>" . $penerbit_data['alamat'] . "</td>";
            echo "<td><a class='btn btn-primary' href='edit_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";
        }
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