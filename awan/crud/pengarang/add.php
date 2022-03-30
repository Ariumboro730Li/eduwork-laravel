<html>

<head>
	<title>Add Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
include_once("connect.php");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
?>

<body>
	<div class="container">
		<a class="btn btn-light" href="index.php">Go Back</a>
		<br /><br />

		<form action="" method="post">
			<div class="form-group">
				<label for="id_pengarang">ID Pengarang</label>
				<input type="text" class="form-control" id="id_pengarang" name="id_pengarang">
			</div>
			<div class="form-group">
				<label for="nama_pengarang">Nama Pengarang</label>
				<input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="telp">Telpon</label>
				<input type="text" class="form-control" id="telp" name="telp">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat">
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Add</button>
		</form>
	</div>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$id_pengarang = $_POST['id_pengarang'];
		$nama_pengarang = $_POST['nama_pengarang'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];

		include_once("connect.php");

		$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");

		header("Location:index.php");
	}
	?>
</body>

</html>