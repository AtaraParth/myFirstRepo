<?php
    $check=0;
    $num=144;
    for( $i=1; $i<=$num;$i++)
    {
        if(($num%$i)==0)
        {
            $check++;
        }
    }
    if($check<3)
    {
        echo "$num is prime";
    }
    else{
        echo "$num is not prime";
    }
?>