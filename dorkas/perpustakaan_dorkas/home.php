<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charsset="utf=8">
	<meta name="viewport" content="width=device-width, initial=scale=1">
	<title>PERPUSTAKAAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style type="text/css">
<!--
.style1 {color: #FFFF00}
-->
    </style>
</head>
<body>
	<! -- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
				<li><a href="#"><i class="fas fa-envelope"></i></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	</div>
	<header>
		<div class="container">
		<h1><a href="home.php">Perpustakaan</a></h1>
		<ul>
			<li class="active"><a href="home.php">BUKU</a></li>
			<li><a href="index.php">PENERBIT</a></li>
			<li><a href="dashboard.php">PENGARANG</a></li>
			<li><a href="homepage.php">KATALOG</a></li>
		</ul>
	</div>
</header>
<!-- banner -->
<section class="banner">
	<marquee>
		<h2 class="style1">Welcome To crud perpustakaan</h2>
	</marquee>
	<img src="img/banner.jpg" height="900px">;
</section>
<!-- buku -->
<section class="buku">
<h1>Homepage</h1>
    
    <center>
    <a href="home.php">Buku</a> |
    <a href="index.php">Penerbit</a> |
    <a href="dashboard.php">Pengarang</a> |
    <a href="homepage.php">Katalog</a>
    <hr>
    </center>

<a href="add_buku.php">Add New Buku</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
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
    <?php  
        while($buku_data = mysqli_fetch_array($buku)) {         
            echo "<tr>";
            echo "<td>".$buku_data['isbn']."</td>";
            echo "<td>".$buku_data['judul']."</td>";
            echo "<td>".$buku_data['tahun']."</td>";    
            echo "<td>".$buku_data['nama_pengarang']."</td>";    
            echo "<td>".$buku_data['nama_penerbit']."</td>";    
            echo "<td>".$buku_data['nama_katalog']."</td>";    
            echo "<td>".$buku_data['qty_stok']."</td>";    
            echo "<td>".$buku_data['harga_pinjam']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit_buku.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete_buku.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</section>
<! -- service -- >
<section class="service">
	<div class="container">
		<h3>SERVICE</h3>
		<div class="box">
			<div class="col-4">
				<div class="icon"><i class="fas fa-desktop"></i></div>
				<h4>KOMPUTER</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-edit"></i></div>
				<h4>DESIGN</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-laptop"></i></div>
				<h4>LAPTOP</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-print"></i></i></div>
				<h4>PRINTER</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-chart-bar"></i></div>
				<h4>DIGITAL MARKETTING</h4>
			</div>
		</div>
	</div>
</section>
<! -- footer -->
<footer>
	<div class="container">
		<small>dorkas & sinambela; 2022 - CRUD PERPUSTAKAAN. All Rights Reserved</small>
</footer>

<script type="text/javascript">
	$(document).ready(function(){
		$(".bg-loader").hide();
	})
</script>
</body>
</html>