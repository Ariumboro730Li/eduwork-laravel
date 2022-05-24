<?php
    include_once("connect.php");
    
    $katalog = mysqli_query($mysql, "SELECT * FROM `katalog` ORDER BY id_katalog ASC");


?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>

<center>
    <a href="index.php">Buku</a> |
    <a href="index.php">Penerbit</a> |
    <a href="#">Pengarang</a> |
    <a href="index.php">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Katalog</a><br/><br/>

    <table width='80%' border=1>

     <tr>
        <th>id Katalog</th>
        <th>Nama</th>
        <th>Aksi</th>
        </tr>
    <?php
        foreach ($katalog as $katalog_data) {
            # code...
            echo "<tr>";
            echo "<td>" .$katalog_data['id_katalog']. "</td>";
            echo "<td>" .$katalog_data['nama']. "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";
        }
    ?>

    </table>
</body>
</html>


