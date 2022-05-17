<?php
session_start();

include_once "function.php";

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
		$errors['email'] = "Email must be Include @gmail.com";
	}

	// validate if post telp is not numeric
	if (!is_numeric($_POST['telp'])) {
		// set error to array $errors with key
		$errors['telp'] = "Telephone Must be Number";
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
 
 <center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a>
    <a class='btn btn-dark' href="index_pinjam.php">Pinjam</a>
    <hr>
</center>


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
<tr class="container p-5">
		<tr>
			<?php
			if (count($errors) > 0) : ?>
				<?php foreach ($errors as $error) : ?>
					<div class="alert alert-danger">
						<?= $error ?>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</tr>
		<a class="btn btn-primary" href="index.php">Home</a>
		<br /><br />
 
	<form action="edit_pengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
		<table width="90%" border="0">
			<tr> 
				<td><lablel for="id_pengarang">ID Pengarang</label></td>
				<td><input type="text" class="form-control" id="id_pengarang" name="id_pengarang" value="<?php echo $id_pengarang; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="nama_pengarang">Nama Pengarang</label></td>
				<td><input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="email">Email</label></td>
				<td><input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" class="btn btn-success" value="Update"></td>
			</tr>
		</table>
	</form>

</body>
</html>