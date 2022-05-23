<?php

// Buatlah fungsi untuk menampilkan jumlah digit angka tergantung dimana posisi atau tempat dari angka dalam sebuah string “9.86-A5.321”! 
// Contoh: printDigitValue(‘9.86-A5.321’);
// Hasil :
// 9865321
// 9000000
// 800000
// 60000
// 5000
// 300
// 20
// 1

function printDigitValue(string $string){
    $string_to_integer = strval(preg_replace('/[^0-9]+/', '', $string));    
    $length_integer = strlen($string_to_integer);
    echo $string_to_integer.PHP_EOL;
    for ($i=0; $i < $length_integer; $i++) {
        $w =  $string_to_integer[$i];
        $wz = [];
        for ($izero=($length_integer-2) ; $izero >= $i ; $izero--){
            $wz[] = 0;
        }
        $wz = $w.implode("", $wz);
        echo $wz.PHP_EOL;
    }
}

printDigitValue("9.86-A5.321");