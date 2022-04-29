<?php 
function translateNumberToText($number){
	if($number < 0){
		return "Negative number";
	}
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
	// if($number <10 && $number > 0 || $number == 10 || $number ==100){
	// 	return $text[$number];
	// }
    // convert number to string and split
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
echo translateNumberToText(100);
echo "\n";
echo "\n";
?>