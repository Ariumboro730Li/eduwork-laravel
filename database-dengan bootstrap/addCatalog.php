<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/722aff0915.js" crossorigin="anonymous"></script>
</head>

<?php 
    require_once("connect.php");
?>

<body class="bg-info d-flex justify-content-center" style="--bs-bg-opacity:.5">

    <div class="main-wrapper my-5">
        <div class="button-return my-1 ">
            <a href="katalog.php"><button class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left"></i> Return </button></a>
        </div>

        <div class="form-wrapper my-1">

            <form action="addCatalog.php" method = "post" name="form3">
                <table class = "table table-borderless w-auto text-secondary fw-bold">
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
                        <td><button type="submit" name="Submit" class="btn btn-outline-secondary"><i class="fa-solid fa-plus"></i> Add</button></td>
                    </tr>

                </table>
            </form>

        </div>
        

    </div>

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