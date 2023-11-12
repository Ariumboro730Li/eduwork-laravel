<?php
$servername ="localhost";
$database = "perpus";
$username= "root";
$password = "";

$mysqli = mysqli_connect($servername, $username, $password, $database); 

?>
// koneksi database
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$buku_data = $_POST['isbn'];
 
 
// menghapus data dari database
mysqli_query($mysqli,"DELETE from buku where isbn='$buku_data'");
 
// mengalihkan halaman kembali ke index.php
header("location:buku.php");