<?php

    $first_num = $_POST["num1"];
    $second_num = $_POST["num2"];

    $sum = $first_num + $second_num;
    $difference = $first_num - $second_num;
    $product = $first_num * $second_num;
    $quotient = $first_num / $second_num;
    $modulo = $first_num % $second_num;

    echo "First Number is: ".$first_num."<br>";
    echo "Second Number is: ".$second_num."<br>";
    echo "<br>";
    echo "<br>";
    echo "Sum is: ".$sum."<br>";
    echo "Difference is: ".$difference."<br>";
    echo "Product is: ".$product."<br>";
    echo "Quotient is: ".$quotient."<br>";
    echo "Modulo is: ".$modulo."<br>";

    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];

    // $sum = $first_num + $second_num;
    // $difference = $first_num - $second_num;
    // $product = $first_num * $second_num;
    // $quotient = $first_num / $second_num;
    // $modulo = $first_num % $second_num;

    // echo "First Number is: ".$first_num."<br>";
    // echo "Second Number is: ".$second_num."<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "Sum is: ".$sum."<br>";
    // echo "Difference is: ".$difference."<br>";
    // echo "Product is: ".$product."<br>";
    // echo "Quotient is: ".$quotient."<br>";
    // echo "Modulo is: ".$modulo."<br>";
?>