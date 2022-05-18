<?php

// Buatlah fungsi sebagai berikut :
// int : 4, maka outputnya adalah : empat
// int : 20, maka outputnya adalah : dua puluh
// int : 39, maka outputnya adalah : tiga puluh sembilan
// int : 104, maka outputnya adalah : silahkan masukkan bilangan 1-100

function spellInteger($integer){
    if ($integer < 100) {
        $format =  new NumberFormatter("id", NumberFormatter::SPELLOUT);
        return $format->format($integer);
    } else {
        return "silahkan masukkan bilangan 1-100";
    }
}

echo spellInteger(210);