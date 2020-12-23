<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = 5;
        $num2 = 18;

        //ADDITION
        $sum = $num1 + $num2;

        //SUBTRACTION
        $difference = $num1 - $num2;

        //MULTIPLICATION
        $product = $num1 * $num2;

        //DIVISION
        $quotient = $num1 / $num2;

        //MODULO
        $remainder = $num1 % $num2;

        //OUTPUT
        echo "Addition: ".$sum."<br>";
        echo "Subtraction: ".$difference."<br>";
        echo "Multiplication: ".$product."<br>";
        echo "Division: ".number_format($quotient,2)."<br>";
        echo "Modulo: ".$remainder."<br>";
    ?>
</body>
</html>