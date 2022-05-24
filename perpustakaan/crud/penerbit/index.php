<?php
    include_once("connect.php");
    
    $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit ORDER BY id_penerbit ASC");


?>

<html>
<head>
    <title>Homepage</title>
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

    <table width='80%' border=1>

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


