<?php 
    include_once("connect.php");
    $katalog = mysqli_query($connect, "SELECT katalog.*, count(buku.id_katalog) as total_judul, sum(buku.qty_stok) as total_stok 
    FROM katalog LEFT JOIN buku ON buku.id_katalog = katalog.id_katalog GROUP BY katalog.id_katalog;");


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
    <a href="addCatalog.php">Add New Catalog</a>
    <br>
    <br>
    
    <table class="table" width='80%' border=1>
        <tr>
            <th>ID Katalog</th>
            <th>Nama</th>
            <th>Total Judul</th>
            <th>Total Stok</th>
            <th>Aksi</th>
        </tr>

        <?php 
            while($data = mysqli_fetch_array($katalog)){
                echo "<tr>";
                echo "<td>".$data["id_katalog"]."</td>";
                Echo "<td>".$data["nama"]."</td>";
                echo '<td>'.$data["total_judul"].'</td>';
                echo '<td>'.$data["total_stok"].'</td>'; 
                Echo "<td><a href='editkg.php?idkatalog=$data[id_katalog]'>Edit</a> | <a href='deletekg.php?idkg=$data[id_katalog]'>Delete</a></td></tr>";
            }
        ?>

    </table>


</body>
</html>