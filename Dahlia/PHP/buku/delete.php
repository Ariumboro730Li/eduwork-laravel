<?php 

include_once("connect.php");

$isbn = $_GET['isbn'];
 
$hapus = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn= '$isbn'");
If($hapus)
{
        header("location:buku.php");
}
else
{
        header("location:buku.php");
}

?>


