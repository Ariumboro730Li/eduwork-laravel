<?php

session_start();

include_once "function.php";

include_once("connect.php");
 
$id_pengarang = $_GET['id_pengarang'];

// check if id_pengarang has in table pengarang
$result = mysqli_query($mysqli, "DELETE FROM pengarang WHERE id_pengarang='$id_pengarang'");

// After delete redirect to Home, so that latest user list will be displayed.
if ($result) {
    // set success message to index page
    set_flashdata('success', 'pengarang berhasil dihapus.');
    header("Location:index_pengarang.php");
} else {
    set_flashdata('success', 'pengarang gagal dihapus.');
    header("Location:index_pengarang.php");
}
?>