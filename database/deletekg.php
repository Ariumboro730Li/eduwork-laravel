<?php 

    include_once("connect.php");

    $idkatalog = $_GET['idkg'];
    $result = mysqli_query($connect, "DELETE FROM `katalog` WHERE id_katalog ='$idkatalog'");
    
    header("location:katalog.php")

?>