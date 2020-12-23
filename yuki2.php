<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron bg-dark text-light">
            <div class="row">
                <div class="col">
                    <h3>Verhicle Parking Calculator</h3>
                    <form action="" method="post">
                        <div class="form-group">
                        <label>Plate Number</label>
                        <input type="text" class="form-conrol" required>                            
                        </div>
                        <div class="form-group">
                            <p>Vehicle Type</p>
                            <select name="" class="form-control mb-2"> required
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
                                    <input type="time" class="form-control mb-2" required>                            
                                </div>
                            </div>
                            <label>Time Out</label>
                            <div class="form-row">
                                <div class="col">
                                    <input type="time" class="form-control mb-2" required>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-danger mb-2">Reset</button>
                            <button type="submit" class="btn btn-primary md-2">Submit</button>
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
                            <p>Time out:</p>
                            <p>Total Hours:</p>
                            <p>Payment:</p>
                        </div>
                        <div class="col">
                            <P></P>
                            <P></P>
                            <P></P>
                            <P></P>
                            <P></P>
                            <P></P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>