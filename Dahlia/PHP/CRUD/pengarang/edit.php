<html>
<head>
	<title>Edit Pengarang</title>
</head>

<?php
	include_once("pengarang_connect.php");

	$id_pengarang = $_GET['id_pengarang'];

	$pengarang = mysqli_query($pengarang_connect, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");
    
    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
    	$nama = $pengarang_data['pengarang'];
    	$email = $pengarang_data['email'];
    	$tlp = $pengarang_data['tlp'];
    	$alamat = $pengarang_data['alamat'];
    }
?>
 
<body>
	<a href="pengarang.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>ID pengarang</td>
				<td style="font-size: 11pt;"><?php echo $id_pengarang; ?> </td>
			</tr>
			<tr> 
				<td>pengarang</td>
				<td><input type="text" name="pengarang" value="<?php echo $nama; ?>"></td>
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
		include_once("pengarang_connect.php");

		if(isset($_POST['update'])) {

			$nama = $_POST['pengarang'];
			$email = $_POST['email'];
			$tlp = $_POST['tlp'];
			$alamat = $_POST['alamat'];
			

			$result = mysqli_query($pengarang_connect, "UPDATE pengarang SET pengarang = '$nama', email = '$email', tlp = '$tlp', 
			alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("location:pengarang.php");
		}
	?>
