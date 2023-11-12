<?php
include_once("connect.php");
 
$isbn = $_GET['isbn'];


$buku = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn='$isbn'");

// $penerbit = mysqli_query($mysqli, "DELETE * FROM penerbit");
// $pengarang = mysqli_query($mysqli, "DELETE * FROM pengarang");
// $katalog = mysqli_query($mysqli, "DELETE * FROM detail_katalog");

// while($buku_data = mysqli_fetch_array($buku))
// {
//     $judul = $buku_data['judul'];
//     $tahun = $buku_data['tahun'];
//     $id_penerbit = $buku_data['id_penerbit'];
//     $id_pengarang = $buku_data['id_pengarang'];
//     $id_katalog = $buku_data['id_katalog'];
//     $qty_stok = $buku_data['Jmh_Stok'];
//     $harga_pinjam = $buku_data['harga_pinjam'];
// }

?>

$isbn = $_GET['isbn'];
	
$result = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn ='$isbn'");

echo $result;

header("location:data.php");
            

            

// if(!$result)
// {
//     header("location:data.php");
// }
// $judul = $_GET['judul'];
// $tahun = $_GET['tahun'];
// $id_penerbit = $_GET['id_penerbit'];
// $id_pengarang = $_GET['id_pengarang'];
// $id_katalog = $_GET['id_katalog'];
// $qty_stok = $_GET['Jmh_Stok'];
// $harga_pinjam = $_GET['harga_pinjam'];
// $result = mysqli_query($mysqli, "DELETE FROM  buku WHERE isbn =$isbn, judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', 
// 			id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', Jmh_Stok = '$qty_stok', harga_pinjam = '$harga_pinjam';");
		
// // After delete redirect to Home, so that latest user list will be displayed.
// header("location:data.php");
?>