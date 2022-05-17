<?php
session_start();

include_once "function.php";

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
		$errors['email'] = "Email must be Include @gmail.com";
	}

	// validate if post telp is not numeric
	if (!is_numeric($_POST['telp'])) {
		// set error to array $errors with key
		$errors['telp'] = "Telephone Must be Number";
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
			header("Location:index_penerbit.php");
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

<center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a>
    <a class='btn btn-dark' href="index_pinjam.php">Pinjam</a>  
    <hr>
</center>


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
 
	<form action="edit_penerbit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post" name="form1" >
		<table width="90%" border="0">
			<tr class="form-group"> 
				<td><lablel for="id_penerbit">ID Penerbit</label></td>
				<td><input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?php echo $id_penerbit; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="id_penerbit">Nama Penerbit</label></td>
				<td><input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>"required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="email">Email</label></td>
				<td><input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="telp">Telepon</label></td>
				<td><input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required></td>
			</tr>
			<tr class="form-group"> 
				<td><lablel for="alamat">Alamat</label></td>
				<td><input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" class="btn btn-success" value="Update"></td>
			</tr>
		</table>
	</form>
	
	</tr>
</body>

</html>