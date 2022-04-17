<html>

<head>
	<title>Add Buku</title>
</head>

<?php
include_once("connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>

<body>
	<tr class="container">
		<a href="index.php">Go Home</a>
		<br /><br />

		<tr class="row">
			<tr class="col-lg-6 mx-auto">
				<form action="add_buku.php" method="post">
					<tr class="form-group">
						<label for="isbn">ISBN</label>
						<input type="text" class="form-control" id="isbn" name="isbn" required>
					</tr><br/>
					<tr class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" required>
					</tr><br/>
					<tr class="form-group">
						<label for="tahun">Tahun</label>
						<input type="text" class="form-control" id="tahun" name="tahun" required>
					</tr><br/>
					<tr class="form-group">
						<label for="penerbit">Penerbit</label>
						<select class="form-control" id="penerbit" name="id_penerbit" required>
							<?php
							while ($penerbit_data = mysqli_fetch_array($penerbit)) {
								echo "<option value='" . $penerbit_data['id_penerbit'] . "'>" . $penerbit_data['nama_penerbit'] . "</option>";
							}
							?>
						</select>
					</tr><br/>
					<tr class="form-group">
						<label for="pengarang">pengarang</label>
						<select class="form-control" id="pengarang" name="id_pengarang" required>
							<?php
							while ($pengarang_data = mysqli_fetch_array($pengarang)) {
								echo "<option value='" . $pengarang_data['id_pengarang'] . "'>" . $pengarang_data['nama_pengarang'] . "</option>";
							}
							?>
						</select>
					</tr><br/>
					<tr class="form-group">
						<label for="katalog">katalog</label>
						<select class="form-control" id="katalog" name="id_katalog" required>
							<?php
							while ($katalog_data = mysqli_fetch_array($katalog)) {
								echo "<option value='" . $katalog_data['id_katalog'] . "'>" . $katalog_data['nama'] . "</option>";
							}
							?>
						</select>
					</tr><br/>
					<tr class="form-group">
						<label for="qty_stok">Qty Stok</label>
						<input type="text" class="form-control" id="qty_stok" name="qty_stok" required>
					</tr><br/>
					<tr class="form-group">
						<label for="harga_pinjam">Harga Pinjam</label>
						<input type="text" class="form-control" id="harga_pinjam" name="harga_pinjam" required>
					</tr><br/>
					<button type="submit" name="Submit" >Add</button>
				</form>
			</tr>
		</tr>
	</tr>

	<?php

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

		include_once("connect.php");

		$result = mysqli_query($mysqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");

		if (!$result) {
			echo mysqli_error($mysqli);
		} else {
			header("Location:index.php");
		}
	}
	?>
</body>

</html>