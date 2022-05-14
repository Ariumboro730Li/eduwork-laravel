<html>
<head>
	<title>Edit Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a>
    <a class='btn btn-dark' href="index_pinjam.php">Pinjam</a>
    <hr>
</center>

<?php
	include_once("connect.php");
	$isbn = $_GET['isbn'];

	$buku = mysqli_query($mysqli, "SELECT * FROM buku WHERE isbn='$isbn'");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM  penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");

    while($buku_data = mysqli_fetch_array($buku))
    {
    	$judul = $buku_data['judul'];
    	$isbn = $buku_data['isbn'];
    	$tahun = $buku_data['tahun'];
    	$id_penerbit = $buku_data['id_penerbit'];
    	$id_pengarang = $buku_data['id_pengarang'];
    	$id_katalog = $buku_data['id_katalog'];
    	$qty_stok = $buku_data['qty_stok'];
    	$harga_pinjam = $buku_data['harga_pinjam'];
    }
?>
 
<body>
	<a class="btn btn-primary" href="index.php">Go Home</a>
	<br/><br/>
 
	<form action="edit_buku.php?isbn=<?php echo $isbn; ?>" method="post">
		<table width="90%" border="0">
			<tr>
				<td><lablel for="isbn">ISBN</label></td>
				<td><input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn; ?>" required></td>
			</tr>
			<tr> 
				<td>Judul</td>
				<td><input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>" required></td>
			</tr>
			<tr> 
				<td>Tahun</td>
				<td><input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="id_penerbit">Penerbit</label></td>
				<td>
					<select class="form-control" id="penerbit" name="id_penerbit" required>
						<?php 
						    while($penerbit_data = mysqli_fetch_array($penerbit)) {         
						    	echo "<option ".($penerbit_data['id_penerbit'] == $id_penerbit ? 'selected' : '')." value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td><lablel for="id_pengarang">Pengarang</label></td>
				<td>
					<select class="form-control" id="pengarang" name="id_pengarang" required>
						<?php 
						    while($pengarang_data = mysqli_fetch_array($pengarang)) {         
						    	echo "<option ".($pengarang_data['id_pengarang'] == $id_pengarang ? 'selected' : '')." value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td><lablel for="id_katalog">Katalog</label></td>
				<td>
					<select class="form-control" id="katalog" name="id_katalog" required>
						<?php 
						    while($katalog_data = mysqli_fetch_array($katalog)) {         
						    	echo "<option ".($katalog_data['id_katalog'] == $id_katalog ? 'selected' : '')." value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td><lablel for="qty_stok">Qty Stok</label></td>
				<td><input type="text" class="form-control" id="qty_stok" name="qty_stok" value="<?php echo $qty_stok; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="harga_pinjam">Harga Pinjam</label></td>
				<td><input type="text" class="form-control" id="harga_pinjam" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" class="btn btn-success" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$isbn = $_GET['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>