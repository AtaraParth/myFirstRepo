<?php
    $n=5;
    for($i=1;$i<=$n;$i++)
    {
        
        for($j=1;$j<=$i;$j++)
        {
            echo "&nbsp";
        }
        for($k=$i;$k<=$n;$k++)
        {
            echo "*";
        }
        echo "</br>";
    }
?>