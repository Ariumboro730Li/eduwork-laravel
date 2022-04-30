<html>
<head>
	<title>Tambah Katalog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
 
<body>
	<a href="katalog.php">Go to Katalog</a>
	<br/><br/>
 
	<form action="add_katalog.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td><label class="form-label">ID Katalog</label></td>
				<td><input type="text" class="form-control" name="id_katalog" required maxlength="4" pattern="[A-Z]{2}+[0-9]{2}" title="ID Katalog tidak boleh kosong"></td>
			</tr>
			<tr> 
				<td><label class="form-label">Nama Katalog</label></td>
				<td><input type="text" class="form-control" name="nama" required title="Nama Katalog tidak boleh kosong"></td>
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
			$id_katalog = $_POST['id_katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>