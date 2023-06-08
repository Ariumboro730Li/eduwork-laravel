<?php 
function persegi(int $sisi)
{
	$hasil_persegi = $sisi * $sisi; 
	echo "$sisi x $sisi = $hasil_persegi";
}
function ppanjang(int $panjang, int $lebar)
{
	$hasil_ppanjang = $panjang * $lebar; 
	echo "$panjang x $lebar = $hasil_ppanjang";
}

function segitiga(int $alas, int $tinggi)
{
	$hasil_segitiga = $alas * $tinggi / 2; 
	echo "1/2 x $alas x $tinggi = $hasil_segitiga";
}

function jgenjang(int $alas, int $tinggi)
{
	$hasil_jgenjang = $alas * $tinggi; 
	echo "$alas x $tinggi = $hasil_jgenjang";
}
function tpesium(int $a, int $b, int $tinggi)
{
	$hasil_tsium = ($a + $b) * 7 / 2;  
	echo "1/2 x ($a + $b) x 7  = $hasil_tsium";
}



function kubus(int $sisi)
{
	$hasil_kubus = pow($sisi,3); 
	return $hasil_kubus;
}

function balok(int $panjang, int $lebar, int $tinggi)
{
	$hasil_balok = $panjang * $lebar * $tinggi;  
	return $hasil_balok;
}

function tabung(int $r, int $tinggi)
{
	$hasil_tabung = ceil(pi() * pow($r,2) * $tinggi) ;   
	return $hasil_tabung;
}

function bola(int $r)
{
	$hasil_bola = round(4/3 * pi() * pow($r,3) ,1) ;  
	return $hasil_bola;
}

function kerucut(int $r, int $tinggi)
{
	$hasil_kerucut = round(1/3 * pi() * pow($r,2) * $tinggi ,1) ;  
	return $hasil_kerucut;
}
 









?>
