<?php
    include_once("connect.php");
    
    $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang ORDER BY id_pengarang ASC");


?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>

<center>
    <a href="index,php">Buku</a> |
    <a href="index.php">Penerbit</a> |
    <a href="index.php">Pengarang</a> |
    <a href="index.php">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Pengarang</a><br/><br/>

    <table width='80%' border=1>

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


