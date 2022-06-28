<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/722aff0915.js" crossorigin="anonymous"></script>
    <title>Edit Katalog</title>
</head>

<?php 
    include_once("connect.php");
    $idkatalog = $_GET['idkatalog'];
    
    $katalog = mysqli_query($connect, "SELECT katalog.*, count(buku.id_katalog) as total_judul, sum(buku.qty_stok) as total_stok 
    FROM katalog LEFT JOIN buku ON buku.id_katalog = katalog.id_katalog WHERE katalog.id_katalog = '$idkatalog' GROUP BY katalog.id_katalog;");

    while($data = mysqli_fetch_array($katalog)){
        $idkg = $data['id_katalog'];
        $nama = $data['nama'];
        $judul = $data['total_judul'];
        $stok = $data['total_stok'];

    }
?>
<body class="bg-success d-flex justify-content-center" style="--bs-bg-opacity:.75">

        
    <div class="main-wrapper my-5">

        <div class="button-return my-1 ">
            <a href="katalog.php"><button class="btn btn-outline-light"><i class="fa-solid fa-arrow-left"></i> Return </button></a>
        </div>

        <div class="form-wrapper my-1">

            <form action="editkg.php?idkatalog=<?php echo $idkatalog; ?>" method = "post">
                <table class = "table table-borderless w-auto text-light fw-bold">
                    <tr>
                        <td>ID Katalog</td>
                        <td><input type="text" name="idkg" value="<?php echo $idkg?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="namakg" value ="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>Total Judul</td>
                        <td><?php echo $judul;?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?php echo $stok?></td>
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
                $idkatalog = $_GET['idkatalog'];
                $idkg = $_POST['idkg'];
                $namakg = $_POST['namakg'];

                include_once("connect.php");
                $result = mysqli_query($connect, "UPDATE katalog SET id_katalog = '$idkg', nama = '$namakg' 
                WHERE id_katalog = '$idkatalog';");

                header("Location:katalog.php");

            }
    ?>

    
    

    
    
</body>
</html>