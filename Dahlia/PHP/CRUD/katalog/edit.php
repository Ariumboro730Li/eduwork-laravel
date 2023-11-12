<html>
<head>
	<title>Edit katalog</title>
</head>

<?php
	include_once("katalog_connect.php");

	$id_katalog = $_GET['id_katalog'];

	$katalog = mysqli_query($katalog_connect, "SELECT * FROM detail_katalog WHERE id_katalog='$id_katalog'");
    
    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$nama = $katalog_data['katalog'];
    }
?>
 
<body>
	<a href="katalog.php">Go to Katalog</a>
	<br/><br/>
 
	<form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>ID Katalog</td>
				<td style="font-size: 11pt;"><?php echo $id_katalog; ?> </td>
			</tr>
			<tr> 
				<td>Katalog</td>
				<td><input type="text" name="katalog" value="<?php echo $nama; ?>"></td>
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
		include_once("katalog_connect.php");

		if(isset($_POST['update'])) {

			$nama = $_POST['katalog'];
			

			$result = mysqli_query($katalog_connect, "UPDATE katalog SET katalog = '$nama' WHERE id_katalog = '$id_katalog';");
			
			header("location:katalog.php");
		}
	?>
