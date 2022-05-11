<?php
session_start();

include_once "function.php";

include_once("connect.php");

$id_pinjam = $_GET['id_pinjam'];

// check if id_penerbit has in table penerbit
$result = mysqli_query($mysqli, "DELETE FROM detail_peminjaman WHERE isbn ='$isbn'");

// After delete redirect to Home, so that latest user list will be displayed.
if ($result) {
    // set success message to index page
    set_flashdata('success', 'pinjam berhasil dihapus.');
    header("Location:index_pinjam.php");
} else {
    set_flashdata('success', 'pinjam gagal dihapus.');
    header("Location:index_pinjam.php");
}
?>