<?php

// Ketik kode untuk swap 2 integer variables tanpa VARIABLE TAMBAHAN 
// Contoh : let a = 3, let b = 7 => hasilnya a = 7, b = 3

function swap(int $a, int $b) {
    $a = $a + $b; # 3 + 7
    $b = $a - $b; # 10 - 7
    $a = $a - $b; # 10 - 3
    echo "a = $a".PHP_EOL; # 7
    echo "b = $b".PHP_EOL; # 3
}
swap($a = 3, $b = 7);