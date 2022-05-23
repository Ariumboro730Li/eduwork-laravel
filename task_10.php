<?php

// Buatlah fungsi untuk mengecek tahun kabisat
// input : 2021
// output : 2021 bukan tahun kabisat

// input : 2024
// output : 2024 adalah tahun kabisat

function tahunKabisat(int $year){
    if ($year % 4 == 0) {
       echo "$year adalah Tahun KABISAT".PHP_EOL;
    } else {
        echo "$year adalah BUKAN Tahun KABISAT".PHP_EOL;
    }
}

for ($i=2021; $i < 2029 ; $i++) { 
    tahunKabisat($i);
}
