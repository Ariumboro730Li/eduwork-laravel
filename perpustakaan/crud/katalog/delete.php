<?php
include_once("../connect.php");

$id_katalog = $_GET['id_katalog'];

$result = mysqli_query($mysql, "DELETE FROM katalog WHERE id_katalog='$id_katalog'");


if ($result) {
    header("Location:index.php");
} else {
    echo "<script>alert('Gagal menghapus data. buku sedang dipinjam');</script>";
}
?>