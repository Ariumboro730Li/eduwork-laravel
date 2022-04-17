<html>
<head>
	<title>Edit Katalog</title>
</head>

<center>
    <a href="index.php">Buku</a> |
    <a href="index_penerbit.php">Penerbit</a> |
    <a href="index_pengarang.php">Pengarang</a> |
    <a href="index_katalog.php">Katalog</a>
    <hr>
</center>

<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];

	$katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog = '$id_katalog'");
	
    while($katalog = mysqli_fetch_array($katalog))
    {
    	$id_katalog = $katalog_data['id_katalog'];
    	$nama_katalog = $katalog_data['nama_katalog'];

    }
?>
 
<body>
<a class="btn btn-primary" href="index_katalog.php">Go Home</a>
	<br/><br/>
 
	<form action="edit_katalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td><lablel for="id_katalog">ID Katalog</label></td>
				<td><input type="text" class="form-control" id="id_katalog" name="id_katalog" value="<?php echo $id_katalog; ?>" required></td>
			</tr>
			<tr> 
				<td><lablel for="nama_katalog">Nama Katalog</label></td>
				<td><input type="text" class="form-control" id="nama_katalog" name="nama_katalog" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" class="btn btn-primary" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_katalog = $_GET['id_katalog'];
			$nama_katalog = $_POST['nama_katalog'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET id_katalog = '$id_katalog', nama_katalog = '$nama_katalog';");
			
			header("Location:index_katalog.php");
		}
	?>
</body>
</html>