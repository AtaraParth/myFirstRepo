<?php
    $n=5;
    for($i=1;$i<=5;$i++)
    { 
        for($j=1;$j<=5;$j++)
        {
            if($j>=5-$i)
            {
                print("*");
            }else{
                echo "</br>";
            }
        }
    }
    
?>