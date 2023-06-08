<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menghitung</title>
</head>
<style type="text/css">
	*{
		
		font-family:'times new roman', serif;
	}

	div	{
		background:green;
		color:white;
		height:50px;
		
	}


	div h2{
		text-align:center;
		line-height: 50px;
		;
	}
	table tr th{
		background: #50d6ff;
	}

	table tr td{
		text-align: center;
	}
	table .warna{
		background:#d3d6d6;
	}
	
</style>
<body>
<div>
<h2>LOOPING 1</h2>
</div>
<br>
<?php 

	for($i=0; $i<=8; $i++):

		for($j=0; $j<=$i; $j++):
			echo $j;
		endfor;

		echo "<br>";	
	endfor;

?>
<div>
<h2>LOOPING 2</h2>
</div>
<br>

 <?php
echo "<table border=1 width=30% cellspacing=0>";
echo "<tr>
	 <th> No </th>			
	 <th> Nama </th>			
	 <th> Kelas</th>			
     <tr>";

$urutan=0;
	for($i=10; $i>=1; $i--){
$urutan++;	
	if($urutan % 2 == 1):
	echo "<tr class='warna'>";
	else:
	echo "<tr>";
	endif;	
	
		echo "<td>$urutan</td>";
		echo "<td> Nama ke $urutan</td>";
	
	for($j=1; $j<=1; $j++){
		echo "<td>Kelas $i</td>";
}
		echo "</tr>";
}
		echo "</table>";
?>
</body>
</html>