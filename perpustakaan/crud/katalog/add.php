<html>
<head>
   <title>Add Katalog</title>
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
                <td>id Katalog</td>
                <td><input type="text" name="id_katalog"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
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
            $id_katalog = $_POST['id_katalog'];
            $Nama = $_POST['Nama'];

            include_once("connect.php");

            $result = mysqli_query($mysql, "INSERT INTO katalog (id_katalog, Nama) VALUES ('$id_katalog', '$Nama')");
        

            header("Location:index.php");
        }    
    ?>
</body>
</html>