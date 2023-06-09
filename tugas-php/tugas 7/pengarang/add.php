<html>
<head>
	<title>Add Pengarang</title>
</head>

<?php
	include_once("../connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pengarang</td>
				<td><input type="text" name="id_pengarang"></td>
			</tr>
			<tr> 
				<td>Nama pengarang</td>
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
			$id = $_POST['id_pengarang'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			$alamat = $_POST['alamat'];
			
			$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`,`email`,`telp`,`alamat`) VALUES ('$id', '$nama','$email','$tel','$alamat');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>