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
				<td><input type="text" name="isbn"></td>
			</tr>
			<tr> 
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr> 
				<td>Tahun</td>
				<td><input type="text" name="tahun"></td>
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
				<td><input type="text" name="Jmh_Stok"></td>
			</tr>
			<tr> 
				<td>Harga Pinjam</td>
				<td><input type="text" name="harga_pinjam"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

		// Check If form submitted, insert form data into users table.
		include_once("connect.php");

		if(isset($_POST['Submit'])) {

			$isbn = $_POST['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$penerbit_data = $_POST['id_penerbit'];
			$pengarang_data= $_POST['id_pengarang'];
			$katalog_data= $_POST['id_katalog'];
			$qty_stok = $_POST['Jmh_Stok'];
			$harga_pinjam = $_POST['harga_pinjam'];


			$bahan = mysqli_query($mysqli, "INSERT INTO buku (isbn, judul, tahun, id_penerbit, id_pengarang, id_katalog, Jmh_Stok, harga_pinjam) 
   			 VALUES ('$isbn', '$judul', '$tahun','$penerbit_data', '$pengarang_data', '$katalog_data', '$qty_stok', '$harga_pinjam')");
    
    		echo $bahan;
		}
	?>
</body>
</html>