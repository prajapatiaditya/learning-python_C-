<?php 
$num = 29; 
$isPrime = true; 
if ($num < 2) { 
    $isPrime = false; 
} else { 
    for ($i = 2; $i <= sqrt($num); $i++) { 
        if ($num % $i == 0) { 
            $isPrime = false; 
            break; 
        } 
    } 
} 
if ($isPrime) { 
    echo "$num is a Prime Number"; 
} else { 
    echo "$num is not a Prime Number"; 
} 
?> 