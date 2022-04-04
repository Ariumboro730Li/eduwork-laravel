<html>

<head>
	<title>Add Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
include_once("../connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>

<body>
	<div class="container">
		<a class="btn btn-light" href="index.php">Go to Home</a>
		<br /><br />

		<form action="add.php" method="post">
			<div class="form-group">
				<label for="id_penerbit">ID Penerbit</label>
				<input type="text" class="form-control" id="id_penerbit" name="id_penerbit" required>
			</div>
			<div class="form-group">
				<label for="nama_penerbit">Nama Penerbit</label>
				<input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="telp">Telpon</label>
				<input type="text" class="form-control" id="telp" name="telp" onkeypress="return hanyaAngka(event)" maxlength="15" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" required>
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Add</button>
		</form>
	</div>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$id_penerbit = $_POST['id_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$telp = $_POST['telp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];

		include_once("../connect.php");

		$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");

		header("Location:index.php");
	}
	?>

	<script>
		function hanyaAngka(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
	</script>
</body>

</html>