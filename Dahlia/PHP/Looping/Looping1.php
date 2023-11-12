<?php
    
    echo "<br><br><b>Membuat Looping Bentuk Segitiga</b><br><br>";
    
    $star=8;
	for($a=0; $a<=$star; $a++)
    {
	for($b=0; $b<=$a; $b++)
    {
		echo " ", $b;
	}
	echo "<br>";
	}
    
?> 