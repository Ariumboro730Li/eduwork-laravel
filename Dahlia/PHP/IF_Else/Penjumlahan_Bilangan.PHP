<?php
    $menu=6;
    $bilangan1 = 100;
    $bilangan2 = 50;

    if($menu == 1)
    {
        echo $bilangan1 + $bilangan2;
    }
    else if($menu == 2)
    {
        echo $bilangan1 - $bilangan2;
    }
    else if($menu == 3)
    {
        echo $bilangan1 * $bilangan2;
    }
    else if($menu == 4)
    {
        echo $bilangan1 / $bilangan2;
    }
    else if($menu == 5)
    {
        echo $bilangan1 ^ $bilangan2;
    }
    else{
        echo "Tidak ada dalam Perhitunga";
    }
    
?>