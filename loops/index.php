<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Words</title>
</head>
<body>
    <form action="" method="post">
        <h2>What do you want to display?</h2>
        <br>
        <input type="text" name="displayWords" id="" placeholder=""><br>
        <h2>How many times do you want to display it?</h2><br>
        <input type="text" name="displayNumber" id="" placeholder="">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        function getInputs(){
            $display_words = $_POST["displayWords"];
            $display_number = $_POST["displayNumber"];

            displayInputs($display_words,$display_number);

        }

        function displayInputs($display_words,$display_number){
            for ($i = 1; $i <= $display_number; $i++) { 
                echo "$display_words<br>";
            }
        }

        getInputs();
    }
?>