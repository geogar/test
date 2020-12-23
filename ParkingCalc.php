<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Parking Calculator</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<!-- PHP CODE -->
<?php   
if(isset($_POST["submit"])){
    
    $timeIn = $_POST['timeIn'];
    $timeOut = $_POST['timeOut'];
    $vehicleType = $_POST["vehicleType"];
    

    if($timeOut > $timeIn){
        
        
        $timeDiff = $timeOut - $timeIn;
        
        
        
        switch ($vehicleType) {
            //car
            case "Car":
            if($timeDiff <= 3){
                $payment = $timeDiff * 30;
            } else {
                $minimum_hrs = $timeDiff - 3;
                $succeeding_fee = $minimum_hrs * 5;
                $payment = 90 + $succeeding_fee;
            }
            break;
            //motorcycle
            case "Motorcycle":
            if($timeDiff <= 3){
                $payment = $timeDiff * 20;
            } else {
                $minimum_hrs = $timeDiff - 3;
                $succeeding_fee = $minimum_hrs * 5;
                $payment = 60 + $succeeding_fee;
            }
            break;
            //bicycle
            case "Bicycle":
            $payment = 20;
            break;
            //truck
            case "Truck":
                if($timeDiff <= 3){
                    $payment = $timeDiff * 40;
                } else {
                    $minimum_hrs = $timeDiff - 3;
                    $succeeding_fee = $minimum_hrs * 10;
                    $payment = 120 + $succeeding_fee;
                }
            break;
        }


    } else {
        $alert = "Time In can't be later than Time Out!!";
    }
}
?>
<!-- END OF PHP CODE -->
<body>
    <div class="container">
        <div class="jumbotron" style="background-color: #575D61; color: #fff;">
            <h1 class="text-danger"><?php if(isset($alert)) {echo $alert;} ?></h1>
            
            <div class="row">
                <div class="col">
                    <h3>Vehicle Parking Calculator</h3>
                    <form action="" method="post">
                        <div class="form-group">
                    
                        <label>Plate Number</label>
                        
                        <input name="plateNo" class="form-control" required> 
                        </div>
                        <div class="form-group">
                            <p>Vehicle Type</p>
                            <select class="form-control" name="vehicleType">
                            <option>Car</option>
                            <option>Motorcycle</option>
                            <option>Bicycle</option>
                            <option>Truck</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Time In</label>
                            <div class="form-row">
                                <div class="col">
                                    <input name="timeIn" class="form-control mb-2" type="number" required>
                                    
                                </div>
                                
                            </div>
                            <label>Time Out</label>
                            <div class="form-row">
                                <div class="col">
                                    <input name="timeOut" class="form-control mb-2" type="numer" required>
                                    
                                </div>
                                   
                            </div>
                            <button type="reset" class="btn btn-primary mb-2" style="background-color:#E15465; border-color: #E15465;">Reset</button>
                            <button type="submit" name="submit" class="btn btn-primary mb-2" id="calculate" style="background-color:#4DB1C3; border-color: #4DB1C3;">Calculate</button>
                             
                        </div>
                        
                        
                    </form>
                </div>
                
                <div class="col">
                    <h3>Bills Payment</h3>
                        <div class="row">
                            <div class="col">
                                <p>Plate No:</p>
                                <p>Vehicle Type:</p>
                                <p>Time In:</p>
                                <p>Time Out:</p>
                                <p>Total Hours:</p>
                                <p>Payment:</p>
                            </div>
                            <div class="col">
                                <p id="plate_res"><?php if(isset($_POST["plateNo"])){echo $_POST["plateNo"];}else{echo "---";} ?></p>
                                <p id="type_res">
                                    <?php 
                                        if(isset($_POST["vehicleType"])){
                                            echo $_POST["vehicleType"];
                                            }else{
                                                echo "---";
                                            }  
                                    ?>
                                </p>
                                <p id="time_in_res"><?php if(isset($_POST["timeIn"])){echo $_POST["timeIn"];}else{echo ":";}  ?></p>
                                <p id="time_out_res"><?php if(isset($_POST["timeOut"])){echo $_POST["timeOut"];}else{echo ":";}  ?></p>
                                <p id="total_hrs"><?php if(isset($timeDiff)){echo $timeDiff;}else{echo ":";}  ?></p>
                                <p id="payment">¥ <?php if(isset($payment)){echo $payment;}else{echo "0.00";}  ?></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>