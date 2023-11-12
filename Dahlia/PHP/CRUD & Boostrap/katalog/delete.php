<?php 

include_once("katalog_connect.php");


$id_katalog = $_GET['id_katalog']; 
$result = mysqli_query($katalog_connect, "DELETE FROM detail_katalog WHERE id_katalog = '$id_katalog'");
// $query="DELETE FROM buku, detail_katalog
// USING buku
// INNER JOIN detail_katalog
// WHERE buku.id_katalog='$id_katalog'
//       AND buku.id_katalog = detail_katalog.id_katalog";
// $result = mysqli_query($katalog_connect, $query);
// print_r($result);

header("location: katalog.php");
// die($id_katalog);

// header("location:katalog.php?pesan=hapus");
?>
