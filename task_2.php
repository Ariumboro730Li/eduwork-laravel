<?php 

// Buatlah fungsi untuk reverse sebuah string
// Apabila input = “abcde”, maka outputnya = “edcba”
// Dilarang menggunakan function reverse, buatlah logika sendiri

## function reverse bawaan PHP ##
// echo strrev ( "ABCDE" ).PHP_EOL; 

function stringReverse($word) {
    $lengthWord = strlen($word);
    for ($i=($lengthWord-1) ; $i >= 0 ; $i--){
        $a[] = $word[$i];
    }
    return implode("", $a).PHP_EOL;
    ## implode = array to string
}

echo stringReverse("abcde");
echo stringReverse("word");