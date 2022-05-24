<html>
<head>
   <title>Add Pengarang</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("connect.php");
    
?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    
    <form action="add.php" method="post" name="form1">
        <table class="table" width="25%" border="0">
            <tr>
                <td>id Pengarang</td>
                <td><input type="text" name="id_pengarang"></td>
            </tr>
                <td>Nama Pengarang</td>
                <td><input type="text" name="nama_pengarang"></td>
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
            $id_pengarang = $_POST['id_pengarang'];
            $nama_pengarang = $_POST['nama_pengarang'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];

            include_once("connect.php");


            $result = mysqli_query($mysql, "INSERT INTO pengarang (id_pengarang, nama_pengarang, email, telp, alamat) VALUES ('$id_pengarang', '$nama_pengarang','$email', '$telp', '$alamat')");
        

            header("Location:index.php");
        }    
    ?>
</body>
</html>