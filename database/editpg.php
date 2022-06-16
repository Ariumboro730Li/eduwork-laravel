<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengarang</title>
</head>

<?php
    include_once("connect.php");
    $idpengarang = $_GET['idpengarang'];

    $pengarang = mysqli_query($connect, "SELECT pengarang.*, count(buku.id_pengarang) as total_karya, sum(buku.qty_stok) as total_stok 
    FROM pengarang LEFT JOIN buku ON buku.id_pengarang = pengarang.id_pengarang WHERE pengarang.id_pengarang = '$idpengarang'
    GROUP BY pengarang.id_pengarang;");
    

    while($data = mysqli_fetch_array($pengarang)){
        $idpn = $data['id_pengarang'];
        $nama = $data['nama_pengarang'];
        $email = $data['email'];
        $telp = $data['telp'];
        $alamat = $data['alamat'];
        $karya = $data['total_karya'];
        $stok = $data['total_stok'];
    }

?>
<body>
    <a href="pengarang.php"> Go Back</a>
    <br><br>

    <form action="editpg.php?idpengarang=<?php echo $idpengarang; ?>" method = "post">
        <table width = "25%" border = "0">
            <tr>
                <td>ID Pengarang</td>
                <td><input type="text" name = "idpn" value="<?php echo $idpn; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $email?>"></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="tel" name="telp" value="<?php echo $telp; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr>
                <td>Total Karya</td>
                <td><?php echo $karya; ?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?php echo $stok; ?></td>
            </tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>

        </table>
    </form>

    <?php 
            if(isset($_POST['update'])) {
                $idpengarang = $_GET['idpengarang'];
                $idpn = $_POST['idpn'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $telp = $_POST['telp'];
                $alamat = $_POST['alamat'];

                include_once("connect.php");
                $result = mysqli_query($connect, "UPDATE pengarang SET id_pengarang = '$idpn', nama_pengarang = '$nama', 
                email = '$email', telp = $telp, alamat = '$alamat' WHERE id_pengarang = '$idpengarang';");

                header("Location:pengarang.php");

            }
    ?>
</body>
</html>