<html>
<head>
   <title>Add Buku</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("../connect.php");
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
                <td><input type="text" name="isbn" required></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" name="tahun" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="id_penerbit" required>
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
                    <select name="id_pengarang" required>
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
                    <select name="id_katalog" required>
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
                <td><input type="text" name="qty_stok" required></td>
            </tr>
            <tr>
                <td>Harga Pinjam</td>
                <td><input type="text" name="harga_pinjam" required></td>
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

            include_once("../connect.php");

            function throw_ex($er){  
                throw new Exception($er);
            }

            //echo "INSERT INTO 'buku' ('isbn', 'judul', 'tahun', 'id_penerbit', 'id_pengarang', 'id_katalog', 'qty_stok', 'harga_pinjam') VALUES ('$isbn', '$judul','$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')";
            try {

            $result = mysqli_query($mysql, "INSERT INTO buku (isbn, judul, tahun, id_penerbit, id_pengarang, id_katalog, qty_stok, harga_pinjam) VALUES ('$isbn', '$judul','$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')");
            
            header("Location:index.php");
            }  catch(exception $e) {
                //echo "<script>"; 
                echo "<script>alert('ISBN Sudah ada');</script>";
            }
        }  
    ?>
</body>
</html>