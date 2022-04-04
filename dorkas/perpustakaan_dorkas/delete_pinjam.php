<?php
session_start();

include_once "functions.php";

include_once("connect.php");

$id_pinjam = $_GET['id_pinjam'];

$result = mysqli_query($mysqli, "DELETE FROM peminjaman WHERE id_pinjam='$id_pinjam'");


if ($result) {
    // set success message to index page
    set_flashdata('success', 'peminjaman deleted successfully.');
    header("Location:peminjam.php");
} else {
    set_flashdata('success', 'peminjaman failed to delete.');
    header("Location:peminjam.php");
}
