<?php 
function addMatrices($matrix1, $matrix2) { 
$result = array();  
for ($i = 0; $i < 2; $i++) { 
for ($j = 0; $j < 2; $j++) { 
$result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j]; 
} 
} 
return $result; 
} 
$matrix1 = array(
    array(1,2),
    array(3,4),
);
$matrix2 = array(
    array(5,6),
    array(7,8),
);
$sumMatrix = addMatrices($matrix1, $matrix2); 
echo "Matrix 1:\n"; 
for ($i = 0; $i < 2; $i++) { 
echo implode(" ", $matrix1[$i]) . "\n"; 
} 
echo "\nMatrix 2:\n"; 
for ($i = 0; $i < 2; $i++) { 
echo implode(" ", $matrix2[$i]) . "\n"; 
}
echo "\nSum of Matrix 1 and Matrix 2:\n"; 
for ($i = 0; $i < 2; $i++) { 
echo implode(" ", $sumMatrix[$i]) . "\n";   
} 
?> 
