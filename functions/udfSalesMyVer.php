<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <div class="container w-50 mx-auto">
        <form action="" method="post" class="mt-3">
            <div class="row">
                <div class="form-group col-md-3">
                    <h2>T-shirts</h2>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="shirtPrice">Price:</label>
                    <input type="text" name="shirtPrice" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="shirtNumberOfItems">Number of Items:</label>
                    <input type="text" name="shirtNumberOfItems" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <h2>Pants</h2>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="pantsPrice">Price:</label>
                    <input type="text" name="pantsPrice" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="pantsNumberOfItems">Number of Items:</label>
                    <input type="text" name="pantsNumberOfItems" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <h2>Shoes</h2>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="shoesPrice">Price:</label>
                    <input type="text" name="shoesPrice" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="shoesNumberOfItems">Number of Items:</label>
                    <input type="text" name="shoesNumberOfItems" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="form-control bg-success text-white mt-3">Submit</button>
        </form>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        
        $shirtPrice = $_POST["shirtPrice"];
        $shirtNumOfItems = $_POST["shirtNumberOfItems"];
        $pantsPrice = $_POST["pantsPrice"];
        $pantsNumOfItems = $_POST["pantsNumberOfItems"];
        $shoesPrice = $_POST["shoesPrice"];
        $shoesNumOfItems = $_POST["shoesNumberOfItems"];

        function prod($itemPrice, $numberOfItems){
            $total = $itemPrice * $numberOfItems;
            return $total;
        }

        $shirtTotal = prod($shirtPrice, $shirtNumOfItems);
        $pantsTotal = prod($pantsPrice, $pantsNumOfItems);
        $shoesTotal = prod($shoesPrice, $shoesNumOfItems);
        $grandTotal = $shirtTotal + $pantsTotal + $shoesTotal;


        echo "
        <div class= 'container w-50 mx-auto my-5'>
            <table class = 'table table-striped table-hover'>
                <thead class = 'bg-dark text-white'>
                    <th>Item Name</th>
                    <th>Number of Items</th>
                    <th>Price</th>
                    <th>Total</th>
                </thead>     
                <tbody>
                    <tr>
                        <th>Shirt</th>
                        <td>$shirtNumOfItems</td>
                        <td>$shirtPrice</td>
                        <td>$shirtTotal</td>
                    </tr>
                    <tr>
                        <th>Pants</th>
                        <td>$pantsNumOfItems</td>
                        <td>$pantsPrice</td>
                        <td>$pantsTotal</td>
                    </tr>
                    <tr>
                        <th>Shoes</th>
                        <td>$shoesNumOfItems</td>
                        <td>$shoesPrice</td>
                        <td>$shoesTotal</td>
                    </tr>
                    <tr>
                        <td colspan='4'> <span class='text-right d-block'>Total Amount to be Paid <b>" .number_format($grandTotal,2). "</b></span></td>
                    </tr>
                </tbody>           
            </table>
        </div>
        ";

    }
     

?>