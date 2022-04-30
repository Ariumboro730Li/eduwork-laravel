<?php
error_reporting(0);
include_once("connect.php");
 
$id_katalog = $_GET['id_katalog'];
 
$result = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog = '$id_katalog'");

// After delete redirect to Katalog, so that latest user list will be displayed.
header("Location:katalog.php");
?>