<?php 
function findMaximum($num1, $num2, $num3) { 
if ($num1 >= $num2 && $num1 >= $num3) { 
return $num1; 
} elseif ($num2 >= $num1 && $num2 >= $num3) { 
return $num2; 
} else { 
return $num3; 
} 
} 
$num1 = 10; 
$num2 = 20; 
$num3 = 15; 
$maxNumber = findMaximum($num1, $num2, $num3); 
echo "The maximum number is: $maxNumber\n"; 
?>