<?php
	$datasiswa =
	[
		[		
				"no"	=>1,
				"nama" => "Pelita",
				"kelas" => "Laravel",
				"alamat" => "Bandung",
				"tanggal_lahir" => "1997-12-27",
				"nilai" => 90,
		],
		[
				"no"	=>2,
				"nama" => "Najmina",
				"kelas" => "Vue JS",
				"alamat" => "Jakarta",
				"tanggal_lahir" => "1998-10-07",
				"nilai" => 55,
		],	
		[
				"no"	=>3,
				"nama" => "Anita",
				"kelas" => "Design",
				"alamat" => "Semarang",
				"tanggal_lahir" => "1999-08-20",
				"nilai" => 80,
		],
		[
			"no"	=>4,
			"nama" => "Anita",
			"kelas" => "Design",
			"alamat" => "Semarang",
			"tanggal_lahir" => "1999-08-20",
			"nilai" => 80,
		],
		[
			"no"	=>6,
			"nama" => "Bayu",
			"kelas" => "Digital Marketing",
			"alamat" => "Bandung",
			"tanggal_lahir" => "1990-01-01",
			"nilai" => 65
		],
		[
			"no"	=>7,
			"nama" => "Nasa",
			"kelas" => "UI/UX Designer",
			"alamat" => "Bandung",
			"tanggal_lahir" => "1995-04-10",
			"nilai" => 70
			
		],
		[
			"no"	=>8,
			"nama" => "Rahma",
			"kelas" => "Node JS",
			"alamat" => "Yogyakarta",
			"tanggal_lahir" => "1993-09-15",
			"nilai" => 85
		]
				
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
				<th>Nilai</th>
				<th>Skala</th>
			</tr>
			<?php foreach ($datasiswa as $data) { ?>
				<tr>
				<td><?php echo $data ["no"] ?></td>	
				<td><?php echo $data ["nama"] ?></td>
				<td><?php echo $data ["kelas"] ?></td>
				<td><?php echo $data ["alamat"] ?></td>
				<td><?php echo $data ["tanggal_lahir"] ?></td>
				<td><?php echo $data ["nilai"] ?></td>

			<td>
			<?php	
				if ($datasiswa[5] >= 10 && $datasiswa <= 20)
					{
						 echo "F" ;
					}
				else if ($datasiswa[5] >= 21 && $datasiswa[5] <= 40)
					{
						 echo "E" ;
					}
				else if ($datasiswa[5] >= 41 && $datasiswa[5] <= 50)
					{
						echo "D" ;
					}
				else if ($datasiswa[5] >= 51 && $datasiswa[5] <= 60)
					{
						echo "C";	
					}
				else if ($datasiswa[5] >= 61 && $datasiswa[5] <= 70)
					{
						 echo "B" ;
					}
				else if ($datasiswa[5] >= 81 && $datasiswa[5] <= 100)
					{
						echo "A" ;
					}
					else {
						echo "Tidak ada";
					}
				?>
			</td>
				</tr>
			<?php } ?>
		</table>
</body>
</html>