<html>
<head>
	<title>Add Penerbit</title>
</head>

<?php
	include_once("../connect.php");

    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
 
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Penerbit</td>
				<td><input type="text" name="id_penerbit"></td>
			</tr>
			<tr> 
				<td>Nama Penerbit</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Telp</td>
				<td><input type="tel" name="tel"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id = $_POST['id_penerbit'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			$alamat = $_POST['alamat'];
			
			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`,`email`,`telp`,`alamat`) VALUES ('$id', '$nama','$email','$tel','$alamat');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>