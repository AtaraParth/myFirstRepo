<?php  
	for($p=0;$p<=5;$p++){  
	for($a=1;$a<=$p;$a++){  
	echo "* ";  
	}  
	echo "<br>";  
	}  
?> 




<?php
	$size = 5;
	for($a=1;$a<=$size;$a++){
	    for($p=1;$p<=$size-$a;$p++){
	        echo "&nbsp;&nbsp;";
	    }
	    for($d=1;$d<=$a;$d++){
			echo "*&nbsp;&nbsp;";
	    }
	echo "<br />";
}
?>