<?php
include_once "connect.php";

$id_pengarang = $_GET['id_pengarang'];

$result = mysqli_query($mysql, "DELETE FROM pengarang WHERE id_pengarang='$id_pengarang'");

if ($result) {
    header("Location:index.php");
} else {
    echo ("Gagal menghapus data");
}
?>