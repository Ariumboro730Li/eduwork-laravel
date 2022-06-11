<html>
<head>
    <title>Edit Penerbit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("../connect.php");
    $id_penerbit = $_GET['id_penerbit'];
    
     $buku = mysqli_query($mysql, "SELECT * FROM buku");
     $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");
     $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang");
     $katalog = mysqli_query($mysql, "SELECT * FROM katalog");

     foreach($penerbit as $penerbit_data) {
         $id_penerbit = $penerbit_data['id_penerbit'];
         $nama_penerbit = $penerbit_data['nama_penerbit'];
         $email = $penerbit_data['email'];
         $telp = $penerbit_data['telp'];
         $alamat = $penerbit_data['alamat'];
     }


?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="edit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
        <table class="table" width="25%" border="0">

        <tr>
             <td>id Penerbit</td>
             <td style="font-size: 11px;" name="<?php echo $id_penerbit; ?>"><?php echo $id_penerbit; ?> </td>
        </tr>
        <tr>
             <td>Nama Penerbit</td>
             <td><input type ="text" name="nama_penerbit" required value="<?php echo $nama_penerbit; ?>"></td>
        </tr>
        <tr>
             <td>Email</td>
             <td><input type ="text" name="email" required value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
             <td>Telp</td>
             <td><input type ="text" name="telp" required value="<?php echo $telp; ?>"></td>
        </tr>
        <tr>
             <td>Alamat</td>
             <td><input type ="text" name="alamat" required value="<?php echo $alamat; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn-update" class="btn btn-primary" value="update"></td>
        </tr>

    </form>
        

    <?php
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['btn-update'])) {

            $id_penerbit = $_GET['id_penerbit'];
            
            $nama_penerbit = $_POST['nama_penerbit'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];


            include_once("../connect.php");
            
            $result = mysqli_query($mysql, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit'");


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