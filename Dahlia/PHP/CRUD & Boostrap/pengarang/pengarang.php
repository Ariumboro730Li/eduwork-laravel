<?php
    include_once("pengarang_connect.php");
    $pengarang = mysqli_query($pengarang_connect,"SELECT pengarang.*,id_pengarang, pengarang ,email,tlp,alamat FROM pengarang
                                ORDER BY id_pengarang ASC");
?>
 
<html>
<head>                                          
    <title>Pengarang</title>
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

<a href="add.php">Add New Pengarang</a><br/><br/>
 
    <table class="table" width='100%' border=1>
 
    <tr bgcolor ="#40E0D0">
        <th>ID Pengarang</th> 
        <th>Pengarang</th> 
        <th>Email</th> 
        <th>Telephon</th>
        <th>Alamat</th>
        <th>Rasio</th>
    </tr>
    <?php  
        while($pengarang_data = mysqli_fetch_array($pengarang)) {  

            echo "<tr>";
            echo "<td>".$pengarang_data['id_pengarang']."</td>";
            echo "<td>".$pengarang_data['pengarang']."</td>";
            echo "<td>".$pengarang_data['email']."</td>";    
            echo "<td>".$pengarang_data['tlp']."</td>";    
            echo "<td>".$pengarang_data['alamat']."</td>";     
            echo "<td><a class='btn btn-primary' href='edit.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>