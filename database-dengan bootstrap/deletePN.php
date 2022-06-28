<?php 

    include_once("connect.php");

    $idpenerbit = $_GET['idpenerbit'];
    $result = mysqli_query($connect, "DELETE FROM `penerbit` WHERE id_penerbit ='$idpenerbit'");
    
    header("location:penerbit.php")

?>