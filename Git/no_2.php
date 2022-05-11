<?php 

// Buatlah fungsi untuk reverse sebuah string
// Apabila input = “abcde”, maka outputnya = “edcba”
// Dilarang menggunakan function reverse, buatlah logika sendiri


function calculate($bil){
    if($bil) return;
    return array_reduce(range(1,$bil),function($val1, $val5){
    return $val1 * $val5;
    },1);
  }
    echo calculate(5);
    
function reverseString($str){
    return $str ? reverseString(substr($str,1)).$str[0]:'';
    }
    
    echo reverseString("abcde");
?>