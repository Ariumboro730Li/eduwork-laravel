<?php
session_start();

include_once "functions.php";

include_once("connect.php");
$id_penerbit = $_GET['id_penerbit'];

$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'");
$errors = array();
// Check If form submitted, insert form data into users table.
if (isset($_POST['update'])) {
	// validate email
	// if post email is not valid email
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		// set error to array $errors with key
		$errors['email'] = "Email is not valid";
	}

	// validate if post telp is not numeric
	if (!is_numeric($_POST['telp'])) {
		// set error to array $errors with key
		$errors['telp'] = "Telp is not valid";
	}

	// if no error
	if (count($errors) == 0) {

		$id_penerbit = $_GET['id_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];


		$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'penerbit updated successfully.');
			header("Location:index.php");
		} else {
			$errors['db'] = "insert failed something wrong :(";
		}
	}
}
while ($penerbit_data = mysqli_fetch_array($penerbit)) {
	$nama_penerbit = $penerbit_data['nama_penerbit'];
	$email = $penerbit_data['email'];
	$telp = $penerbit_data['telp'];
	$alamat = $penerbit_data['alamat'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit penerbit</title>
	<!-- include boostrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>



<body>
	<div class="container p-5">
		<div>
			<?php
			if (count($errors) > 0) : ?>
				<?php foreach ($errors as $error) : ?>
					<div class="alert alert-danger">
						<?= $error ?>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
		<a class="btn btn-primary" href="index.php">Go to Home</a>
		<br /><br />

		<form action="edit_penerbit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
			<div class="form-group">
				<label for="id_penerbit">ID Penerbit</label>
				<input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?php echo $id_penerbit; ?>" required>
			</div>
			<div class="form-group">
				<label for="nama_penerbit">Nama Penerbit</label>
				<input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="telp" value="<?php echo $telp; ?>" required>
			</div>
			<div class="form-group">
				<label for="telp">Telpon</label>
				<input type="text" class="form-control" id="telp" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
			</div>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</form>
	</div>
</body>

</html>