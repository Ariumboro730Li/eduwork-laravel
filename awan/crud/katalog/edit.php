<html>

<head>
	<title>Edit Katalog</title>
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
	<a href="index.php">Go Back</a>
	<br /><br />

	<form action="" method="post">
		<table width="25%" border="0">
			<tr>
				<td>ID Katalog</td>
				<td style="font-size: 11pt;"><?php echo $id_katalog; ?> </td>
				<input type="hidden" name="id_katalog" value="<?php echo $id_katalog; ?>">
			</tr>
			<tr>
				<td>Nama Katalog</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['update'])) {

		$id_katalog = $_POST['id_katalog'];
		$nama = $_POST['nama'];

		include_once("connect.php");

		$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");

		if ($result) {
			header("Location:index.php");
		} else {
			echo mysqli_error($mysqli);
		}
	}
	?>
</body>

</html>