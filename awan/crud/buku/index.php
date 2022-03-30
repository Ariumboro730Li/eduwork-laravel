<?php
include_once("connect.php");
$buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
            LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
            LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
            LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
            ORDER BY isbn ASC");
?>

<html>

<head>
    <title>Perpustakaan | Yodi Irawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/awan/crud/">Perpus-nich</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/awan/crud/buku/">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/awan/crud/penerbit/">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/awan/crud/pengarang/">Pengarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/awan/crud/katalog/">Katalog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <a class="btn btn-success ml-5 mt-5" href="add.php">Add New Buku</a><br /><br />

    <table class="table" width='80%' border=1>
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Katalog</th>
            <th>Stok</th>
            <th>Harga Pinjam</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($buku_data = mysqli_fetch_array($buku)) {
            echo "<tr>";
            echo "<td>" . $buku_data['isbn'] . "</td>";
            echo "<td>" . $buku_data['judul'] . "</td>";
            echo "<td>" . $buku_data['tahun'] . "</td>";
            echo "<td>" . $buku_data['nama_pengarang'] . "</td>";
            echo "<td>" . $buku_data['nama_penerbit'] . "</td>";
            echo "<td>" . $buku_data['nama_katalog'] . "</td>";
            echo "<td>" . $buku_data['qty_stok'] . "</td>";
            echo "<td>" . $buku_data['harga_pinjam'] . "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";
        }
        ?>
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>