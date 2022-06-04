<?php
$servername = "localhost";
$database = "perpustakaan";
$username = "root";
$password = "";

// create connection
$cann = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$cann) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected succesfully";
//mysqli_close($cann);

$sql = "SELECT * FROM `anggota`";
$result = $cann ->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "anggota : " . $row["nama"] . " Beralamat di " . $row["alamat"] . "<br>";
    }
} else {
    echo "Data kosong";

}

?>