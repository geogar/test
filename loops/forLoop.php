<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // for ($count = 0; $count <= 20; $count++){
        //     echo "$count, ";
        // }
    ?>
    <br>
    <?php
        for($count = 20; $count > 0; $count--){
            if (($count%2) == 0){
                echo "$count is even.<br>";
            } else {
                echo "$count is odd.<br>";
            }
        }
    ?>
</body>
</html>