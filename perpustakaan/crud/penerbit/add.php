<html>
<head>
   <title>Add Penerbit</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("../connect.php");
    
?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    
    <form action="add.php" method="post" name="form1">
        <table class="table" width="25%" border="0">
            <tr>
                <td>id Penerbit</td>
                <td><input type="text" name="id_penerbit" required></td>
            </tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="number" name="telp" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
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

            include_once("../connect.php");

            //$result = mysqli_query($mysql, "INSERT INTO penerbit (id_penerbit, nama_penerbit, email, telp, alamat) VALUES ('$id_penerbit', '$nama_penerbit','$email', '$telp', '$alamat')");
        
            function throw_ex($er){  
                throw new Exception($er);  
            } 

            //echo($result);
                
            try {
                $result = mysqli_query($mysql, "INSERT INTO penerbit (id_penerbit, nama_penerbit, email, telp, alamat) VALUES ('$id_penerbit', '$nama_penerbit','$email', '$telp', '$alamat')") or throw_ex(mysql_error()); 
                
                header("Location:index.php");
            }  catch(exception $e) {
              //echo "<script>"; 
              echo "<script>alert('Id Penerbit Sudah ada');</script>";
            
            }

            
        }    
    ?>
</body>
</html>