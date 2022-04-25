<html>
<head>
	<title>Tambah Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
?>
 
<body>
	<a href="pengarang.php">Go to Pengarang</a>
	<br/><br/>
 
	<form action="add_pengarang.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td><label class="form-label">ID Pengarang</label></td>
				<td><input type="text" class="form-control" name="id_pengarang"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Nama Pengarang</label></td>
				<td><input type="text" class="form-control" name="nama_pengarang"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Email</label></td>
				<td><input type="text" class="form-control" name="email"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Nomor Telepon</label></td>
				<td><input type="text" class="form-control" name="telp"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Alamat</label></td>
				<td><input type="text" class="form-control" name="alamat"></td>
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
			$id_pengarang = $_POST['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");
			
			header("Location:pengarang.php");
		}
	?>
</body>
</html>