<html>
<head>
	<title>Tambah Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>
 
<body>
	<a href="penerbit.php">Go to Penerbit</a>
	<br/><br/>
 
	<form action="add_penerbit.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td><label class="form-label">ID Penerbit</label></td>
				<td><input type="text" class="form-control" name="id_penerbit" required maxlength="4" pattern="[A-Z]{2}+[0-9]{2}" title="ID Penerbit tidak boleh kosong"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Nama Penerbit</label></td>
				<td><input type="text" class="form-control" name="nama_penerbit" required title="Nama Penerbit tidak boleh kosong"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Email</label></td>
				<td><input type="text" class="form-control" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email harus diisi dengan contoh sebagai berikut: email@gmail.com"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Nomor Telepon</label></td>
				<td><input type="text" class="form-control" name="telp"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Alamat</label></td>
				<td><input type="text" class="form-control" name="alamat" required title="Alamat tidak boleh kosong"></td>
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
			$id_penerbit = $_POST['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
			
			header("Location:penerbit.php");
		}
	?>
</body>
</html>