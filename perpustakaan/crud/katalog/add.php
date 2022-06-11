<html>
<head>
   <title>Add Katalog</title>
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
                <td>id Katalog</td>
                <td><input type="text" name="id_katalog" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="Submit"  class="btn btn-primary">Add</button><td>
            </tr>

        </table>
    </form>

    <?php
    
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $id_katalog = $_POST['id_katalog'];
            $Nama = $_POST['Nama'];

            include_once("../connect.php");

            function throw_ex($er){  
                throw new Exception($er);
            }
            try {
            
            $result = mysqli_query($mysql, "INSERT INTO katalog (id_katalog, Nama) VALUES ('$id_katalog', '$Nama')");        

            header("Location:index.php");
            } catch(exception $e) {
                //echo "<script>"; 
                echo "<script>alert('id Katalog sudah ada');</script>";
            }
        }    
    ?>
</body>
</html>