<?php
include_once ("../connect.php");

$isbn = $_GET['isbn'];

$result1 = mysqli_query($mysql, "DELETE FROM detail_peminjaman WHERE isbn='$isbn'");
$result = mysqli_query($mysql, "DELETE FROM buku WHERE isbn='$isbn'");

if ($result) {
    header("Location:index.php");
} else {
    echo "<script>alert('Gagal menghapus data. buku sedang dipinjam');</script>";
}
?>