<?php
include_once("connect.php");

$id_katalog = $_GET['id_katalog'];

$result = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog='$id_katalog'");

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:index.php");
}

// After delete redirect to Home, so that latest user list will be displayed.
// header("Location:index.php");
