<?php 

// Buatlah fungsi sebagai berikut :
// int : 4, maka outputnya adalah : empat
// int : 20, maka outputnya adalah : dua puluh
// int : 39, maka outputnya adalah : tiga puluh sembilan
// int : 104, maka outputnya adalah : silahkan masukkan bilangan 1-100

function translateNumberToText($number){
	if($number > 100){
		return "Silahkan Masukan Bilangan 1-100";
	}
	$text = [
		'0' => 'kosong',
		'1'=>"satu",
		'2'=>"dua",
		'3'=>"tiga",
		'4'=>"empat",
		'5'=>"lima",
		'6'=>"enam",
		'7'=>"tujuh",
		'8'=>"delapan",
		'9'=>"sembilan",
		'10'=> "sepuluh",
		'100'=> "seratus"
	];
	$puluhanPrefix = 'puluh';


	$number = (string)$number;
	$numberSplit = str_split($number);
	$len = count($numberSplit);

	if($len == 1 || $number == '10' || $number == '100'){
		return $text[$number];
	}
	if($numberSplit[1] == '0'){
		return $text[$numberSplit[0]] . ' ' . $puluhanPrefix;
	}
	return $text[$numberSplit[0]] . ' ' . $puluhanPrefix . ' ' . $text[$numberSplit[0]];

}
echo translateNumberToText(4);
echo "<br>";
echo translateNumberToText(20);
echo "<br>";
echo translateNumberToText(39);
echo "<br>";
echo translateNumberToText(50);
?>