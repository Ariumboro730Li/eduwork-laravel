<html>
<head>
	<title>Edit Buku</title>
</head>

<?php
	include_once("anggota_connect.php");
	$id_anggota = $_GET['id_anggota'];

	$anggota = mysqli_query($anggota_connect, "SELECT * FROM anggota WHERE id_anggota='$id_anggota'");;

    while($anggota_data = mysqli_fetch_array($anggota))
    {
    	$id_anggota = $anggota_data['id_anggota'];
    	$nama = $anggota_data['nama'];
    	$username = $anggota_data['username'];
    	$password = $anggota_data['password'];
    	$label = $anggota_data['sex'];
    	$tlp = $anggota_data['tlp'];
    	$alamat = $anggota_data['alamat'];
        $email = $anggota_data['email'];
        $tanggal = $anggota_data['tgl_entry'];
        $jabatan = $anggota_data['role'];
    }
?>
 
<body>
	<a href="data.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id_anggota=<?php echo $id_anggota; ?>" method="post">
		<table width="30%" border="0">
			<tr> 
				<td>ID Anggota</td>
				<td style="font-size: 11pt;"><?php echo $id_anggota; ?> </td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			
			<tr> 
				<td>username</td>
				<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
			</tr>
            <tr> 
				<td>Jenis Kelamin</td>
				<td><input type="text" name="sex" value="<?php echo $label; ?>"></td>
			</tr>
            <tr> 
				<td>Telephon</td>
				<td><input type="text" name="tlp" value="<?php echo $tlp; ?>"></td>
			</tr>
            <tr> 
				<td>Password</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
			</tr>
            <tr> 
				<td>Password</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
            <tr> 
				<td>Password</td>
				<td><input type="text" name="tgl_entry" value="<?php echo $tanggal; ?>"></td>
			</tr>
            <tr> 
				<td>Password</td>
				<td><input type="text" name="role" value="<?php echo $jabatan; ?>"></td>
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
		include_once("anggota_connect.php");

		if(isset($_POST['update'])) {

            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $label = $_POST['sex'];
            $tlp = $_POST['tlp'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $tanggal = $_POST['tgl_entry'];
            $jabatan = $_POST['role'];
			

			$result = mysqli_query($anggota_connect, "UPDATE anggota SET nama = '$nama', username = '$username', password = '$password', 
            sex = '$label', tlp = '$tlp', alamat = '$alamat', email = '$email', tgl_entry = '$tanggal', role = '$jabatan' WHERE id_anggota = '$id_anggota';");
			
			header("location:anggota.php");
		}
	?>