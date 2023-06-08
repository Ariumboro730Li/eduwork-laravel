<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function</title>
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
<?php require 'function.php';?>	
<div>
<h2>FUNCTION MENGHITUNG BANGUN DATAR</h2>
</div>

<ol type="1">
	<li>Menghitung Bangun Datar Persegi</li>
		<dl>
			<?php 
				$sisi=9;
			?>
			<dt>Rumus Persegi : </dt>
			<dd>L = Sisi x Sisi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd>Sisi = <?= $sisi; ?> </dd>
			<dd>Jawaban = <?= persegi($sisi); ?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Persegi Panjang</li>
		<dl>
			<?php 
				$p= 12;
				$l= 5;
			?>
			<dt>Rumus Persegi Panjang: </dt>
			<dd>L = Panjang x Lebar</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Panjang = $p, Lebar = $l"?></dd>
			<dd>Jawaban = <?= ppanjang($p, $l); ?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Segitiga</li>
		<dl>
			<?php 
				$a= 9;
				$t= 4;
			?>
			<dt>Rumus Segitiga: </dt>
			<dd>L = 1/2 x Alas x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Alas = $a, Tinggi = $t"?></dd>
			<dd>Jawaban = <?= segitiga($a, $t);?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Jajargenjang</li>
		<dl>
			<?php 
				$a= 14;
				$t= 5;
			?>
			<dt>Rumus Jajargenjang: </dt>
			<dd>L = Alas x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Alas = $a, Tinggi = $t"?></dd>
			<dd>Jawaban = <?= jgenjang($a, $t);?>
			</dd>
		</dl>
	<li>Menghitung Bangun Datar Trapesium</li>
		<dl>
			<?php 
				$a= 12;
				$b= 8;
				$t= 7;
				
			?>
			<dt>Rumus Trapesium: </dt>
			<dd>L = 1/2 x (A + B) x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "A = $a, B = $b, Tinggi = $t"?></dd>
			<dd>Jawaban = <?= tpesium($a, $b, $t); ?>
			</dd>
		</dl>
</ol>
<div>
<h2>FUNCTION MENGHITUNG BANGUN RUANG</h2>
</div>
<ol type="1">
	<li>Menghitung Bangun Ruang Kubus</li>
		<dl>
			<?php 
				$s= 10;
				
			?>
			<dt>Rumus Kubus: </dt>
			<dd>V = Sisi x Sisi x Sisi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Sisi = $s"?></dd>
			<dd>Jawaban = <?= "$s x $s x $s = ".$data = kubus($s);?>
			</dd>
		</dl>
	<li>Menghitung Bangun Ruang Balok</li>
		<dl>
			<?php 
				$p= 10;
				$l= 8;
				$t= 5;
				
			?>
			<dt>Rumus Balok: </dt>
			<dd>V = Panjang x Lebar x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "Panjang = $p, Lebar = $l, Tinggi = $t "?></dd>
			<dd>Jawaban = <?= "$p x $l x $t = " .$data= balok($p,$l,$t);?>
			</dd>
		</dl>
	<li>Menghitung Bangun Ruang Tabung</li>
		<dl>
			<?php 
				$r= 7;
				$t= 10;
			?>
			<dt>Rumus Tabung: </dt>
			<dd>V = &#928 x r<sup>2</sup> x Tinggi</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "r = $r, Tinggi = $t "?></dd>
			<dd>Jawaban = <?= " 22/7 x $r<sup>2</sup> x $t  = ".$data= tabung($r,$t);?>
			</dd>
		</dl>
	<li>Menghitung Bangun Ruang Bola</li>
		<dl>
			<?php 
				$r= 21;
				
			?>
			<dt>Rumus Bola: </dt>
			<dd>V = 4/3 x &#928 x r<sup>3</sup></dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "r = $r "?></dd>
			<dd>Jawaban = <?= " 4/3 x &#928 x $r<sup>3</sup>  = ".$data= bola($r);?>
			</dd>
		</dl>
	<li>Menghitung Bangun Ruang Kerucut</li>
		<dl>
			<?php 
				$r= 10;
				$t=	30;
			?>
			<dt>Rumus Kerucut: </dt>
			<dd>V = 1/3 x &#928 x r<sup>2</sup> x t</dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Contoh</dt>
			<dd><?= "r = $r, Tinggi = $t "?></dd>
			<dd>Jawaban = <?= " 1/3 x &#928 x $r<sup>2</sup> x $t = "
			.$data= kerucut($r, $t);?>
			</dd>
		</dl>
</ol>
</body>
</html>