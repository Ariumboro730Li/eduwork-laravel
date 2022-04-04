<?php
session_start();

include_once "functions.php";

include_once("connect.php");

$id_katalog = $_GET['id_katalog'];
// echo $id_katalog;
// die();
$result = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog='$id_katalog'");
// if data inserted successfully return to index page if set error
if ($result) {
    // set success message to index page
    set_flashdata('success', 'katalog deleted successfully.');
    header("Location:homepage.php");
} else {
    set_flashdata('success', 'katalog failed to delete.');
    header("Location:homepage.php");
}
