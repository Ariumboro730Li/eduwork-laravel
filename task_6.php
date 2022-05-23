<?php

// Apabila terdapat sebuah data : 
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput [4,7,9,12]

function findLowHigh(array $array, int $low, int $high){
    $vals = [];
    foreach ($array as $key => $value) {
        if ($value >= $low) {
            if ($value <= $high) {   
                $vals[] = $value;
            }
        }
    }

    return $vals;
}

$func = findLowHigh( [1,4,7,9,12,18], 7, 10);
var_dump($func);