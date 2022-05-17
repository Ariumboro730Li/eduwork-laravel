<?php

session_start();

include_once "function.php";

include_once("connect.php");
 
$id_penerbit = $_GET['id_penerbit'];
 
// check if id_penerbit has in table penerbit
$result = mysqli_query($mysqli, "DELETE FROM penerbit WHERE id_penerbit ='$id_penerbit'");

// After delete redirect to Home, so that latest user list will be displayed.
if ($result) {
    // set success message to index page
    set_flashdata('success', 'penerbit berhasil dihapus.');
    header("Location:index_penerbit.php");
} else {
    set_flashdata('success', 'penerbit gagal dihapus.');
    header("Location:index_penerbit.php");
}
?>