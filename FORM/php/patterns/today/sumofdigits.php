<?php
// PHP program to calculate the sum of digits
function sum($num) {
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++){
        $sum += $num[$i];
    }
    return $sum;
}
  
// Driver Code
$num = "711";
echo sum($num);
?>