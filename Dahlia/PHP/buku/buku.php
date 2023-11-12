<?php

include_once("connect.php");
    $buku = mysqli_query($mysqli,"SELECT buku.*,pengarang,penerbit,katalog,judul FROM buku 
                                JOIN detail_katalog on detail_katalog.id_katalog = buku.id_katalog
                                JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                JOIN detail_peminjaman ON detail_peminjaman.isbn = buku.isbn
                                JOIN peminjam ON peminjam.id_peminjam = detail_peminjaman.id_peminjam
                                JOIN anggota ON anggota.id_anggota = peminjam.id_anggota
                                ORDER BY judul ASC");
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
    <a href="add.php"><b>Add New Buku</b></a></br></br>

    <table width= "80%", border="1">
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
        while ($buku_data = mysqli_fetch_array($buku))
        {
            echo "<tr>";
            echo "<td>" .$buku_data['isbn']. "</td>";
            echo "<td>" .$buku_data['judul']. "</td>";
            echo "<td>" .$buku_data['tahun']. "</td>";
            echo "<td>" .$buku_data['pengarang']. "</td>";
            echo "<td>" .$buku_data['penerbit']. "</td>";
            echo "<td>" .$buku_data['katalog']. "</td>";
            echo "<td>" .$buku_data['Jmh_Stok']. "</td>";
            echo "<td>" .$buku_data['harga_pinjam']. "</td>";
            echo "<td><a href='edit.php?isbn = $buku_data[isbn]'>Edit</a> | <a href ='delete.php?isbn = $buku_data[isbn]'>Delete</a></td></tr>"; 
        }
    ?>
    </table>

</body>
</html>