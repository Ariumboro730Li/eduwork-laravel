<html>
<head>
	<title>Edit katalog</title>
</head>

<?php
	include_once("../connect.php");
	$id = $_GET['id'];

	$katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog='$id'");

    while($hasil_data = mysqli_fetch_array($katalog))
    {
    	$id = $hasil_data['id_katalog'];
    	$nama = $hasil_data['nama'];
    }
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id=<?php echo $id; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>ID Katalog</td>
				<td style="font-size: 11pt;"><?php echo $id; ?> </td>
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
		if(isset($_POST['update'])) {

			$id = $_GET['id'];
			$nama = $_POST['nama'];
			
			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>