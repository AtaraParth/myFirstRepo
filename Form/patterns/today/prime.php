<?php
    // $count=0;
    $num=11;
    // while($num<15)
    // {
        $c=0;
        for($i=1;$i<=$num;$i++)
        {
            if(($num%$i)==0)
            {
                $c++;
            }
        }
        if($c<3)
        {
            echo $num.',';
            //$count++;
        }
        $num++;
    //}
?>