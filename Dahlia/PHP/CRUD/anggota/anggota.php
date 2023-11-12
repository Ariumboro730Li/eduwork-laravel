<?php
include_once("anggota_connect.php"); 
$anggota = mysqli_query($anggota_connect,"SELECT anggota.*,anggota.id_anggota,anggota.nama,anggota.username,anggota.sex,anggota.tlp,anggota.alamat FROM anggota
                                ORDER BY id_anggota ASC");
?>

 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>

<center>
    <a href="../buku/data.php">Buku</a> |
    <a href="../anggota/anggota.php">Anggota</a> |
    <a href="../katalog/katalog.php">Katalog</a> |
    <a href="#">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Anggota</a><br/><br/>
 
    <table class="table" width='100%' border=1>
 
    <tr>
        <th>ID Anggota</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Tanggal Entry</th>
        <th>Jabatan</th>
        <th>Rasio</th>

    </tr>
    <?php
        while ($anggota_data = mysqli_fetch_array($anggota))
        {
            echo "<td>" .$anggota_data['id_anggota']. "</td>";
            echo "<td>" .$anggota_data['nama']. "</td>";
            echo "<td>" .$anggota_data['username']. "</td>";
            echo "<td>" .$anggota_data['password']. "</td>";
            echo "<td>" .$anggota_data['sex']. "</td>";
            echo "<td>" .$anggota_data['tlp']. "</td>";
            echo "<td>" .$anggota_data['alamat']. "</td>";
            echo "<td>" .$anggota_data['email']. "</td>";
            echo "<td>" .$anggota_data['tgl_entry']. "</td>";
            echo "<td>" .$anggota_data['role']. "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_anggota=$anggota_data[id_anggota]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_anggota=$anggota_data[id_anggota]'>Delete</a></td></tr>";  
        }
    ?>

    </table>
</body>
</html>