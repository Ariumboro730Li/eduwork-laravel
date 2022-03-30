<html>

<head>
	<title>Add Penerbit</title>
</head>

<?php
include_once("connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>

<body>
	<a href="index.php">Go to Home</a>
	<br /><br />

	<form action="" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>ID Penerbit</td>
				<td><input type="text" name="id_penerbit"></td>
			</tr>
			<tr>
				<td>Nama Penerbit</td>
				<td><input type="text" name="nama_penerbit"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>telp</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea type="text" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$id_penerbit = $_POST['id_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$telp = $_POST['telp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];

		include_once("connect.php");

		$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");

		header("Location:index.php");
	}
	?>
</body>

</html>