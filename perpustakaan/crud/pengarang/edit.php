<html>
<head>
    <title>Edit Pengarang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
    include_once("../connect.php");;
    $id_pengarang = $_GET['id_pengarang'];
    
     $buku = mysqli_query($mysql, "SELECT * FROM buku");
     $penerbit = mysqli_query($mysql, "SELECT * FROM penerbit");
     $pengarang = mysqli_query($mysql, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");
     $katalog = mysqli_query($mysql, "SELECT * FROM katalog");

     foreach($pengarang as $pengarang_data) {
         $id_pengarang = $pengarang_data['id_pengarang'];
         $nama_pengarang = $pengarang_data['nama_pengarang'];
         $email = $pengarang_data['email'];
         $telp = $pengarang_data['telp'];
         $alamat = $pengarang_data['alamat'];
     }


?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="edit.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
        <table class="table" width="25%" border="0">

        <tr>
             <td>id Pengarang</td>
             <td style="font-size: 11px;" name="<?php echo $id_pengarang; ?>"><?php echo $id_pengarang; ?> </td>
        </tr>
        <tr>
             <td>Nama Pengarang</td>
             <td><input type ="text" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>"></td>
        </tr>
        <tr>
             <td>Email</td>
             <td><input type ="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
             <td>Telp</td>
             <td><input type ="text" name="telp" value="<?php echo $telp; ?>"></td>
        </tr>
        <tr>
             <td>Alamat</td>
             <td><input type ="text" name="alamat" value="<?php echo $alamat; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn-update" class="btn btn-primary" value="update"></td>
        </tr>

    </form>
        

    <?php
        // Check if form submitted, insert form data into users table.
        if(isset($_POST['btn-update'])) {

            $id_pengarang = $_GET['id_pengarang'];
            
            $nama_pengarang = $_POST['nama_pengarang'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];


            include_once("connect.php");
            
            $result = mysqli_query($mysql, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang'");


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