<?php
session_start();

include_once "function.php";


?>
<html>

<head>
	<title>Add Penerbit</title>
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

<?php
include_once("connect.php");

$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
$errors = array();
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {


	// validate email
	// if post email is not valid email
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		// set error to array $errors with key
		$errors['email'] = "Email must be Include @gmail.com";
	}

	// validate if post telp is not numeric
	if (!is_numeric($_POST['telp'])) {
		// set error to array $errors with key
		$errors['telp'] = "Telephone Must be Number";
	}

	// if no error
	if (count($errors) == 0) {
		// insert data to database
		$id_penerbit = $_POST['id_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$telp = $_POST['telp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
		// if data inserted successfully return to index page if set error
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'penerbit berhasil ditambahkan.');
			header("Location:index_penerbit.php");
		} else {
			$errors['db'] = "insert failed something wrong :(";
		}
	}
}

?>

<body>
	<div class="container">
		<a class="btn btn-primary" href="index.php">Home</a>
		<br /><br />
		<!-- show errors with alert component boostrap 4 -->
		<?php
		if (count($errors) > 0) : ?>
			<?php foreach ($errors as $error) : ?>
				<div class="alert alert-danger">
					<?= $error ?>
				</div>
			<?php endforeach ?>
		<?php endif ?>
		<form action="add_penerbit.php" method="post">
			<div class="form-group">
				<label for="id_penerbit">ID Penerbit</label>
				<input type="text" class="form-control" id="id_penerbit" name="id_penerbit" required value="<?= $_POST['id_penerbit'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label for="nama_penerbit">Nama Penerbit</label>
				<input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" required value="<?= $_POST['nama_penerbit'] ?? "" ?>">
			</td>
			<td class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required value="<?= $_POST['email'] ?? "" ?>">
			</td>
			<td class="form-group">
				<label for="telp">Telpon</label>
				<input type="text" class="form-control" id="telp" name="telp" required value="<?= $_POST['telp'] ?? "" ?>">
			</td>
			<td class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" required value="<?= $_POST['alamat'] ?? "" ?>">
			</td></br>
			<button type="submit" name="Submit" class="btn btn-success">Add</button>
		</form>
	</div>


</body>

</html>