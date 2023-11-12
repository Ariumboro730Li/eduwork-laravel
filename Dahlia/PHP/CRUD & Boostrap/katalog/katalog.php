<?php
    include_once("katalog_connect.php");
    $katalog = mysqli_query($katalog_connect,"SELECT detail_katalog.*,id_katalog, katalog FROM detail_katalog 
                                ORDER BY id_katalog ASC");
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
    <a href="../penerbit/penerbit.php">Penerbit</a> |
    <a href="../katalog/katalog.php">Katalog</a> |
    <a href="../pengarang/pengarang.php">Pengarang</a>
    <hr>
</center>

<a href="add.php">Add New Katalog</a><br/><br/>
 
    <table class="table table-bordered" width='50%' border=1>
 
    <tr bgcolor = "	#40E0D0">
        <th>ID Katalog</th> 
        <th>Katalog</th> 
        <th>Rasio</th>
        
    </tr>
    <?php  
        while($katalog_data = mysqli_fetch_array($katalog)) {         
            echo "<tr>";
            echo "<td>".$katalog_data['id_katalog']."</td>";
            echo "<td>".$katalog_data['katalog']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>