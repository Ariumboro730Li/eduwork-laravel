<?php
session_start();

include_once "functions.php";

include_once("connect.php");

$id_pengarang = $_GET['id_pengarang'];

$result = mysqli_query($mysqli, "DELETE FROM pengarang WHERE id_pengarang='$id_pengarang'");


if ($result) {
    // set success message to index page
    set_flashdata('success', 'pengarang deleted successfully.');
    header("Location:dashboard.php");
} else {
    set_flashdata('success', 'pengarang failed to delete.');
    header("Location:dashboard.php");
}
