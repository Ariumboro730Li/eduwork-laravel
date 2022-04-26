<?php
session_start();

include_once "functions.php";

include_once("connect.php");
$id_pengarang = $_GET['id_pengarang'];
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang'");
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
		$id_pengarang = $_GET['id_pengarang'];
		$nama_pengarang = $_POST['nama_pengarang'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];


		$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
		// if data inserted successfully return to index page if set error
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'pengarang updated successfully.');
			header("Location:dashboard.php");
		} else {
			$errors['db'] = "insert failed something wrong :(";
		}
	}
}
while ($pengarang_data = mysqli_fetch_array($pengarang)) {
	$id_pengarang = $pengarang_data['id_pengarang'];
	$nama_pengarang = $pengarang_data['nama_pengarang'];
	$email = $pengarang_data['email'];
	$telp = $pengarang_data['telp'];
	$alamat = $pengarang_data['alamat'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit pengarang</title>
	<!-- include boostrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>



<body>
	<div class="container p-5">
		<?php
		if (count($errors) > 0) : ?>
			<?php foreach ($errors as $error) : ?>
				<div class="alert alert-danger">
					<?= $error ?>
				</div>
			<?php endforeach ?>
		<?php endif ?>
		<a class="btn btn-primary" href="dashboard.php">Go Back</a>
		<br /><br />

		<form action="edit_pengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
			<div class="form-group">
				<label for="id_pengarang">ID pengarang</label>
				<input type="text" class="form-control" id="id_pengarang" name="id_pengarang" value="<?php echo $id_pengarang; ?>" required>
			</div>
			<div class="form-group">
				<label for="nama_pengarang">Nama pengarang</label>
				<input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
				<label for="telp">Telp</label>
				<input type="telp" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required>
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