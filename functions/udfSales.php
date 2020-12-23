<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container w-50 mx-auto my-3">
        <div class="row">
        <form action="" method="POST"> 
            <h1 class='display-6'>T-shirs</h1>
            <div class="form-group my-3">
                <label for="shirtPrice" class="">price:</label>
                <input type="text" name="shirtPrice" class="form-control my-2 d-block">
            </div>
            <div class="form-group my-3">
                <label for="shirtNumOfItems" class="">Number of items:</label>
                <input type="text" name="shirtNumOfItems" class="form-control my-2 d-block">               
            </div>
            <h1 class="display-6">Pants</h1>
            <div class="form-group my-3">
                <label for="pantsPrice">price:</label>
                <input type="text" name="pantsPrice" class="form-control my-2">
            </div>
            <div class="form-group my-3">
                <label for="pantsNumOfItems">Number of items:</label>
                <input type="text" name="pantsNumOfItems" class="form-control my-2">
            </div>
            <h1 class="diplay-6">Shoes</h1>
            <div class="form-group my-3">
                <label for="shoesPrice">price:</label>
                <input type="text" name="shoesPrice" class="form-control my-2">
            </div>
            <div class="form-group my-3">
                <label for="shoesNumOfItems">Number of items:</label>
                <input type="text" name="shoesNumOfItems" class="form-control my-2">
            </div>
            <input action="" type="submit" class="btn btn-success my-2 w-100">
        </form> 
        </div> 
    </div>
    <?php
        if(isset($_POST["submit"])){
            
        $shirtPrice = $_POST["shirtPrice"];
        $shirtNumOfItems = $_POST["shirtNumOfItems"];
        $pantsPrice = $_POST["pantsPrice"];
        $pantsNumOfItems = $_POST["pantsNumOfItems"];
        $shoesPrice = $_POST["shoesPrice"];
        $shoesNumOfItems = $_POST["shoesNumOfItems"];
        
        function product($x, $y){
            $product = $x * $y;
            return $product;
        }
        $result1 = product($shirtPrice, $shirtNumOfItems);
        $result2 = product($pantsPrice, $pantsNumOfItems);
        $result3 = product($shoesPrice, $shoesNumOfItems);
        $result4 = $result1 + $result2 + $result3;
       
        echo
        "<div class='container'>
            <table class='table'>
                <thead class='thead-dark'>
                    <tr>
                        <th>Item Name</th>
                        <th>Number of Items</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                    <tr>
                        <th scope='row'>Shirt</th>
                        <td> $shirtNumOfItems </td>
                        <td> $shirtPrice </td>
                        <td> $result1 </td>
                    </tr>
                    <tr>
                        <th scope='row'>Pants</th>
                        <td> $pantsNumOfItems  </td>
                        <td> $pantsPrice  </td>
                        <td> $result2  </td>
                    </tr>
                    <tr>
                        <th scope='row'>Shoes</th>
                        <td> $shoesNumOfItems </td>
                        <td>  $shoesPrice </td>
                        <td> $result3 </td>
                    </tr>
            </table>
            <div class='float-right'>
            Total Amont to be Paid $result4
            </div>
        </div>";
        }
    ?>
   
  </body>
</html>