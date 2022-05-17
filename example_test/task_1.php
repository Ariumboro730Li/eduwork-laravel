<?php

// Buatlah fungsi sebagai berikut :
// Apabila terdapat int = 4, maka outputnya 24 (prosesnya : 4*3*2*1)
// Apabila terdapat int = 8, maka outputnya 40320 (prosesnya : 8*7*6*5*4*3*2*1) 

function factorial(int $value): int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorial($value - 1);
    }
}

for ($i=4; $i <=8 ; $i++) { 
    echo factorial($i). PHP_EOL;
}