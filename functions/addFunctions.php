<?php
    //code reusability
    $num1 = 2;
    $num2 = 4;

    $sum = $num1 + $num2;
    echo $sum; 

    $num3 = 2;
    $num4 = 4;

    $sum2 = $num1 + $num2;
    echo $sum; 
    //What if I need to perform this task a thousand times?
    
    function add($x, $y){ // I can name it antything, but just like variable, name your function according to  what it does.
        $sum = $x + $y;   // a line of code that I want this function to execute
        echo $sum;        //
    }
    
    $num1 = 10;
    $num2 = 3;
    add($num1, $num2);	

?>