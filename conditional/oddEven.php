<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mx-5">
        <form action="" method="post">
            <h1>Please enter a number</h1>
            <input class="form-control w-50 my-5" type="number" name="number" placeholder="Enter a number">
            <input class="btn btn-primary"type="submit" name="submit" value="Submit">
        </form>
        <?php 
        
        if(isset($_POST["submit"])){
            
            $x = $_POST["number"];
            
            if ($x % 2 == 0) {
                echo "<h4 class='my-5'>You entered an even number</h4>";
            
            } else {
                echo "<h4 class='my-5'>You entered an odd number</h4>";
            }
        }
    ?>
    </div>
    
</body>
</html>