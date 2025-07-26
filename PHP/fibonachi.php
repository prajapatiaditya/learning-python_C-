<?php
function fibonacci($n)
{
    $num1=0;
    $num2=1;
    
    for($i= 0;$i<$n;$i++){
        echo $num1." ";
        $num1+=$num2;
        $num2=$num1-$num2;
    }
}
fibonacci(10);
?>