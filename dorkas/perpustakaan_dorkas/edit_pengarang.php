<html>

<head>
	<title>Edit Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
include_once("connect.php");
$id_pengarang = $_GET['id_pengarang'];
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang'");

while ($pengarang_data = mysqli_fetch_array($pengarang)) {
	$id_pengarang = $pengarang_data['id_pengarang'];
	$nama_pengarang = $pengarang_data['nama_pengarang'];
	$email = $pengarang_data['email'];
	$telp = $pengarang_data['telp'];
	$alamat = $pengarang_data['alamat'];
}
?>

<body>

	<div class="container">
		<a class="btn btn-light" href="dashboard.php">Go Back</a>
		<br /><br />

		<form action="edit_pengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
			<div class="form-group">
				<label for="id_pengarang">ID pengarang</label>
				<input type="text" class="form-control" id="id_pengarang" name="id_pengarang" value="<?php echo $id_pengarang; ?>">
			</div>
			<div class="form-group">
				<label for="nama_pengarang">Nama pengarang</label>
				<input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
				<label for="telp">Telp</label>
				<input type="telp" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
			</div>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</form>
	</div>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['update'])) {

		$id_pengarang = $_GET['id_pengarang'];
		$nama_pengarang = $_POST['nama_pengarang'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];

		include_once("connect.php");

		$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");

		header("Location:dashboard.php");
	}
	?>
</body>

</html>