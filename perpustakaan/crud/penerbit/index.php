<?php
    include_once("connect.php");
    
    $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit ORDER BY id_penerbit ASC");


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

<a href="add.php">Add New Penerbit</a><br/><br/>

    <table class="table" width='80%' border=1>

     <tr>
        <th>id Penerbit</th>
        <th>Nama Penerbit</th>
        <th>Email</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
        </tr>
    <?php
        foreach ($penerbit as $penerbit_data) {
            # code...
            echo "<tr>";
            echo "<td>" .$penerbit_data['id_penerbit']. "</td>";
            echo "<td>" .$penerbit_data['nama_penerbit']. "</td>";
            echo "<td>" .$penerbit_data['email']. "</td>";
            echo "<td>" .$penerbit_data['telp']. "</td>";
            echo "<td>" .$penerbit_data['alamat']. "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";
        }
    ?>

    </table>
</body>
</html>


