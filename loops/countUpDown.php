<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input From User</title>
</head>
<body>
    <form action="" method="post" style="margin:50px ;">
        <input type="text" name="startNumber" id="" placeholder="Enter a Starting Number">
        <input type="text" name="endNumber" id="" placeholder="Enter a Ending Number">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        
        $startNumber = $_POST["startNumber"];
        $endNumber = $_POST["endNumber"];

        if($startNumber < $endNumber){
            for ($a = $startNumber; $a <= $endNumber; $a++){
                echo " $a";
            } 
        }else if ($startNumber > $endNumber){
            for ($a = $startNumber; $a >= $endNumber; $a--){
                echo " $a";
            } 
        } else {
            echo "starting number can't be equal to the ending number! ";
        }



    }
?>