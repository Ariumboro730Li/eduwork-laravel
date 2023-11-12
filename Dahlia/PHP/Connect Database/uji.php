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
</body>
</html>

<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perpus'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT id_anggota, nama, username, sex,tlp
		FROM anggota';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table id="customers">
		<thead>
			<tr>
				<th>ID ANGGOTA</th>
				<th>NAMA</th>
				<th>USERNAME</th>
				<th>SEX</th>
                <th>Telepon</th
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id_anggota'].'</td>
			<td>'.$row['nama'].'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['sex'].'</td>
			<td>'.number_format($row['tlp']).'</td>
			
		</tr>';
}
echo '
	</tbody>
</table>';    
