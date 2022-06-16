<?php 
    include_once("connect.php");
    $penerbit = mysqli_query($connect, "SELECT penerbit.*, count(buku.id_penerbit) as total_judul, sum(buku.qty_stok) as total_stok 
    FROM penerbit LEFT JOIN buku ON buku.id_penerbit = penerbit.id_penerbit GROUP BY penerbit.id_penerbit; ");


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

<a href="addPenerbit.php">Add New Publisher</a>
<br>
<br>

    <table class="table" width='80%' border=1> 
        <tr>
            <th>ID Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Email</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th>Total Terbitan</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php 
            while($data = mysqli_fetch_array($penerbit)) {
                echo "<tr>";
                echo "<td>".$data['id_penerbit']."</td>";
                echo "<td>".$data['nama_penerbit']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td>".$data['telp']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "<td>".$data['total_judul']."</td>";
                echo "<td>".$data['total_stok']."</td>";
                echo "<td><a href='editpn.php?idpenerbit=$data[id_penerbit]'>Edit</a> | <a href='deletePN.php?idpenerbit=$data[id_penerbit]'>Delete</a></td></tr>";
            } 
        ?>



    </table>
</body>
</html>