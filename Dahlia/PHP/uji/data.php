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
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>

<center>
    <a href="data.php">Buku</a> |
    <a href="#">Penerbit</a> |
    <a href="#">Pengarang</a> |
    <a href="#">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Buku</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
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
        while($buku_data = mysqli_fetch_array($buku)) {         
            echo "<tr>";
            echo "<td>".$buku_data['isbn']."</td>";
            echo "<td>".$buku_data['judul']."</td>";
            echo "<td>".$buku_data['tahun']."</td>";    
            echo "<td>".$buku_data['pengarang']."</td>";    
            echo "<td>".$buku_data['penerbit']."</td>";    
            echo "<td>".$buku_data['katalog']."</td>";    
            echo "<td>".$buku_data['Jmh_Stok']."</td>";    
            echo "<td>".$buku_data['harga_pinjam']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>