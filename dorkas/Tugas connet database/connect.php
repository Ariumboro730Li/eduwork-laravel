<?php 
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

// create Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$conn) {
    die("connection failed:" .mysqli_connect_error());
}

// echo "Connected succesfully";
// mysqli_close($conn);

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    //output date of each row 
    while($row = $result->fetch_assoc()) {
        echo "Buku : " .$row["isbn"]. "" .$row["judul"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>