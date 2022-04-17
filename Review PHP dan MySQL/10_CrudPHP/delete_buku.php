<?php
include_once("connect.php");
 
$isbn = $_GET['isbn'];
 
$result = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn='$isbn'");

if (!$result) {
    echo "
    <script>
        alert('Hapus Data Gagal! Buku sedang dipinjam');
        document.location.href = 'index.php';
    </script>
";
    // $_SESSION['pesan'] = true;
    // header("Location:index.php");
    // echo mysqli_error($mysqli);
} else {
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:index.php");
}

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>