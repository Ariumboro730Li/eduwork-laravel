<?php 

    include_once("connect.php");

    $idpengarang = $_GET['idpg'];
    $result = mysqli_query($connect, "DELETE FROM `pengarang` WHERE id_pengarang ='$idpengarang'");
    
    header("location:pengarang.php")

?>