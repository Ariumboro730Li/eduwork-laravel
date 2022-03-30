<html>

<head>
	<title>Add Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<a class="btn btn-light" href="index.php">Go Back</a>
		<br /><br />

		<form style="width: 50%;" action="" method="post">
			<div class="form-group">
				<label for="id_katalog">ID Katalog</label>
				<input type="text" class="form-control" id="id_katalog" name="id_katalog">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Add</button>
		</form>
	</div>

	<?php
	include_once("connect.php");

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$id_katalog = $_POST['id_katalog'];
		$nama = $_POST['nama'];

		$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");

		header("Location:index.php");
	}
	?>
</body>

</html>