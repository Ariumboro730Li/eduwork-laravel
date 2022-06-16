<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Catalog</title>
</head>

<?php 
    require_once("connect.php");
?>

<body>
    <a href="katalog.php"> Go Back</a>
    <br><br>

    <form action="addCatalog.php" method = "post" name="form3">
        <table width = "25%" border = 0>
            <tr>
                <td>ID Katalog</td>
                <td><input type="text" name="id_katalog" ></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_katalog" ></td>
            </tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>

        </table>
    </form>

    <?php 
            if(isset($_POST["Submit"])){
                $idKatalog = $_POST['id_katalog'];
                $namaKatalog = $_POST['nama_katalog'];

                include_once("connect.php");

                $result = mysqli_query($connect, " INSERT INTO `katalog`(`id_katalog`, `nama`)
                VALUES ('$idKatalog', '$namaKatalog');");

                header("location: katalog.php");
                
            }
    
    ?>
    
</body>
</html>