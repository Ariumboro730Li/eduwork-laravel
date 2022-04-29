<?php 
$dataArr=[1,4,7,9,12];
print_r($dataArr);

function filterArray($low,$high,$arr){
	$filteredArr = [];
	foreach($arr as $key => $value){
		if($value >= $low && $value <= $high){
			$filteredArr[] = $value;
		}
	}
	return $filteredArr;
}

print_r(filterArray(2,15,$dataArr));
?>