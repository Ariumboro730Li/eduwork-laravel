<?php
include_once("connect.php");
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
 
<html>
<head>    
    <title>Home Katalog</title>
    
</head>
 
<body>

<center>
<a href="index.php">Buku</a> |
<a href="index_penerbit.php">Penerbit</a> |
<a href="index_pengarang.php">Pengarang</a> |
<a href="index_katalog.php">Katalog</a>
<hr>
</center>

<a class="btn btn-success ml-1 mt-1" href="add_katalog.php">Add New Katalog</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Katalog</th> 
        <th>Nama Katalog</th> 
        <th>Aksi</th>
    </tr>
    <?php  
        while($katalog_data = mysqli_fetch_array($katalog)) {         
            echo "<tr>";
            echo "<td>" . $katalog_data['id_katalog'] . "</td>";
            echo "<td>" . $katalog_data['nama'] . "</td>";
            echo "<td><a class='btn btn-primary' href='edit_katalog.php?id_penerbit=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='delete_katalog.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";
        }
    ?>
    </table>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>