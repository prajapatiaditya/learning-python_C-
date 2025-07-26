<?php 
// Define a constant 
define("GREETING", "Hello, World!"); 
// Declare a global variable 
$globalVar = 10; 
function demonstrateVariables() { 
    // Local variable 
    $localVar = 20; 
    // Static variable 
    static $staticVar = 0; 
    // Accessing the global variable 
    global $globalVar; 
    // Incrementing values 
    $globalVar++; 
    $localVar++; 
    $staticVar++; 
    // Display variable values 
    echo "Constant GREETING: " . GREETING . "\n"; 
    echo "Global Variable (after increment): " . $globalVar . "\n"; 
    echo "Local Variable: " . $localVar . "\n"; 
    echo "Static Variable (after increment): " . $staticVar . "\n"; 
    echo "\n"; 
} 
// Call the function multiple times 
demonstrateVariables(); 
demonstrateVariables(); 
demonstrateVariables(); 
?>