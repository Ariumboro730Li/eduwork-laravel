<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/722aff0915.js" crossorigin="anonymous"></script>
    <title>Edit Penerbit</title>
</head>

<?php
    include_once("connect.php");
    $idpenerbit = $_GET['idpenerbit'];

    $penerbit = mysqli_query($connect, "SELECT penerbit.*, count(buku.id_penerbit) as total_judul, sum(buku.qty_stok) as total_stok 
    FROM penerbit LEFT JOIN buku ON buku.id_penerbit = penerbit.id_penerbit WHERE penerbit.id_penerbit='$idpenerbit' GROUP BY penerbit.id_penerbit");

    while($data = mysqli_fetch_array($penerbit)) {
        $nama = $data['nama_penerbit'];
        $idpenerbit = $data['id_penerbit'];
        $email = $data['email'];
        $telp = $data['telp'];
        $alamat = $data['alamat'];
        $terbitan = $data['total_judul'];
        $stok = $data['total_stok'];
    }

?>

<body class="bg-success d-flex justify-content-center" style="--bs-bg-opacity:.75">

    <div class="main-wrapper my-5">

        <div class="button-return my-1 ">
            <a href="penerbit.php"><button class="btn btn-outline-light"><i class="fa-solid fa-arrow-left"></i> Return </button></a>
        </div>

        <div class="form-wrapper my-1">
            <form action="editpn.php?idpenerbit=<?php echo $idpenerbit; ?>" method="post">
                <table class = "table table-borderless w-auto text-light fw-bold">
                    <tr>
                        <td>ID Penerbit</td>
                        <td><input type="text" name="idpn" value="<?php echo $idpenerbit; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="namapn" value="<?php echo $nama;?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?php echo $email;?>"></td>
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
                        <td>Total Terbitan</td>
                        <td><?php echo $terbitan; ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?php echo $stok;?></td>
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

            $idpenerbit = $_GET['idpenerbit'];
            $idpn = $_POST['idpn'];
            $nama = $_POST['namapn'];
            $email = $_POST['email'];
            $kontak = $_POST['telp'];
            $alamat = $_POST['alamat'];


            include_once("connect.php");

            $result = mysqli_query($connect, "UPDATE `penerbit` SET id_penerbit = '$idpn', nama_penerbit='$nama', 
            email = '$email', telp = '$kontak', alamat ='$alamat' WHERE id_penerbit = '$idpenerbit';");

            header("Location:penerbit.php");
        }
    ?>
</body>
</html>