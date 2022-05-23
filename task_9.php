<?php

// Buatlah fungsi untuk menentukan bilangan terkecil dan terbesar dari sebuah array
// Contoh : array [4,2,6,88,3,11]
// Maka outputnya adalah low : 2, high : 88
// dilarang menggunakan built in function
function findMinMax(array $array){
    sort($array);
    $arrlength = count($array);
    ## min = index 0, max = index $arrlength - 1
    for($x = 0; $x < $arrlength; $x++) {
        if ($x == 0) {
            echo "LOW = $array[$x]".PHP_EOL;
        } else if ($x == $arrlength - 1){
            echo "HIGH = $array[$x]".PHP_EOL;
        }
    }
}

$minMax = findMinMax([4,2,6,88,3,11]);
$minMax;