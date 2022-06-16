<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Katalog</title>
</head>

<?php 
    include_once("connect.php");
    $idkatalog = $_GET['idkatalog'];
    
    $katalog = mysqli_query($connect, "SELECT katalog.*, count(buku.id_katalog) as total_judul, sum(buku.qty_stok) as total_stok 
    FROM katalog LEFT JOIN buku ON buku.id_katalog = katalog.id_katalog WHERE katalog.id_katalog = '$idkatalog' GROUP BY katalog.id_katalog;");

    while($data = mysqli_fetch_array($katalog)){
        $idkg = $data['id_katalog'];
        $nama = $data['nama'];
        $judul = $data['total_judul'];
        $stok = $data['total_stok'];

    }
?>
<body>
    <a href="katalog.php">Go Back</a>
    <br><br>

    <form action="editkg.php?idkatalog=<?php echo $idkatalog; ?>" method = "post">
        <table width="25%" border="0";>
            <tr>
                <td>ID Katalog</td>
                <td><input type="text" name="idkatalog" value="<?php echo $idkg?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namakg" value ="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Total Judul</td>;
                <td><?php echo $judul;?></td>
            </tr>
            <tr>
                <td>Stok</td>;
                <td><?php echo $stok?></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>