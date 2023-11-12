<?php

include_once("connect_anggota.php"); 
$anggota = mysqli_query($conn,"SELECT anggota.*,anggota.id_anggota,anggota.nama,anggota.username,anggota.sex,anggota.tlp,anggota.alamat FROM anggota
                                
                                ORDER BY id_anggota ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <center>
            <a href="database.php">Home</a> |
            <a href="about">About</a> |
            <a href="Profil">Profil</a> |
            <a href="Isi">Isi</a>
        </center>    
    <a href="add.php"><b>Add New Anggota</b></a></br></br>

    <table width= "80%", border="1">
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telepon</th>
            
        </tr>
    
    <?php
        while ($anggota_data = mysqli_fetch_array($anggota))
        {
            echo "<tr>";
            echo "<td>" .$anggota_data['id_anggota']. "</td>";
            echo "<td>" .$anggota_data['nama']. "</td>";
            echo "<td>" .$anggota_data['sex']. "</td>";
            echo "<td>" .$anggota_data['alamat']. "</td>";
            echo "<td>" .$anggota_data['tlp']. "</td>";
            echo "<td><a href='edit.php?id_anggota = $anggota_data[id_anggota]'>Edit</a> | <a href ='delete.php?id_anggota = $anggota_data[id_anggota]'>Delete</a></td></tr>"; 
        
            header("location:index.php");
        
        }

    ?>
    </table>

</body>
</html>