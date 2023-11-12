<?php 

include_once("penerbit_connect.php");


$id_penerbit = $_GET['id_penerbit']; 
$result = mysqli_query($penerbit_connect, "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'");
// $query="DELETE FROM buku, penerbit
// USING buku
// INNER JOIN penerbit
// WHERE buku.id_penerbit='$id_penerbit'
//       AND buku.id_penerbit = penerbit.id_penerbit";
// $result = mysqli_query($penerbit_connect, $query);
// print_r($result);

header("location: penerbit.php");

// die($id_penerbit);

// header("location:penerbit.php?pesan=hapus");
?>
