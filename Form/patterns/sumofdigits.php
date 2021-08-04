<?php
    $n=31;
    for($i=2;$i<=$n/2;$i++)
    {
        if($n%$i == 0)
        {
            $f=1;
            break;
        }
    }
    if($i==0)
    {
        echo "$n is prime";
    }
    else
    {
        echo "$n is not prime";
    }
?>