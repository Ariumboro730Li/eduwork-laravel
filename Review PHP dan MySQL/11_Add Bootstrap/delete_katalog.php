<?php

session_start();

include_once "function.php";

include_once("connect.php");
 
$id_katalog = $_GET['id_katalog'];
 
$result = mysqli_query($mysqli, "DELETE FROM detail_peminjaman WHERE isbn='$isbn'");

// After delete redirect to Home, so that latest user list will be displayed.
if ($result) {
    // set success message to index page
    set_flashdata('success', 'katalog berhasil dihapus.');
    header("Location:index_katalog.php");
} else {
    set_flashdata('success', 'katalog gagal dihapus.');
    header("Location:index_katalog.php");
}
?>