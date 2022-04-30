<?php
error_reporting(0);
include_once("connect.php");
 
$id_pengarang = $_GET['id_pengarang'];
 
$result = mysqli_query($mysqli, "DELETE FROM pengarang WHERE id_pengarang = '$id_pengarang'");

// After delete redirect to Pengarang, so that latest user list will be displayed.
header("Location:pengarang.php");
?>