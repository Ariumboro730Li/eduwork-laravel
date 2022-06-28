<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/722aff0915.js" crossorigin="anonymous"></script>
    <title>Add New Author</title>
</head>

<?php
    require_once("connect.php");
?>

<body class="bg-info d-flex justify-content-center" style="--bs-bg-opacity:.5">

    <div class="main-wrapper my-5">

        <div class="button-return my-1 ">
            <a href="pengarang.php"><button class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left"></i> Return </button></a>
        </div>

        <div class="form-wrapper my-1 ">
            <form action="addAuthor.php" method = "post" name="form3">
                <table class = "table table-borderless w-auto text-secondary fw-bold">
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
                        <td><button type="submit" name="Submit" class="btn btn-outline-secondary"><i class="fa-solid fa-plus"></i> Add</button>
                            
                    </tr>

                </table>
            </form>

        </div>

    </div>
    
    
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