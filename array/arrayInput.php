<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        How many elements do you want to enter into the array?
        <br />
        <input type="text" name="length" id="">
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $arrLen = $_POST['length'];

        echo "<form method='post' action=''>";
            for($a = 0; $a < $arrLen; $a++){
                echo "Enter a number <input type='text' name='number[]'><br>";
            }

            echo "<input type='submit' name='save' value='Save'>";
        echo "</form>";
    }

    if(isset($_POST['save'])){
        $num = $_POST['number'];

        print_r($num);

        echo "<br>";
        
        foreach($num as $value){
            echo " " .$value. "";
        }
    }

?>