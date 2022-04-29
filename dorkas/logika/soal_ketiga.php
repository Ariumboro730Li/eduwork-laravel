<?php 
function printNumberInString($str){
    $no = 0;
    $arr = str_split($str);
    $number = [];
    foreach($arr as $chr){
      if(is_numeric($chr)){
        $number[] = $chr;
        echo $chr;
         $no++;
      }
    }
        echo "\n";
    foreach($number as $chr){

             echo $chr;
        for ($i=1;$i < $no ;$i++ ) {
            echo "0";
        }
        $no--;
        echo "\n";

    }

  }

printNumberInString("9.86-A5.321");
        echo "\n";

?>