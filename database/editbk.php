<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>

<?php
    include_once("connect.php");
    $isbn = $_GET['isbn'];

    $buku = mysqli_query($connect, "SELECT * FROM buku WHERE isbn='$isbn'");
    $penerbit = mysqli_query($connect, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($connect, "SELECT * FROM pengarang");
    $katalog = mysqli_query($connect, "SELECT * FROM katalog");

    while($data = mysqli_fetch_array($buku)){
        $judul = $data['judul'];
        $isbn = $data['isbn'];
        $tahun = $data['tahun'];
        $idPenerbit = $data['id_penerbit'];
        $idPengarang = $data['id_pengarang'];
        $idKatalog = $data['id_katalog'];
        $qty_stok = $data['qty_stok'];
        $harga = $data['harga_pinjam'];
    }


?>
<body>
    <a href="index.php">Go to Home</a>
    <br><br>

    <form action="editbk.php?isbn=<?php echo $isbn; ?>" method="post">

        <table width="25%" border="0">
            <tr>
                <td>ISBN</td>
                <td ><?php echo $isbn; ?></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $judul?>"></td>
            </tr>

            <tr>
                <td>Tahun</td>
                <td><input type="text" name="tahun" value="<?php echo $tahun?>"></td>
            </tr>

            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="id_penerbit">
                        <?php 
                            while($data = mysqli_fetch_array($penerbit)) {
                                echo "<option ". ($data['id_penerbit'] == $idPenerbit ? 'selected' : '')." value = '".$data['id_penerbit']. "'>" .$data['nama_penerbit']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td> 
                    <select name="id_pengarang" >
                        <?php 
                            while($data = mysqli_fetch_array($pengarang)) {
                                echo "<option ". ($data['id_pengarang'] == $idPengarang ? 'selected' : ''). " value = '".$data['id_pengarang']. "'>" .$data['nama_pengarang']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Katalog</td>
                <td>
                    <select name="id_katalog">
                        <?php 
                            while($data = mysqli_fetch_array($katalog)) {
                                echo "<option ". ($data['id_katalog'] == $idPengarang ? 'selected' : ''). " value = '".$data['id_katalog']. "'>" .$data['nama']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php echo $qty_stok ?>"></td>
            </tr>
            <tr>
                <td>Harga Pinjam</td>
                <td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
            </tr>

            <tr> 
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>

        </table>

    </form>

    <?php
        if(isset($_POST['update'])) {

            $isbn = $_GET['isbn'];
            $judul = $_POST['judul'];
            $tahun = $_POST['tahun'];
            $idPenerbit = $_POST['id_penerbit'];
            $idPengarang = $_POST['id_pengarang'];
            $qty_stok = $_POST['stok'];
            $harga = $_POST['harga'];

            include_once("connect.php");

            $result = mysqli_query($connect, "UPDATE buku SET `judul` = '$judul', `tahun`='$tahun', `id_penerbit` = '$idPenerbit', `id_pengarang` = '$idPengarang', 
            `id_katalog` = '$idKatalog', `qty_stok` = '$qty_stok', `harga_pinjam` = '$harga' WHERE `isbn` = '$isbn';");

            header("Location:index.php");
        }
    
    ?>
    
</body>
</html>