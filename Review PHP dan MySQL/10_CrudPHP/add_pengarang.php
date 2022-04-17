<html>
<head>
	<title>Add Pengarang</title>
	
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
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
?>
 
<body>
	<tr class="container">
	<a class="btn btn-primary" href="index.php">Go Home</a>
	<br/><br/>
 
	<form action="add_pengarang.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td><label for="id_pengarang">ID Pengarang</label></td>
				<td><input type="text" class="form-control" id="id_pengarang" name="id_pengarang"></td>
			</tr>
			<tr> 
				<td><label for="nama_pengarang">Nama Pengarang</label></td>
				<td><input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang"></td>
			</tr>
			<tr> 
				<td><label for="email">Email</label></td>
				<td><input type="text" class="form-control" id="email" name="email"></td>
			</tr>
			<tr> 
				<td><label for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp"></td>
			</tr>
			<tr> 
				<td><label for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-primary" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id_pengarang = $_POST['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");
			
			header("Location:index_pengarang.php");
		}
	?>
</body>
</html>