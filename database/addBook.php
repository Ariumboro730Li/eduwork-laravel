<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>

<?php 
    include_once("connect.php");
    $penerbit = mysqli_query($connect, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($connect, "SELECT * FROM pengarang");
    $katalog = mysqli_query($connect, "SELECT * FROM katalog");

?>

<body>
    <a href="Index.php">Go to Home </a>
    <br>
    <br>

    <form action="addBook.php" method= "post" name="form1"> 
        <table width = "25%" border= "0" >
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn" ></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="id_penerbit">
                        <?php
                            while($dataPenerbit = mysqli_fetch_array($penerbit)) {
                                echo "<option value='".$dataPenerbit['id_penerbit']."'>".$dataPenerbit['nama_penerbit']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td>
                <select name="id_pengarang">
                        <?php
                            while($dataPengarang = mysqli_fetch_array($pengarang)) {
                                echo "<option value='".$dataPengarang['id_pengarang']."'>".$dataPengarang['nama_pengarang']."</option>";
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
                                while($dataKatalog = mysqli_fetch_array($katalog)) {
                                    echo "<option value='".$dataKatalog['id_katalog']."'>".$dataKatalog['nama']."</option>";
                                }
                            ?>

                    </select>       
                </td>
            </tr>

           <tr>
                <td>Qty Stok</td>
                <td><input type="text" name="qty_stok"></td>
           </tr>

           <tr>
                <td>Harga Pinjam</td>
                <td><input type="text" name="harga_pinjam"></td>
           </tr>
           <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
           </tr>

        </table>
    </form>

    <?php 
    
      if(isset($_POST['Submit'])){
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];

        include_once("connect.php");

        $result = mysqli_query($connect, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) 
        VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
        
        header("Location:index.php");
      }                          
    ?>
    
</body>
</html>