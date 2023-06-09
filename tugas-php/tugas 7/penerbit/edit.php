<html>
<head>
	<title>Edit katalog</title>
</head>

<?php
	include_once("../connect.php");
	$id = $_GET['id'];

	$katalog = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit='$id'");

    while($hasil_data = mysqli_fetch_array($katalog))
    {
    	$id = $hasil_data['id_penerbit'];
    	$nama = $hasil_data['nama_penerbit'];
    	$email = $hasil_data['email'];
    	$tel = $hasil_data['telp'];
    	$alamat = $hasil_data['alamat'];
    }
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id=<?php echo $id; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>ID Penerbit</td>
				<td style="font-size: 11pt;"><?php echo $id; ?> </td>
			</tr>
			<tr> 
				<td>Nama Penerbit</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Telp</td>
				<td><input type="text" name="telp" value="<?php echo $tel; ?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id = $_GET['id'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$tel = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama', email ='$email', telp='$tel', alamat='$alamat' WHERE id_penerbit = '$id';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>