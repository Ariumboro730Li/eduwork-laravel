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
	ol li{
		font-size:20px;
		line-height: 100px;
		font-weight:bolder;
	}

</style>
<body>
<div>
<h2>MENGHITUNG BANGUN DATAR</h2>
</div>

<ol type="1">
	<li>Menghitung Bangun Datar Persegi</li>
		<dl>
			<?php 
				$sisi=9;
				$hasil_persegi = $sisi * $sisi; 
			?>
			<dt>Rumus Persegi : </dt>
			<dd>L = Sisi x Sisi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd>Sisi = <?= $sisi; ?> </dd>
			<dd>Jawaban = <?= "$sisi x $sisi = $hasil_persegi";?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Persegi Panjang</li>
		<dl>
			<?php 
				$p= 12;
				$l= 5;
				$hasil_ppanjang = $p * $l; 
			?>
			<dt>Rumus Persegi Panjang: </dt>
			<dd>L = Panjang x Lebar</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Panjang = $p, Lebar = $l"?></dd>
			<dd>Jawaban = <?= "$p x $l = $hasil_ppanjang ";?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Segitiga</li>
		<dl>
			<?php 
				$a= 9;
				$t= 4;
				$hasil_segitiga = $a * $t / 2; 
			?>
			<dt>Rumus Segitiga: </dt>
			<dd>L = 1/2 x Alas x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Alas = $a, Tinggi = $t"?></dd>
			<dd>Jawaban = <?= "1/2 x $a x $t = $hasil_segitiga";?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Jajargenjang</li>
		<dl>
			<?php 
				$a= 14;
				$t= 5;
				$hasil_jgenjang = $a * $t; 
			?>
			<dt>Rumus Jajargenjang: </dt>
			<dd>L = Alas x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Alas = $a, Tinggi = $t"?></dd>
			<dd>Jawaban = <?= "$a x $t = $hasil_jgenjang ";?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Trapesium</li>
		<dl>
			<?php 
				$a= 12;
				$b= 8;
				$t= 7;
				$hasil_tsium = ($a + $b) * 7 / 2; 
			?>
			<dt>Rumus Trapesium: </dt>
			<dd>L = 1/2 x (A + B) x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "A = $a, B = $b, Tinggi = $t"?></dd>
			<dd>Jawaban = <?= "1/2 x ($a + $b) x 7 = $hasil_tsium ";?>
			</dd>
		</dl>
</ol>
<div>
<h2>MENGHITUNG BANGUN RUANG</h2>
</div>
<ol type="1">
	<li>Menghitung Bangun Ruang Kubus</li>
		<dl>
			<?php 
				$s= 10;
				$hasil_kubus = pow($s,3); 
			?>
			<dt>Rumus Kubus: </dt>
			<dd>V = Sisi x Sisi x Sisi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Sisi = $s"?></dd>
			<dd>Jawaban = <?= "$s x $s x $s = $hasil_kubus ";?>
			</dd>
		</dl>
	<li>Menghitung Bangun Ruang Balok</li>
		<dl>
			<?php 
				$p= 10;
				$l= 8;
				$t= 5;
				$hasil_balok = $p * $l * $t; 
			?>
			<dt>Rumus Balok: </dt>
			<dd>V = Panjang x Lebar x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Panjang = $p, Lebar = $l, Tinggi = $t "?></dd>
			<dd>Jawaban = <?= "$p x $l x $t = $hasil_balok ";?>
			</dd>
		</dl>
	<li>Menghitung Bangun Ruang Tabung</li>
		<dl>
			<?php 
				$r= 7;
				$t= 10;
				$hasil_tabung = ceil(pi() * pow($r,2) * $t) ; 
			?>
			<dt>Rumus Tabung: </dt>
			<dd>V = &#928 x r<sup>2</sup> x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "r = $r, Tinggi = $t "?></dd>
			<dd>Jawaban = <?= " 22/7 x $r<sup>2</sup> x $t  = $hasil_tabung ";?>
			</dd>
		</dl>
</ol>
</body>
</html>