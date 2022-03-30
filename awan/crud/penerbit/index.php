<?php
include_once("connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
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
                        <a class="nav-link " aria-current="page" href="/awan/crud/buku/">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/awan/crud/penerbit/">Penerbit</a>
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

    <a class="btn btn-success ml-5 mt-5" href="add.php">Add New Penerbit</a><br /><br />

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
            echo "<td><a class='btn btn-primary' href='edit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";
        }
        ?>
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>