<html>
<head>
   <title>Add Penerbit</title>
</head>

<?php
    include_once("connect.php");
    
?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>id Penerbit</td>
                <td><input type="text" name="id_penerbit"></td>
            </tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="Submit" class="btn btn-primary">Add</button><td>
            </tr>
        </table>
    </form>

    <?php
    
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $id_penerbit = $_POST['id_penerbit'];
            $nama_penerbit = $_POST['nama_penerbit'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];

            include_once("connect.php");

            $result = mysqli_query($mysql, "INSERT INTO penerbit (id_penerbit, nama_penerbit, email, telp, alamat) VALUES ('$id_penerbit', '$nama_penerbit','$email', '$telp', '$alamat')");
        
            header("Location:index.php");
        }    
    ?>
</body>
</html>