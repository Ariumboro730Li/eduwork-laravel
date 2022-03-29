<?php
$server = "localhost";
$db = "perpus";
$user = "root";
$pw = "";

$conn = mysqli_connect($server, $user, $pw,  $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Koneksi bisa";

$sql = "SELECT * FROM anggota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Anggota : " . $row["nama"] . " Beralamat di " . $row["alamat"] . "<br>";
    }
} else {
    echo "Data ngga ada";
}
$conn->close();
