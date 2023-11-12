<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<?php
        $servername = "localhost";
        $database = "perpus";
        $username = "root";
        $password = "" ;

        $conn = mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die("Connect  Failed: " . mysqli_connect_error());
        }
        // echo "Connected Succesfully";
        // mysqli_close($conn);



        $sql = "SELECT * FROM anggota";
        $result = $conn->query( $sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "ID_Anggota :   " .$row["id_anggota"]. "   Nama = ".$row["nama"]. "<br>";
                }
            }
            else {
                echo " 0 results";
            }
            $conn->close();

?>
</body>
</html>