<?php
    include_once("../connect.php");
    
    $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang ORDER BY id_pengarang ASC");


?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<center>
    <a href="../buku/index.php">Buku</a> |
    <a href="../penerbit/index.php">Penerbit</a> |
    <a href="../pengarang/index.php">Pengarang</a> |
    <a href="../katalog/index.php">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Pengarang</a><br/><br/>

    <table class="table" width='80%' border=1>

     <tr>
        <th>id Pengarang</th>
        <th>Nama Pengarang</th>
        <th>Email</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
        </tr>
    <?php
        foreach ($pengarang as $pengarang_data) {
            # code...
            echo "<tr>";
            echo "<td>" .$pengarang_data['id_pengarang']. "</td>";
            echo "<td>" .$pengarang_data['nama_pengarang']. "</td>";
            echo "<td>" .$pengarang_data['email']. "</td>";
            echo "<td>" .$pengarang_data['telp']. "</td>";
            echo "<td>" .$pengarang_data['alamat']. "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";
        }
    ?>

    </table>
</body>
</html>


