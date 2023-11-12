<?php 

include_once("pengarang_connect.php");


$id_pengarang = $_GET['id_pengarang']; 
$result = mysqli_query($pengarang_connect, "DELETE FROM pengarang WHERE id_pengarang = '$id_pengarang'");
// $query="DELETE FROM buku, pengarang
// USING buku
// INNER JOIN pengarang
// WHERE buku.id_pengarang='$id_pengarang'
//       AND buku.id_pengarang = pengarang.id_pengarang";
// $result = mysqli_query($pengarang_connect, $query);
// print_r($result);

header("location: pengarang.php");

// die($id_pengarang);

// header("location:pengarang.php?pesan=hapus");
?>
