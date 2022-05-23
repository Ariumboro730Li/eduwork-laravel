<?php

// Dari soal nomor 6, buatlah juga untuk menghasilkan output total ada berapa angka yg termasuk dari bagian low dan high
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput = 4

// function findLowHigh($array, $low, $high){
//     $vals = [];
//     foreach ($array as $key => $value) {
//         if ($value >= $low) {
//             if ($value <= $high) {   
//                 $vals[] = $value;
//             }
//         }
//     }

//     return $vals;
// }

include "task_6.php";
$func = findLowHigh( [1,4,7,9,12,18], 1, 12);
echo "TOTAL = ".count($func).PHP_EOL;