<?php
session_start();

include_once "function.php";


?>
<html>
<head>
	<title>Add Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a> |
    <a class='btn btn-dark' href="index_pinjam.php">Pinjam</a>  
    <hr>
</center>

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
		$id_pengarang = $_POST['id_pengarang'];
		$nama_pengarang = $_POST['nama_pengarang'];
		$telp = $_POST['telp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$result = mysqli_query($mysqli, "INSERT INTO `Pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");
		// if data inserted successfully return to index page if set error
		if ($result) {
			// set success message to index page
			set_flashdata('success', 'pengarang berhasil ditambahkan.');
			header("Location:index_pengarang.php");
		} else {
			$errors['db'] = "insert failed something wrong :(";
		}
	}
}

?>
 
<body>
	<tr class="container">
	<a class="btn btn-primary" href="index.php">Home</a>
	<br/><br/>

			<!-- show errors with alert component boostrap 4 -->
		<?php
		if (count($errors) > 0) : ?>
			<?php foreach ($errors as $error) : ?>
				<div class="alert alert-danger">
					<?= $error ?>
				</div>
			<?php endforeach ?>
		<?php endif ?>
 
	<form action="add_pengarang.php" method="post" name="form1">
		<table width="90%" border="0">
			<tr> 
				<td><label for="id_pengarang">ID Pengarang</label></td>
				<td><input type="text" class="form-control" id="id_pengarang" name="id_pengarang" required value="<?= $_POST['id_pengarang'] ?? "" ?>"></td>
			</tr>
			<tr> 
				<td><label for="nama_pengarang">Nama Pengarang</label></td>
				<td><input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" required value="<?= $_POST['nama_pengarang'] ?? "" ?>"></td>
			</tr>
			<tr> 
				<td><label for="email">Email</label></td>
				<td><input type="text" class="form-control" id="email" name="email" required value="<?= $_POST['email'] ?? "" ?>"></td>
			</tr>
			<tr> 
				<td><label for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp" required value="<?= $_POST['telp'] ?? "" ?>"></td>
			</tr>
			<tr> 
				<td><label for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat" required value="<?= $_POST['alamat'] ?? "" ?>"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-success" value="Add"></td>
			</tr>
		</table>
	</form>
	


</body>
</html>