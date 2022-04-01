<html>

<head>
	<title>Edit Katalog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<?php
include_once("connect.php");
$id_katalog = $_GET['id_katalog'];
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog = '$id_katalog'");

while ($data_katalog = mysqli_fetch_array($katalog)) {
	$nama = $data_katalog['nama'];
}
?>

<body>
	<div class="container">
		<a class="btn btn-light" href="homepage.php">Go Back</a>
		<br /><br />

		<form style="width: 50%;" action="" method="post">
			<div class="form-group">
				<label for="id_katalog">ID Katalog</label>
				<input type="text" class="form-control" id="id_katalog" name="id_katalog" value="<?php echo $id_katalog; ?>">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
			</div>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</form>
	</div>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['update'])) {

		$id_katalog = $_POST['id_katalog'];
		$nama = $_POST['nama'];

		include_once("connect.php");

		$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");

		if ($result) {
			header("Location:homepage.php");
		} else {
			echo mysqli_error($mysqli);
		}
	}
	?>
</body>

</html>