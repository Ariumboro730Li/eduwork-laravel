<?php 
function calculate($bil) {
    if($bil < 0) return 0;
    return array_reduce(range(1,$bil),function($val, $val2){
        return $val * $val2;
      },1);
  }
    echo calculate(4);
    echo "<br>";
    echo calculate(8);
?>