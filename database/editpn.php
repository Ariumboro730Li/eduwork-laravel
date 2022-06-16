<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penerbit</title>
</head>

<?php
    include_once("connect.php");
    $idpenerbit = $_GET['idpenerbit'];

    $penerbit = mysqli_query($connect, "SELECT penerbit.*, count(buku.id_penerbit) as total_judul, sum(buku.qty_stok) as total_stok 
    FROM penerbit JOIN buku ON buku.id_penerbit = penerbit.id_penerbit WHERE penerbit.id_penerbit='$idpenerbit' GROUP BY penerbit.id_penerbit");

    while($data = mysqli_fetch_array($penerbit)) {
        $nama = $data['nama_penerbit'];
        $idpenerbit = $data['id_penerbit'];
        $email = $data['email'];
        $telp = $data['telp'];
        $alamat = $data['alamat'];
        $terbitan = $data['total_judul'];
        $stok = $data['total_stok'];
    }

?>

<body>
    <a href="penerbit.php">Go Back</a>
    <br><br>

    <form action="editpn.php?idpenerbit=<?php echo $idpenerbit; ?>" method="post">
        <table width="25%" border="0">
            <tr>
                <td>ID Penerbit</td>
                <td><input type="text" name="idpn" value="<?php echo $idpenerbit?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namapn" value="<?php echo $nama?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $email?>"></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="tel" name="telp" value="<?php echo $telp ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
            </tr>
            <tr>
                <td>Total Terbitan</td>
                <td><?php echo $terbitan; ?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?php echo $stok?></td>
            </tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>

        </table>
    </form>

    <?php 
        if(isset($_POST['update'])) {

            $idpenerbit = $_GET['idpenerbit'];
            $idpn = $_POST['idpn'];
            $nama = $_POST['namapn'];
            $email = $_POST['email'];
            $kontak = $_POST['telp'];
            $alamat = $_POST['alamat'];


            include_once("connect.php");

            $result = mysqli_query($connect, "UPDATE `penerbit` SET id_penerbit = '$idpn', nama_penerbit='$nama', 
            email = '$email', telp = '$kontak', alamat ='$alamat' WHERE id_penerbit = '$idpenerbit';");

            header("Location:penerbit.php");
        }
    ?>
</body>
</html>