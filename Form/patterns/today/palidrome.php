<?php
    $n=12321;
    $sum=0;
    while(floor($n))
    {
        $rem=$n%10;
        $sum=$sum*10+$rem;
        $n=$n/10;
    }
    echo $sum;
    if($n==$sum)
    {
        echo "aa";
    }
?>