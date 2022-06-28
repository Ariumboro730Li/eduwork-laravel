<?php

    include_once("connect.php");

    $isbn = $_GET['isbn'];
    $result = mysqli_query($connect, "DELETE FROM buku WHERE isbn='$isbn'");
    
    header("location:index.php")

?>