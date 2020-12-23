<?php
    if(isset($_POST["submit"])){        
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        function add($num1, $num2){
            $sum = $num1 + $num2;
            return $sum;
        }
        function sub($num1, $num2){
            $difference = $num1 - $num2;
            return $difference;
        }
        function product($num1, $num2){
            $product = $num1 * $num2;
            return $product;
        }
        function quotient($num1, $num2){
            $quotient = $num1 / $num2;
            return $quotient;
        }
        function modulo($num1, $num2){
            $modulo = $num1 %  $num2;
            return $modulo;
        }
        

        $sum = add($num1, $num2);
        $difference = sub($num1, $num2);
        $product = product($num1, $num2);
        $quotient = quotient($num1, $num2);
        $modulo = modulo($num1, $num2);
    }
            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
    <?php echo
        "
        <p>First Number is: $num1; </p>
        <p>Second Number is: $num2;  </p>
        <p>Sum is:  $sum; </p>
        <p>Difference is: $difference; </p>
        <p>Product is: $product;  </p>
        <p>Quotient is: $quotient; </p>
        <p>Modulo is:  $modulo;  </p>
        ";
        ?>
        
        <!-- another way around -->
        <p>First Number is: <?php echo $num1; ?> </p>
        <p>Second Number is: <?php echo $num2; ?> </p>
        <p>Sum is: <?php echo $sum; ?> </p>
        <p>Difference is: <?php echo $difference; ?> </p>
        <p>Product is: <?php echo $product; ?> </p>
        <p>Quotient is: <?php echo $quotient; ?> </p>
        <p>Modulo is: <?php echo $modulo; ?> </p>

        


    </div>
</body>
</html>