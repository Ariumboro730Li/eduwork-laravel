<html>
<head>
   <title>Add Buku</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("connect.php");
    //$isbn = $_GET['isbn'];
    
    $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysql, "SELECT * FROM katalog");
?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    
    <form action="add.php" method="post" name="form1">
        <table class="table" width="25%" border="0">
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
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
                            foreach($penerbit as $penerbit_data) {
                                echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
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
                            foreach($pengarang as $pengarang_data) {
                                echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
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
                            foreach($katalog as $katalog_data) {
                                echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
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
                <td><button type="submit" name="Submit" class="btn btn-primary">Add</button><td>
            </tr>
        </table>
    </form>

    <?php
    
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $isbn = $_POST['isbn'];
            $judul = $_POST['judul'];
            $tahun = $_POST['tahun'];
            $id_penerbit = $_POST['id_penerbit'];
            $id_pengarang = $_POST['id_pengarang'];
            $id_katalog = $_POST['id_katalog'];
            $qty_stok = $_POST['qty_stok'];
            $harga_pinjam = $_POST['harga_pinjam'];

            include_once("connect.php");

            //echo "INSERT INTO 'buku' ('isbn', 'judul', 'tahun', 'id_penerbit', 'id_pengarang', 'id_katalog', 'qty_stok', 'harga_pinjam') VALUES ('$isbn', '$judul','$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')";

            $result = mysqli_query($mysql, "INSERT INTO buku (isbn, judul, tahun, id_penerbit, id_pengarang, id_katalog, qty_stok, harga_pinjam) VALUES ('$isbn', '$judul','$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')");
        
            //$result = mysqli_query($mysql, "INSERT INTO buku judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");

            header("Location:index.php");
        }    
    ?>
</body>
</html>