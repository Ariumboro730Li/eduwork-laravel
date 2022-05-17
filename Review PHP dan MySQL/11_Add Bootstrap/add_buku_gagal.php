<html>
<head>
	<title>Add Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<center>
    <a href="index.php">Buku</a> |
    <a href="index_penerbit.php">Penerbit</a> |
    <a href="index_pengarang.php">Pengarang</a> |
    <a href="index_katalog.php">Katalog</a>
    <hr>
</center>

<?php
include_once("connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
 
<body>
<tr class="container">
	<a class="btn btn-primary" href="index.php">Go Home</a>
	<br/><br/>
 <tr class="row">
	 <tr class="col-lg-6 mx-auto">
			<form action="index.php" method="post" name="form1">
				<table width="90%" border="0">
					<tr class="form-group"> 
						<td><lablel for="isbn">ISBN</label></td>
						<td><input type="text" class="form-control" id="isbn" name="isbn" required></td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="judul">Judul</label></td>
						<td><input type="text" class="form-control" id="judul" name="judul" required></td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="tahun">Tahun</label></td>
						<td><input type="text" class="form-control" id="tahun" name="tahun" required></td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="id_penerbit">Penerbit</label></td>
						<td>
							<select class="form-control" id="penerbit" name="id_penerbit" required>
								<?php 
									while($penerbit_data = mysqli_fetch_array($penerbit)) {         
										echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="id_pengarang">Pengarang</label></td>
						<td>
							<select class="form-control" id="pengarang" name="id_pengarang" required>
								<?php 
									while($pengarang_data = mysqli_fetch_array($pengarang)) {         
										echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="id_katalog">Katalog</label></td>
						<td>
							<select class="form-control" id="katalog" name="id_katalog" required>
								<?php 
									while($katalog_data = mysqli_fetch_array($katalog)) {         
										echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="qty_stok">Qty Stok</label></td>
						<td><input type="text" class="form-control" id="qty_stok" name="qty_stok" required></td>
					</tr>
					<tr class="form-group"> 
						<td><lablel for="harga_pinjam">Harga Pinjam</label></td>
						<td><input type="text" class="form-control" id="harga_pinjam" name="harga_pinjam" required></td>
					</tr>
					<tr> 
						<td></td>
						<td><input type="submit" name="submit" class="btn btn-primary" value="Add"></td>
					</tr>
				</form>
			</tr>
		</tr>
	</tr>
</table>
		
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
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
			
			if (!$result) {
				echo mysqli_error($mysqli);
			} else {
			
			header("Location:index.php");
			}
		}
		
	?>
</body>
</html>