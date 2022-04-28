<?php 

// Buatlah fungsi untuk reverse sebuah string
// Apabila input = “abcde”, maka outputnya = “edcba”
// Dilarang menggunakan function reverse, buatlah logika sendiri

// echo strrev ( "word" ); 
// function reverse bawaan PHP

function stringReverse($word) {
    $lengthWord = strlen($word);
    for ($i=($lengthWord-1) ; $i >= 0 ; $i--){
        echo $word[$i];
    }
}
stringReverse("word").PHP_EOL;