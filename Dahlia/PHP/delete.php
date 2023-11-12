<?php
  include ("connect.php");
        if ($_GET['isbn']){
        $isbn = $_GET['sbn'];
        $del="DELETE FROM tb_jurusan where isbn='$isbn'";
        $del= mysql_query($del);
        } ?>

?>

<!-- include_once("connect.php");
 
$isbn = $_GET['isbn'];
 
$result = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn='$isbn'");
if($result)
{
    header("location:data.php");
}
else
{
    header("location:data.php");
}

// After delete redirect to Home, so that latest user list will be displayed.
header("location:data.php"); -->