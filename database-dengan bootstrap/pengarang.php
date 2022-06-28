<?php 
    include_once("connect.php");
    $pengarang = mysqli_query($connect, "SELECT pengarang.*, count(buku.id_pengarang) as total_karya, sum(buku.qty_stok) as total_stok 
    FROM pengarang LEFT JOIN buku ON buku.id_pengarang = pengarang.id_pengarang GROUP BY pengarang.id_pengarang;");


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/722aff0915.js" crossorigin="anonymous"></script>
    <title>Pengarang</title>

</head>

<header >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNav">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="penerbit.php">Penerbit</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pengarang.php">Pengarang</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="katalog.php">Katalog</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

</header>

<body class="bg-dark bg-gradient">


    <div class="main-wrapper ">

        <div class = "add-button m-3">
                <a href="addAuthor.php">
                <button type="button" class="btn btn-outline-light" > <i class="fa-solid fa-plus"></i> Add New Author</button>
                </a>
        </div>

        <div class="wrapper-table mx-3 my-2">
            <table class="table table-secondary table-hover">
                <tr>
                    <th>ID Pengarang</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                    <th>Total Karya</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php 
                    while($data = mysqli_fetch_array($pengarang)){
                        echo '<tr>';
                        echo '<td>'.$data['id_pengarang'].'</td>';
                        echo '<td>'.$data['nama_pengarang'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['telp'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['total_karya'].'</td>';
                        echo '<td>'.$data['total_stok'].'</td>';
                        echo "<td><a href='editpg.php?idpengarang=$data[id_pengarang]'><button type='button' class = 'btn btn-outline-success'> <i class='fa-solid fa-pen-to-square'></i> Edit </button></a>  <a href='deletepg.php?idpg=$data[id_pengarang]'><button type='button' class = 'btn btn-outline-danger'> <i class='fa-solid fa-trash-can'></i> Delete </button></a></td></tr>";
                    }
                ?>


            </table>

        </div>


    </div>

   
</body>
</html>