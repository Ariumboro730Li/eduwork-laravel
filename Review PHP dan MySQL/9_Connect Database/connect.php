<?php
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
	die("connection failed:" .mysqli_connect_error());
}

// echo "Connected successfully";
// mysqli_close($conn);

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	//output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Buku : " . $row["isbn"], " " . $row["judul"]. "<br>";
	}

}

// echo "Connected successfully";
// mysqli_close($conn);

$sql = "SELECT * FROM anggota";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	//output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Anggota : " . $row["nama"], " " . $row["username"]. "<br>";
	}
} else {
	echo "0 results";
}
$conn->close();

?>