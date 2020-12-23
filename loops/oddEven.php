<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $count = 1;
        while ($count <= 5){
            if ($count % 2 == 0){
                echo "$count is an EVEN number <br/>";
            } else {
                echo "$count is an ODD number <br/>";
            }
            $count++;
        } 

    ?>
</body>
</html>