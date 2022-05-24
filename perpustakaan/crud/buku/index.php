<?php
    include_once("connect.php");
    
    $buku = mysqli_query($mysql, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku
                                        LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");


?>

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<center>
    <a href="index,php">Buku</a> |
    <a href="index.php">Penerbit</a> |
    <a href="#">Pengarang</a> |
    <a href="index.php">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Buku</a><br/><br/>

    <table class="table" width='80%' border=1>

     <tr>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Tahun</th>
        <th>Pengarang</th>
        <th>penerbit</th>
        <th>Katalog</th>
        <th>Stok</th>
        <th>Harga Pinjam</th>
        <th>Aksi</th>
        </tr>
    <?php
        foreach ($buku as $buku_data) {
            # code...
            echo "<tr>";
            echo "<td>" .$buku_data['isbn']. "</td>";
            echo "<td>" .$buku_data['judul']. "</td>";
            echo "<td>" .$buku_data['tahun']. "</td>";
            echo "<td>" .$buku_data['nama_pengarang']. "</td>";
            echo "<td>" .$buku_data['nama_penerbit']. "</td>";
            echo "<td>" .$buku_data['nama_katalog']. "</td>";
            echo "<td>" .$buku_data['qty_stok']. "</td>";
            echo "<td>" .$buku_data['harga_pinjam']. "</td>";
            //echo "<td><a href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";
        }
    ?>

    </table>
</body>




</html>