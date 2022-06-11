<?php
include_once("../connect.php");

$id_penerbit = $_GET['id_penerbit'];

$result = mysqli_query($mysql, "DELETE FROM penerbit WHERE id_penerbit='$id_penerbit'");


if ($result) {
    header("Location:index.php");
} else {
    echo "<script>alert('Gagal menghapus data. buku sedang dipinjam');</script>";
}
?>