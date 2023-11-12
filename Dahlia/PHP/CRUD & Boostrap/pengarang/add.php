<html>
<head>
	<title>Add Pengarang</title>
</head>

<body>
	<a href="pengarang.php">Go to Pengarang</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pengarang</td>
				<td><input type="text" name="id_pengarang" required></td>
			</tr>
			<tr> 
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" required></td>
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
		include_once("pengarang_connect.php");

		if(isset($_POST['Submit'])) {
            
            $id_pengarang = $_POST['id_pengarang'];
            $nama = $_POST['pengarang'];
			$email = $_POST['email'];
			$tlp = $_POST['tlp'];
			$alamat = $_POST['alamat'];


            $result = mysqli_query($pengarang_connect, "INSERT INTO pengarang(id_pengarang, pengarang, email, tlp, alamat) 
            VALUES ('$id_pengarang','$nama', '$email', '$tlp', '$alamat')");
        
				
				header("location :pengarang.php");
		}
	
	?>
</body>
</html>