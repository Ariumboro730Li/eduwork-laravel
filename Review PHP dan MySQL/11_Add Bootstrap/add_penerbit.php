<html>
<head>
	<title>Add Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a>
    <hr>
</center>


<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>
 
<body>
	<tr class="container">
	<a class="btn btn-primary" href="index.php">Go Home</a>
	<br/><br/>
 
	<form action="add_penerbit.php" method="post" name="form1">
		<table width="90%" border="0">
			<tr class="form-group"> 
				<td><label for="id_penerbit">ID Penerbit</label></td>
				<td><input type="text" class="form-control" id="id_penerbit" name="id_penerbit" required></td>
			</tr>
			<tr class="form-group"> 
				<td><label for="nama_penerbit">Nama Penerbit</label></td>
				<td><input type="text" class="form-control" id="nama_penebit" name="nama_penerbit" required></td>
			</tr>
			<tr class="form-group"> 
				<td><label for="email">Email</labek></td>
				<td><input type="text" class="form-control" id="email" name="email" required></td>
			</tr>
			<tr class="form-group"> 
				<td><label for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat" required></td>
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
			$id_penerbit = $_POST['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
			
			header("Location:index_penerbit.php");
		}
	?>
</body>
</html>