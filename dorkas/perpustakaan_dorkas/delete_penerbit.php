<?php
session_start();

include_once "functions.php";

include_once("connect.php");

$id_penerbit = $_GET['id_penerbit'];

$result = mysqli_query($mysqli, "DELETE FROM penerbit WHERE id_penerbit='$id_penerbit'");

if ($result) {
    // set success message to index page
    set_flashdata('success', 'penerbit deleted successfully.');
    header("Location:index.php");
} else {
    set_flashdata('success', 'penerbit failed to delete.');
    header("Location:index.php");
}
