	<?php
	session_start();

	include_once "function.php";

	include_once("connect.php");

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$id_katalog = $_POST['id_katalog'];
		$nama = $_POST['nama'];

		$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");

		// if data inserted successfully return to index page if set error
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'katalog berhasil ditambahkan.');
			header("Location:index_katalog.php");
		} else {
			$errors['db'] = "insert failed something wrong :(";
		}
	}
	?>
	<html>

	<head>
		<title>Add Katalog</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>

<center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a>
    <a class='btn btn-dark' href="index_pinjam.php">Pinjam</a>  
    <hr>
</center>

	<body>
		<div class="container">
		<a class="btn btn-primary" href="index_katalog.php">Go Home</a>
		<br/><br/>


			<form style="width: 50%;" action="" method="post">
			<tr> 
				<td><label for="id_katalog">ID Katalog</label></td>
				<td><input type="text" class="form-control" id="id_katalog" name="id_katalog" required></td>
			</tr>
			<tr> 
			<td><label for="nama">Nama Katalog</label></td>
				<td><input type="text" class="form-control" id="nama" name="nama" required></td>
			</tr></br>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-success" value="Add"></td>
			</tr>
			</form>
		</div>


	</body>

	</html>