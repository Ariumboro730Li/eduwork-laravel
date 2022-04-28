<?php

// Ketik kode untuk swap 2 integer variables tanpa VARIABLE TAMBAHAN 
// Contoh : let a = 3, let b = 7 => hasilnya a = 7, b = 3

function swap($a, $b = 7) {
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "a = $a".PHP_EOL;
    echo "b = $b".PHP_EOL;
}
swap($a = 3, $b = 7);