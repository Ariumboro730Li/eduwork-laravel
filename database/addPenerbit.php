<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Publisher</title>
</head>

<?php
    require_once("connect.php");
?>
<body>
    <a href="penerbit.php">Go Back</a>
    <br>
    <br>

    <form action="addPenerbit.php" method = "post" name="form2">
        <table width = "25%" border = 0>
            <tr>
                <td>ID Penerbit</td>
                <td><input type="text" name="id_penerbit" ></td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" ></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="tel" name="telp" ></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" ></td>
            </tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>

        </table>

    </form>

    <?php 
    
        if(isset($_POST['Submit'])){
            $idPenerbit = $_POST['id_penerbit'];
            $namaPenerbit = $_POST['nama_penerbit'];
            $email = $_POST['email'];
            $telp =$_POST['telp'];
            $alamat = $_POST['alamat'];
            
            include_once("connect.php");

            $result = mysqli_query($connect, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) 
            VALUES ('$idPenerbit', '$namaPenerbit', '$email', '$telp', '$alamat');");
            
            header("location:penerbit.php");

        }

    ?>

    
</body>
</html>