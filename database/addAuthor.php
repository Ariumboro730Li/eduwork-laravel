<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Author</title>
</head>
<?php
    require_once("connect.php");
?>
<body>
    <a href="pengarang.php">Go Back</a>
    <br>
    <br>
    <form action="addAuthor.php" method = "post" name="form3">
        <table width = "25%" border = 0>
            <tr>
                <td>ID Pengarang</td>
                <td><input type="text" name="id_pengarang" ></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama_pengarang" ></td>
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
        if(isset($_POST["Submit"])){
            $idPengarang = $_POST['id_pengarang'];
            $namaPengarang = $_POST['nama_pengarang'];
            $email = $_POST['email'];
            $kontak = $_POST['telp'];
            $alamat = $_POST['alamat'];

            include_once("connect.php");

            $result = mysqli_query($connect, "INSERT INTO `pengarang`(`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`)
            VALUES ('$idPengarang','$namaPengarang','$email','$kontak','$alamat');");

            header("location:pengarang.php");
        }
    ?>
</body>
</html>