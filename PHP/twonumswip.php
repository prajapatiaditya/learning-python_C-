<?php 
// Swapping with a third variable 
echo "<h3>Swapping with a Third Variable</h3>"; 
$a = 5; 
$b = 10; 
echo "Before swapping: a = $a, b = $b\n"; 
// Using a third variable 
$temp = $a; 
$a = $b; 
$b = $temp; 
echo "After swapping: a = $a, b = $b\n"; 
// Swapping without a third variable 
echo "<h3>Swapping without a Third Variable</h3>"; 
$x = 15; 
$y = 20; 
echo "Before swapping: x = $x, y = $y\n"; 
// Without using a third variable 
$x = $x + $y; // x becomes the sum of x and y 
$y = $x - $y; // y becomes the original value of x 
$x = $x - $y; // x becomes the original value of y 
echo "After swapping: x = $x, y = $y\n"; 
?>