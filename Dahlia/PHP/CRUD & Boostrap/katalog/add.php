<html>
<head>
	<title>Add Buku</title>
</head>

<body>
	<a href="katalog.php">Go to Katalog</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Katalog</td>
				<td><input type="text" name="id_katalog" required></td>
			</tr>
			<tr> 
				<td>Katalog</td>
				<td><input type="text" name="katalog" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" required></td>
			</tr>
		</table>
	</form>

	<?php

		// Check If form submitted, insert form data into users table.
		include_once("katalog_connect.php");

		if(isset($_POST['Submit'])) {

			$id_katalog = $_POST['id_katalog'];
			$nama = $_POST['katalog'];


            $result = mysqli_query($katalog_connect, "INSERT INTO detail_katalog(id_katalog, katalog) 
            VALUES ('$id_katalog','$nama')");
        
				
				header("location :katalog.php");
		}
	
	?>
</body>
</html>