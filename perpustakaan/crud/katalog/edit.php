<html>
<head>
    <title>Edit buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("../connect.php");
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
        <table class="table" width="25%" border="0">

        <tr>
             <td>id_katalog</td>
             <td style="font-size: 11px;" name="<?php echo $id_katalog; ?>"><?php echo $id_katalog; ?> </td>
        </tr>
        <tr>
             <td>Nama</td>
             <td><input type ="text" name="Nama" required value="<?php echo $Nama; ?>"></td>
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
                //$errors['db'] = "insert failed something wrong :(";
                echo "<script>alert('insert failed');</script>";
            }
        }

    ?>
    
</body>
</html>