<html>
<head>
	<title>Edit Pengarang</title>
</head>

<?php
	include_once("connect.php");
	$id_pengarang = $_GET['id_pengarang'];
	$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang'");
	
    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
    	$id_pengarang = $pengarang_data['id_pengarang'];
    	$nama_pengarang = $pengarang_data['nama_pengarang'];
    	$email = $pengarang_data['email'];
    	$telp = $pengarang_data['telp'];
    	$alamat = $pengarang_data['alamat'];

    }
?>
 
<body>
<a class="btn btn-primary" href="index_pengarang.php">Go Home</a>
	<br/><br/>
 
	<form action="edit_pengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td><lablel for="id_pengarang">ID Pengarang</label></td>
				<td><input type="text" class="form-control" id="id_pengarang" name="id_pengarang" value="<?php echo $id_pengarang; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="nama_pengarang">Nama Pengarang</label></td>
				<td><input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="email">Email</label></td>
				<td><input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required></td>
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

			$id_pengarang = $_GET['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];

			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("Location:index_pengarang.php");
		}
	?>
</body>
</html>