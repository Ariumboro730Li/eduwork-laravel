<html>
<head>
	<title>Add Buku</title>
</head>

<body>
	<a href="penerbit.php">Go to Penerbit</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Penerbit</td>
				<td><input type="text" name="id_penerbit" required></td>
			</tr>
			<tr> 
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" required></td>
			</tr>
            <tr> 
				<td>Email</td>
				<td><input type="text" name="email" required></td>
			</tr>
            <tr> 
				<td>Telephon</td>
				<td><input type="text" name="tlp" required></td>
			</tr>
            <tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" required></td>
			</tr>
		</table>
	</form>

	<?php

		// Check If form submitted, insert form data into users table.
		include_once("penerbit_connect.php");

		if(isset($_POST['Submit'])) {
            
            $id_penerbit = $_POST['id_penerbit'];
            $nama = $_POST['penerbit'];
			$email = $_POST['email'];
			$tlp = $_POST['tlp'];
			$alamat = $_POST['alamat'];


            $result = mysqli_query($penerbit_connect, "INSERT INTO penerbit(id_penerbit, penerbit, email, tlp, alamat) 
            VALUES ('$id_penerbit','$nama', '$email', '$tlp', '$alamat')");
        
				
				header("location :penerbit.php");
		}
	
	?>
</body>
</html>