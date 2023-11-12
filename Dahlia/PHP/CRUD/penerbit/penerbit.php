<?php
    include_once("penerbit_connect.php");
    $penerbit = mysqli_query($penerbit_connect,"SELECT penerbit.*,id_penerbit,penerbit,email,tlp,alamat FROM penerbit 
                                ORDER BY id_penerbit ASC");
?>
 
<html>
<head>                                          
    <title>Penerbit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>

<center>
    <a href="../buku/data.php">Buku</a> |
    <a href="../penerbit/penerbit.php">Penerbit</a> |
    <a href="../katalog/katalog.php">Katalog</a> |
    <a href="../pengarang/pengarang_connect.php">Pengarang</a>
    <hr>
</center>

<a href="add.php">Add New Penerbit</a><br/><br/>
 
    <table class="table" width='100%' border=2>
 
    <tr bgcolor= "#40E0D0">
        <th>ID Penerbit</th> 
        <th>Penerbit</th> 
        <th>Email</th> 
        <th>Telephon</th>
        <th>Alamat</th>
        <th>Katalog</th>
    </tr>
    <?php  
        while($penerbit_data = mysqli_fetch_array($penerbit)) {  

            echo "<tr>";
            echo "<td>".$penerbit_data['id_penerbit']."</td>";
            echo "<td>".$penerbit_data['penerbit']."</td>";
            echo "<td>".$penerbit_data['email']."</td>";    
            echo "<td>".$penerbit_data['tlp']."</td>";    
            echo "<td>".$penerbit_data['alamat']."</td>";     
            echo "<td><a class='btn btn-primary' href='edit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>