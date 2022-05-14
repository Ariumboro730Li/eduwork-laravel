<html>
<head>
	<title>Edit Penerbit</title>
</head>

<?php
	include_once("connect.php");
	$id_penerbit = $_GET['id_penerbit'];

	$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'");
	
    while($penerbit_data = mysqli_fetch_array($penerbit))
    {
    	$nama_penerbit = $penerbit_data['nama_penerbit'];
    	$email = $penerbit_data['email'];
    	$telp = $penerbit_data['telp'];
    	$alamat = $penerbit_data['alamat'];

    }
?>
 
<body>
<tr class="container">
<a class="btn btn-primary" href="index_penerbit.php">Go Home</a>
	<br/><br/>
 
	<form action="edit_penerbit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post" name="form1" >
		<table width="25%" border="0">
			<tr class="form-group"> 
				<td><lablel for="id_penerbit">ID Penerbit</label></td>
				<td><input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?php echo $id_penerbit; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="id_penerbit">Nama Penerbit</label></td>
				<td><input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="email">Email</label></td>
				<td><input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" class="btn btn-primary" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_penerbit = $_GET['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];

			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
			
			header("Location:index_penerbit.php");
		}
	?>
</body>
</html>