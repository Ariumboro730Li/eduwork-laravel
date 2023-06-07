<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 2</title>
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
		
	}
</style>
<body>
<div>
<h2>MENGHITUNG BERAT BADAN</h2>
</div>
<?php 
	$nama= "Khozin";
	$berat= 999999999999;
	$tinggi= 170;
	$bagi= $tinggi / 100;
	$hasil = round($berat / pow($bagi, 2),1);
	
	// kondisi
	if($hasil < 17.0):
		$kategori="Sangat Kurus";	
	elseif ($hasil >= 17.0 && $hasil < 18.5):
		$kategori="Kurus";
	elseif ($hasil >= 18.5 && $hasil < 24.9):
		$kategori="Normal";
	elseif ($hasil >= 25 && $hasil < 29.9):
		$kategori="Gemuk";
	else:
		$kategori="Obesitas";
	endif;
?>
<dl>
			<?php 
				$sisi=9;
				$hasil_persegi = $sisi * $sisi; 
			?>
			<dt>Rumus BMI : </dt>
			<dd>Berat Badan / (Tinggi Badan x Tinggi Badan)</dd>
			<dt>Kategori</dt>
			<dd>
				<table border="1" cellspacing="0" width="300px" style="text-align: center;">
					<tr>
						<th>Nilai BMI</th>
						<th>Kategori</th>
					</tr>
					<tr>
						<td> < 17,0</td>
						<td> Sangat Kurus</td>
					</tr>
					<tr>
						<td> 17,0 - 18,5</td>
						<td> Kurus</td>
					</tr>
					<tr>
						<td> 18,5 - 24,9</td>
						<td> Normal</td>
					</tr>
					<tr>
						<td> 25 - 29,9</td>
						<td> Gemuk</td>
					</tr>
					<tr>
						<td> > 30,0</td>
						<td> Obesitas</td>
					</tr>
				</table>
			</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd>
				Nama = <?= $nama; ?>, 
				Berat Badan = <?= $berat; ?> kg,   
				Tinggi Badan = <?= $tinggi; echo " m = $tinggi / 100 = $bagi";?>   
			</dd>
			<dd>Hasil =
				<?= " $berat / $bagi x $bagi = $hasil";?> <br>
			</dd>
			<dt>Kesimpulan</dt>
			<dd>
			Halo <?= "$nama, Nilai BMI Anda adalah $hasil, Anda Termasuk ($kategori)";?></dd>
		</dl>
	

</body>
</html>