<html>

<head>
	<title>Edit Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
include_once("connect.php");
$id_penerbit = $_GET['id_penerbit'];

$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'");

while ($penerbit_data = mysqli_fetch_array($penerbit)) {
	$nama_penerbit = $penerbit_data['nama_penerbit'];
	$email = $penerbit_data['email'];
	$telp = $penerbit_data['telp'];
	$alamat = $penerbit_data['alamat'];
}
?>

<body>
	<div class="container">
		<a class="btn btn-light" href="index.php">Go to Back</a>
		<br /><br />

		<form action="edit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
			<div class="form-group">
				<label for="id_penerbit">ID Penerbit</label>
				<input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?php echo $id_penerbit; ?>">
			</div>
			<div class="form-group">
				<label for="nama_penerbit">Nama Penerbit</label>
				<input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" value="<?php echo $telp; ?>">
			</div>
			<div class="form-group">
				<label for="telp">Telpon</label>
				<input type="text" class="form-control" id="telp" name="telp" value="<?php echo $email; ?>">
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

		$id_penerbit = $_GET['id_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];

		include_once("connect.php");

		$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");

		header("Location:index.php");
	}
	?>
</body>

</html>