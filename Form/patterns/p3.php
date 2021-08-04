<?php
$n=5;
$m=1;
for($i=$n;$i>=1;$i--)
{
    for($j=1;$j<=$i-1;$j++)
    {
        echo "&nbsp";
    }
    for($k=1;$k<=$m;$k++)
    {
        echo "*";
    }
    
    echo "</br>";
    $m++;
}

?>