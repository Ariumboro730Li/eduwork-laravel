<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku
        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
        ORDER BY judul asc");
    $count = mysqli_num_rows($buku);
?>

<html>
<head>
    <title>Homepage</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-bg">
                <a class="navbar-brand navbar-logo" href="#"><img class="text-center" src="https://eduwork.id/assets/favicon.png" alt="logo eduwork" width=120 height=25></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
                </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><i class="fas fa-book"></i>Buku</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="penerbit/index.php"><i class="far fa-address-book"></i>Penerbit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengarang/index.php"><i class="far fa-clone"></i>Pengarang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="katalog/index.php"><i class="far fa-copy"></i>Katalog</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="card "  style="height:120%; overflow: hidden;">
        <div class="card-body" >
            <div class="container-fluid mt-5">

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card shadow mb-4" style="height:50%; overflow: auto;">
                        <div class="card-header bg-danger py-3 d-flex justify-content-between align-items-center" >
                          <h6 class="m-0 font-weight-bold text-white">
                          Data Buku</h6>
                          <h6 class="m-0 font-weight-bold text-white">
                          Jumlah Data : <?= $count;?>
                          <span class="p-2 fw-bold"></span>
                          </h6>
                        </div>
            <div class="card-body" >
                <div class=" mb-3">
                    <a href="" class="btn btn-success btn-md" data-target='#Modal' data-toggle='modal'>
                  <i class="fas fa-fw fa-plus-circle add"></i>
                  Tambah Data Buku
                  </a>
                </div>
                        <div class="table-responsive" >
                        <table class="table table-bordered text-center table-striped">
                            <thead>
                             <tr>
                                <th>No</th>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Katalog</th>
                                <th>Stok</th>
                                <th>Harga Pinjam</th>
                                <th>Aksi</th>
                             </tr>
                            </thead>
                            <tbody>
                               <?php
                                $no=1;
                                while($buku_data = mysqli_fetch_array($buku)) {
                                    $id=$buku_data['isbn'];

                                    echo "<tr>";
                                    echo "<td>".$no++."</td>";
                                    echo "<td>".$buku_data['isbn']."</td>";
                                    echo "<td>".$buku_data['judul']."</td>";
                                    echo "<td>".$buku_data['tahun']."</td>";
                                    echo "<td>".$buku_data['nama_pengarang']."</td>";
                                    echo "<td>".$buku_data['nama_penerbit']."</td>";
                                    echo "<td>".$buku_data['nama_katalog']."</td>";
                                    echo "<td>".$buku_data['qty_stok']."</td>";
                                    echo "<td>".$buku_data['harga_pinjam']."</td>";
                                    ?>


                                    <td><a class="btn btn-primary btn-sm" data-target="#Modaledit<?= $id; ?>" data-toggle="modal" href="#" ><i class="fa fa-edit fa-sm"></i> Edit</a> |
                                    <a class="btn btn-danger btn-sm" data-target="#Modalhapus<?= $id; ?>" data-toggle="modal" href="#"><i class="fa fa-trash fa-sm"></i> Delete</a></td></tr>
                             <?php
                    include_once("connect.php");
                        $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
                        $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
                        $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");

                        require 'buku/modal.php';

                                }
                            ?>
                            </tbody>
                        </table>
                       </div>
                     </div>
                   </div>
                </div>
                </div>
        </div>
    </div>
    <?php


?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
