<?php 
    include_once("connect.php");
    $pengarang = mysqli_query($connect, "SELECT pengarang.*, count(buku.id_pengarang) as total_karya, sum(buku.qty_stok) as total_stok 
    FROM pengarang LEFT JOIN buku ON buku.id_pengarang = pengarang.id_pengarang GROUP BY pengarang.id_pengarang;");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<center>
    | <a href="index.php">buku</a> |
    <a href="penerbit.php">Penerbit</a> |
    <a href="pengarang.php">Pengarang</a> |
    <a href="katalog.php">Katalog</a> |
    <hr>

</center>

<a href="addAuthor.php">Add New Author</a>
<br>
<br>

    <table class="table" width='80%' border=1>
        <tr>
            <th>ID Pengarang</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th>Total Karya</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php 
            while($data = mysqli_fetch_array($pengarang)){
                echo '<tr>';
                echo '<td>'.$data['id_pengarang'].'</td>';
                echo '<td>'.$data['nama_pengarang'].'</td>';
                echo '<td>'.$data['email'].'</td>';
                echo '<td>'.$data['telp'].'</td>';
                echo '<td>'.$data['alamat'].'</td>';
                echo '<td>'.$data['total_karya'].'</td>';
                echo '<td>'.$data['total_stok'].'</td>';
                echo "<td><a href='editpg.php?idpengarang=$data[id_pengarang]'>Edit</a> | <a href='deletepg.php?idpg=$data[id_pengarang]'>Delete</a></td></tr>";
            }
        ?>


    </table>
</body>
</html>