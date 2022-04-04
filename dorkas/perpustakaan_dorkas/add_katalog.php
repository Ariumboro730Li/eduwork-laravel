	<?php
	session_start();

	include_once "functions.php";

	include_once("connect.php");

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$id_katalog = $_POST['id_katalog'];
		$nama = $_POST['nama'];

		$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");

		// if data inserted successfully return to index page if set error
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'katalog added successfully.');
			header("Location:homepage.php");
		}
	}
	?>
	<html>

	<head>
		<title>Add Katalog</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			<a class="btn btn-light" href="homepage.php">Go Back</a>
			<br /><br />

			<form style="width: 50%;" action="" method="post">
				<div class="form-group">
					<label for="id_katalog">ID Katalog</label>
					<input type="text" class="form-control" id="id_katalog" name="id_katalog" required>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" required>
				</div>
				<button type="submit" name="Submit" class="btn btn-primary">Add</button>
			</form>
		</div>


	</body>

	</html>