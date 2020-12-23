<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If statement</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="age" placeholder="Enter your age">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){

        $age = $_POST["age"];

        if($age < 18){
            echo "You are a minor";
        }else{
            echo "You are an adult.";
        }

    }


?>