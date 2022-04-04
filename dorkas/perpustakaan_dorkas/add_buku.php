<?php
session_start();

include_once "functions.php";

include_once("connect.php");
$buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku
LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
ORDER BY judul ASC");

$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
$errors = array();


// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {

	$isbn = $_POST['isbn'];
	$judul = $_POST['judul'];
	$tahun = $_POST['tahun'];
	$id_penerbit = $_POST['id_penerbit'];
	$id_pengarang = $_POST['id_pengarang'];
	$id_katalog = $_POST['id_katalog'];
	$qty_stok = $_POST['qty_stok'];
	$harga_pinjam = $_POST['harga_pinjam'];

	$result = mysqli_query($mysqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");

	// if data inserted successfully return to index page if set error
	if ($result) {
		// set success message to index page
		set_flashdata('success', 'buku added successfully.');
		header("Location:home.php");
	} else {
		$errors['db'] = "insert failed something wrong :(";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Buku</title>
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
		<a class="btn btn-primary" href="home.php">Go to Home</a>
		<br /><br />
		<form method="post">
			<div class="form-group">
				<label>ISBN</label>
				<input type="text" class="form-control" name="isbn" required value="<?= $_POST['isbn'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" required value="<?= $_POST['judul'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label>tahun</label>
				<input type="text" class="form-control" name="tahun" required value="<?= $_POST['tahun'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label for="id_penerbit">penerbit</label>
				<select class="form-control" id="id_penerbit" name="id_penerbit" required>
					<option value=""> pilih penerbit</option>

					<?php
					while ($penerbit_data = mysqli_fetch_array($penerbit)) :
					?>
						<option value="<?= $penerbit_data['id_penerbit'] ?>" <?= (($_POST['id_penerbit'] ?? "") == $penerbit_data['id_penerbit']  ? "selected" : "") ?>><?= $penerbit_data['id_penerbit'] ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="id_pengarang">pengarang</label>
				<select class="form-control" id="id_pengarang" name="id_pengarang" required>
					<option value=""> pilih pengarang</option>

					<?php
					while ($pengarang_data = mysqli_fetch_array($pengarang)) :
					?>
						<option value="<?= $pengarang_data['id_pengarang'] ?>" <?= (($_POST['id_pengarang'] ?? "") == $pengarang_data['id_pengarang']  ? "selected" : "") ?>><?= $pengarang_data['id_pengarang'] ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="id_katalog">katalog</label>
				<select class="form-control" id="id_katalog" name="id_katalog" required>
					<option value=""> pilih katalog</option>

					<?php
					while ($katalog_data = mysqli_fetch_array($katalog)) :
					?>
						<option value="<?= $katalog_data['id_katalog'] ?>" <?= (($_POST['id_katalog'] ?? "") == $katalog_data['id_katalog']  ? "selected" : "") ?>><?= $katalog_data['id_katalog'] ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Qty Stok</label>
				<input type="text" class="form-control" name="qty_stok" required value="<?= $_POST['qty_stok'] ?? "" ?>">
			</div>
			<div class="form-group">
				<label>Harga Pinjam</label>
				<input type="text" class="form-control" name="harga_pinjam" required value="<?= $_POST['harga_pinjam'] ?? "" ?>">
			</div>
			<div class="form-group">
				<button type="submit" name="Submit" class="btn btn-primary">ADD</button>
			</div>

		</form>

	</div>
</body>

</html>