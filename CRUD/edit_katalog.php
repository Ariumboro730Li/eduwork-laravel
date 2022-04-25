<html>
<head>
	<title>Edit Katalog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];

    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog = '$id_katalog'");

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$id_katalog = $katalog_data['id_katalog'];
    	$nama = $katalog_data['nama'];
    }
?>
 
<body>
	<a href="katalog.php">Go to Katalog</a>
	<br/><br/>
 
	<form action="edit_katalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td><label class="form-label">ID Katalog</label></td>
				<td><label class="form-label"><?php echo $id_katalog; ?></label></td>
			</tr>
			<tr> 
				<td><label class="form-label">Nama Katalog</label></td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_katalog = $_GET['id_katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>