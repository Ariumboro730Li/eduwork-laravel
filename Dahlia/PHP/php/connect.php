<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .Data{
        width: 100%;
        height: 50px;
        background-color: orange;
        margin-top: 20px;
        margin-bottom: 50px;
    }
    .Data p{
        font-weight: bold;
        font-size:16pt;
        padding-top: 15px;
        margin-left:50px;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
        margin-left: 25%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: white;
        color: black;
    }
</style> 
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