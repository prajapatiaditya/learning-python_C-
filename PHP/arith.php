<?php 
// Arithmetic Operators 
echo "<h3>Arithmetic Operators</h3>"; 
$a = 10; 
$b = 5; 
echo "Addition (\$a + \$b): " . ($a + $b) . "\n"; // Addition 
echo "Subtraction (\$a - \$b): " . ($a - $b) . "\n"; // Subtraction 
echo "Multiplication (\$a * \$b): " . ($a * $b) . "\n"; // Multiplication 
echo "Division (\$a / \$b): " . ($a / $b) . "\n"; // Division 
echo "Modulus (\$a % \$b): " . ($a % $b) . "\n"; // Modulus 
// Comparison Operators 
echo "<h3>Comparison Operators</h3>"; 
$c = 10; 
echo "\$a == \$c: " . ($a == $c ? "true" : "false") . "\n"; // Equal 
echo "\$a != \$b: " . ($a != $b ? "true" : "false") . "\n"; // Not equal 
echo "\$a > \$b: " . ($a > $b ? "true" : "false") . "\n"; // Greater than 
echo "\$a < \$b: " . ($a < $b ? "true" : "false") . "\n"; // Less than 
echo "\$a >= \$c: " . ($a >= $c ? "true" : "false") . "\n"; // Greater than or equal 
echo "\$a <= \$b: " . ($a <= $b ? "true" : "false") . "\n"; // Less than or equal 
// Logical Operators 
echo "<h3>Logical Operators</h3>"; 
$x = true; 
$y = false; 
echo "\$x && \$y: " . ($x && $y ? "true" : "false") . "\n"; // AND 
echo "\$x || \$y: " . ($x || $y ? "true" : "false") . "\n"; // OR 
echo "!\$x: " . (!$x ? "true" : "false") . "\n"; // NOT 
echo "\$x XOR \$y: " . ($x xor $y ? "true" : "false") . "\n"; // XOR 
?> 