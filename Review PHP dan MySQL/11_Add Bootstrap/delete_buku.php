<?php
session_start();

include_once "function.php";

include_once("connect.php");

$isbn = $_GET['isbn'];


// check if isbn has in table detail_pinjam
$result = mysqli_query($mysqli, "SELECT * FROM detail_peminjaman WHERE isbn='$isbn'");

// if exist
if (mysqli_num_rows($result) > 0) {
    // set success message to index page
    set_flashdata('success', 'buku masih dipinjam, tidak bisa dihapus.');
    header("Location:index.php");
} else {
    $result = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn='$isbn'");
    // if data inserted successfully return to index page if set error
    if ($result) {
        // set success message to index page
        set_flashdata('success', 'buku berhasil dihapus.');
        header("Location:index.php");
    } else {
        set_flashdata('success', 'buku gagal dihapus.');
        header("Location:index.php");
    }
}
