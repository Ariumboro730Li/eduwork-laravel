<html>
<head>
    <title>Edit buku</title>
</head>

<?php
    include_once("connect.php");
    $isbn = $_GET['isbn'];
    
     $buku = mysqli_query($mysql, "SELECT * FROM buku WHERE isbn='$isbn'");
     $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit");
     $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang");
     $katalog = mysqli_query($mysql, "SELECT * FROM katalog");

     foreach($buku as $buku_data) {
         $isbn = $buku_data['isbn'];
         $judul = $buku_data['judul'];
         $tahun = $buku_data['tahun'];
         $id_penerbit = $buku_data['id_penerbit'];
         $id_pengarang = $buku_data['id_pengarang'];
         $id_katalog = $buku_data['id_katalog'];
         $qty_stok = $buku_data['qty_stok'];
         $harga_pinjam = $buku_data['harga_pinjam'];

     }


?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="edit.php?isbn=<?php echo $isbn; ?>" method="post">
        <table width="25%" border="0">

        <tr>
             <td>ISBN</td>
             <td style="font-size: 11px;" name="<?php echo $isbn; ?>"><?php echo $isbn; ?> </td>
        </tr>
        <!-- <?php //echo $judul; ?> -->
        <tr>
             <td>Judul</td>
             <td><input type ="text" name="judul" value="<?php echo $judul; ?>"></td>
        </tr>
        <tr>
             <td>Tahun</td>
             <td><input type ="text" name="tahun" value="<?php echo $tahun; ?>"></td>
        </tr>
        <tr>
             <td>Penerbit</td>
             <td>
                 <select name="id_penerbit">
                     <?php
                        foreach($penerbit as $penerbit_data) {
                            echo "<option ". ((strcmp($penerbit_data['id_penerbit'], $id_penerbit) == 0) ? 'selected' : '')." value='".
                            $penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
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
                            echo "<option". (strcmp($pengarang_data['id_pengarang'], $id_pengarang) == 0 ? 'selected' : '')." value='".
                            $pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
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
                            echo "<option". (strcmp($katalog_data['id_katalog'], $id_katalog) == 0 ? ' selected' : '')." value='".
                            $katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
                        }
                    ?>
                </select>
            </td>
            
        </tr>
        <tr>
             <td>Stok</td>
             <td><input type ="text" name="qty_stok" value="<?php echo $qty_stok; ?>"></td>
        </tr>
        <tr>
             <td>Harga Pinjam</td>
             <td><input type ="text" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn-update" class="btn btn-primary" value="update"></td>
        </tr>

    </form>
        

    <?php
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['btn-update'])) {

            $isbn = $_GET['isbn'];
            
            $judul = $_POST['judul'];
            $tahun = $_POST['tahun'];
            $id_penerbit = $_POST['id_penerbit'];
            $id_pengarang = $_POST['id_pengarang'];
            $id_katalog = $_POST['id_katalog'];
            $qty_stok = $_POST['qty_stok'];
            $harga_pinjam = $_POST['harga_pinjam'];

            //echo "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn_get';";

            include_once("connect.php");
            
            $result = mysqli_query($mysql, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn'");


            if ($result) {
                // set success message to index page
                // set_flashdata('success', 'buku updated successfully.');
                header("Location:index.php");
            } else {
                $errors['db'] = "insert failed something wrong :(";
            }
        }

    ?>
    
</body>
</html>