<?php
session_start();

include_once "functions.php";


?>
<html>

<head>
	<title>Add Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
include_once("connect.php");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
$errors = array();
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
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
		$id_pengarang = $_POST['id_pengarang'];
		$nama_pengarang = $_POST['nama_pengarang'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];
		$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");

		// if data inserted successfully return to index page if set error
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'pengarang added successfully.');
			header("Location:dashboard.php");
		} else {
			$errors['db'] = "insert failed something wrong :(";
		}
	}
}
?>

<body>
	<div class="container">
		<a class="btn btn-light" href="dashboard.php">Go Back</a>
		<br /><br />
		<?php
		if (count($errors) > 0) : ?>
			<?php foreach ($errors as $error) : ?>
				<div class="alert alert-danger">
					<?= $error ?>
				</div>
			<?php endforeach ?>
		<?php endif ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="id_pengarang">ID Pengarang</label>
				<input type="text" class="form-control" id="id_pengarang" name="id_pengarang" required value="<?= $_POST['id_pengarang'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label for="nama_pengarang">Nama Pengarang</label>
				<input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" required value="<?= $_POST['nama_pengarang'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required value="<?= $_POST['email'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label for="telp">Telpon</label>
				<input type="text" class="form-control" id="telp" name="telp" required value="<?= $_POST['telp'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" required value="<?= $_POST['alamat'] ?? "" ?>">
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</body>

</html>