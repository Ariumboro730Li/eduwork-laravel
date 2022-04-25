<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
 
<body>
	<a href="index.php">Go to Buku</a>
	<br/><br/>
 
	<form action="add_buku.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td><label class="form-label">ISBN</label></td>
				<td><input type="text" class="form-control" name="isbn"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Judul</label></td>
				<td><input type="text" class="form-control" name="judul"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Tahun</label></td>
				<td><input type="text" class="form-control" name="tahun"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Penerbit</label></td>
				<td>
					<select class="btn btn-secondary dropdown-toggle" name="id_penerbit">
						<?php 
						    while($penerbit_data = mysqli_fetch_array($penerbit)) {         
						    	echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td><label class="form-label">Pengarang</label></td>
				<td>
					<select class="btn btn-secondary dropdown-toggle" name="id_pengarang">
						<?php 
						    while($pengarang_data = mysqli_fetch_array($pengarang)) {         
						    	echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td><label class="form-label">Katalog</label></td>
				<td>
					<select class="btn btn-secondary dropdown-toggle" name="id_katalog">
						<?php 
						    while($katalog_data = mysqli_fetch_array($katalog)) {         
						    	echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td><label class="form-label">Qty Stok</label></td>
				<td><input type="text" class="form-control" name="qty_stok"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Harga Pinjam</label></td>
				<td><input type="text" class="form-control" name="harga_pinjam"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['submit'])) {
			$isbn = $_POST['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>