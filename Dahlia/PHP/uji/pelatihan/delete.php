<?php
include_once("anggota.php");
 
$anggota = $_GET['id_anggota'];


    $result = mysqli_query($connect_anggota, "DELETE FROM anggota WHERE id_anggota ='$anggota'");
  
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:anggota.php");
?>
