<?php
    $num=0;
    $n1=0;
    $n2=1;
    while($num<20)
    {
        $n3=$n2+$n1;
        echo "$n3".",";
        $n1=$n2;
        $n2=$n3;
        $num++;
    }

?>