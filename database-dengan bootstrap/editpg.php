<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/722aff0915.js" crossorigin="anonymous"></script>
    <title>Edit Pengarang</title>
</head>

<?php
    include_once("connect.php");
    $idpengarang = $_GET['idpengarang'];

    $pengarang = mysqli_query($connect, "SELECT pengarang.*, count(buku.id_pengarang) as total_karya, sum(buku.qty_stok) as total_stok 
    FROM pengarang LEFT JOIN buku ON buku.id_pengarang = pengarang.id_pengarang WHERE pengarang.id_pengarang = '$idpengarang'
    GROUP BY pengarang.id_pengarang;");
    

    while($data = mysqli_fetch_array($pengarang)){
        $idpn = $data['id_pengarang'];
        $nama = $data['nama_pengarang'];
        $email = $data['email'];
        $telp = $data['telp'];
        $alamat = $data['alamat'];
        $karya = $data['total_karya'];
        $stok = $data['total_stok'];
    }

?>
<body class="bg-success d-flex justify-content-center" style="--bs-bg-opacity:.75">

    <div class="main-wrapper my-5">

        <div class="button-return my-1 ">
            <a href="pengarang.php"><button class="btn btn-outline-light"><i class="fa-solid fa-arrow-left"></i> Return </button></a>
        </div>

        <div class="form-wrapper my-1">
            <form action="editpg.php?idpengarang=<?php echo $idpengarang; ?>" method = "post">
                <table class = "table table-borderless w-auto text-light fw-bold">
                    <tr>
                        <td>ID Pengarang</td>
                        <td><input type="text" name = "idpn" value="<?php echo $idpn; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?php echo $email?>"></td>
                    </tr>
                    <tr>
                        <td>Kontak</td>
                        <td><input type="tel" name="telp" value="<?php echo $telp; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
                    </tr>
                    <tr>
                        <td>Total Karya</td>
                        <td><?php echo $karya; ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?php echo $stok; ?></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><button type="submit" name="update" class="btn btn-outline-light"><i class="fa-solid fa-check"></i> Update </button></td>
                    </tr>
                </table>
            </form>

        </div>

        <div class="table-notice" style="font-size:10px;">
            <table class="table table-borderless w-auto text-white">
                <tr>
                    <td>*Id hanya bisa diubah jika tidak terikat dengan data buku</td>
                </tr>
            </table>

        </div>

    </div>
    
    
    

    <?php 
            if(isset($_POST['update'])) {
                $idpengarang = $_GET['idpengarang'];
                $idpn = $_POST['idpn'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $telp = $_POST['telp'];
                $alamat = $_POST['alamat'];

                include_once("connect.php");
                $result = mysqli_query($connect, "UPDATE pengarang SET id_pengarang = '$idpn', nama_pengarang = '$nama', 
                email = '$email', telp = $telp, alamat = '$alamat' WHERE id_pengarang = '$idpengarang';");

                header("Location:pengarang.php");

            }
    ?>
</body>
</html>