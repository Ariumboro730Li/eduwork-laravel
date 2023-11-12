<html>
<head>
	<title>Edit Penerbit</title>
</head>

<?php
	include_once("penerbit_connect.php");

	$id_penerbit = $_GET['id_penerbit'];

	$penerbit = mysqli_query($penerbit_connect, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");
    
    while($penerbit_data = mysqli_fetch_array($penerbit))
    {
    	$nama = $penerbit_data['penerbit'];
    	$email = $penerbit_data['email'];
    	$tlp = $penerbit_data['tlp'];
    	$alamat = $penerbit_data['alamat'];
    }
?>
 
<body>
	<a href="penerbit.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>ID Penerbit</td>
				<td style="font-size: 11pt;"><?php echo $id_penerbit; ?> </td>
			</tr>
			<tr> 
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="varchar" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Telephon</td>
				<td><input type="text" name="tlp" value="<?php echo $tlp; ?>"></td>
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
	</body>
</html>
	<?php
	 
		// Check If form submitted, insert form data into users table.
		include_once("penerbit_connect.php");

		if(isset($_POST['update'])) {

			$nama = $_POST['penerbit'];
			$email = $_POST['email'];
			$tlp = $_POST['tlp'];
			$alamat = $_POST['alamat'];
			

			$result = mysqli_query($penerbit_connect, "UPDATE penerbit SET penerbit = '$nama', email = '$email', tlp = '$tlp', 
			alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
			
			header("location:penerbit.php");
		}
	?>
