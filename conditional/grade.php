<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grading</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter a number">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        
        $number = $_POST["number"];
        
        if($number > 0 && $number <=100){
            if($number <= 100 && $number >= 95){
                echo "Grade: A";
            }else if($number <= 94 && $number >= 90){
                echo "Grade: B";
            }else if($number <= 89 && $number >= 80){
                echo "Grade: C";
            }else if($number <= 80){
                echo "F";
            }
        }else{
            echo "Wrong Number";
        }
      
    }
?>