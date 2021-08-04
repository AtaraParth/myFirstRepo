<?php
    $num=407;
    $total=0;
    $temp=$num;
    while($temp!=0)
    {
        $rem=$temp%10;
        $total=$total+$rem*$rem*$rem;
        $temp=$temp/10;
    }
    if($num==$total)
    {
        echo "yes armstrong";
    }
    else
    {
        echo "Not armstrong";
    }
?>