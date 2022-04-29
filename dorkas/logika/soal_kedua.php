<?php
	function calculate($bil){
    if($bil < 0) return 0;
  	return array_reduce(range(1,$bil),function($val, $val2){
  	  return $val * $val2;
  	},1);
  }
	echo calculate(0);
	echo "\n\n";
	
	function reverseString($str){
	  return $str ? reverseString(substr($str,1)).$str[0]:'';
	}
	
	echo reverseString("abcde");
	echo "\n\n";
?>