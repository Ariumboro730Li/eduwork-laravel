<html>
<head>
    <title>Edit buku</title>
</head>

<?php
    include_once("connect.php");
    $id_katalog = $_GET['id_katalog'];
    
     $buku = mysqli_query($mysql, "SELECT * FROM buku");
     $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit");
     $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang");
     $katalog = mysqli_query($mysql, "SELECT * FROM katalog WHERE id_katalog='$id_katalog'");

     foreach($katalog as $katalog_data) {
         $id_katalog = $katalog_data['id_katalog'];
         $Nama = $katalog_data['nama'];

     }


?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
        <table width="25%" border="0">

        <tr>
             <td>id_katalog</td>
             <td style="font-size: 11px;" name="<?php echo $id_katalog; ?>"><?php echo $id_katalog; ?> </td>
        </tr>
        <tr>
             <td>Nama</td>
             <td><input type ="text" name="Nama" value="<?php echo $Nama; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn-update" class="btn btn-primary" value="update"></td>
        </tr>

    </form>
        

    <?php
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['btn-update'])) {

            $id_katalog = $_GET['id_katalog'];
            
            $Nama = $_POST['Nama'];

            //echo "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn_get';";

            include_once("connect.php");
            
            $result = mysqli_query($mysql, "UPDATE katalog SET Nama = '$Nama' WHERE id_katalog = '$id_katalog'");


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