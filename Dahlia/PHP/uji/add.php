<html>
<head>
	<title>Add Buku</title>
</head>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM detail_katalog");
?>

<body>
	<a href="data.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ISBN</td>
				<td><input type="varchar" name="isbn"></td>
			</tr>
			<tr> 
				<td>Judul</td>
				<td><input type="varchar" name="judul"></td>
			</tr>
			<tr> 
				<td>Tahun</td>
				<td><input type="int" name="tahun"></td>
			</tr>
			<tr> 
				<td>Penerbit</td>
				<td>
					<select name="id_penerbit">
						<?php 
						    while($penerbit_data = mysqli_fetch_array($penerbit)) {         
						    	echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['penerbit']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Pengarang</td>
				<td>
					<select name="id_pengarang">
						<?php 
						    while($pengarang_data = mysqli_fetch_array($pengarang)) {         
						    	echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['pengarang']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Katalog</td>
				<td>
					<select name="id_katalog">
						<?php 
						    while($katalog_data = mysqli_fetch_array($katalog)) {         
						    	echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['katalog']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Qty Stok</td>
				<td><input type="int" name="Jmh_Stok"></td>
			</tr>
			<tr> 
				<td>Harga Pinjam</td>
				<td><input type="int" name="harga_pinjam"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$isbn = $_POST['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['Jmh_Stok'];
			$harga_pinjam = $_POST['harga_pinjam'];

			include_once("connect.php");

			$data = "INSERT INTO 'perpus' (isbn, judul, tahun,id_penerbit,id_pengarang,id_katalog, Jmh_Stok, harga_pinjam) VALUES ($isbn, $judul, $tahun, $id_penerbit, $id_pengarang, $id_katalog, $qty_stok, $harga_pinjam)";
			$result = mysqli_query($mysqli,$data);
			if($result)
			{
				echo "data sukses";
			}
			else
			{
				die (mysqli_error($mysqli));
			}
		}
	?>
</body>
</html>