<html>
<head>
	<title>Add Katalog</title>
	
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
	<a class="btn btn-primary" href="index_katalog.php">Go Home</a>
	<br/><br/>
 
	<form action="add_katalog.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td><label for="id_katalog">ID Katalog</label></td>
				<td><input type="text" class="form-control" id="id_katalog" name="id_katalog" required></td>
			</tr>
			<tr> 
			<td><label for="nama">Nama Katalog</label></td>
				<td><input type="text" class="form-control" id="nama" name="nama" required></td>
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
			$id_katalog = $_POST['id_katalog'];
			$nama_katalog = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");
			
			header("Location:index_katalog.php");
		}
	?>
</body>
</html>