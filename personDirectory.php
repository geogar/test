<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mx-auto w-50 ">
        <form action="processDirectory.php" method="post">
                <input type="text" name="firstname" class="form-control my-2 d-block" placeholder="Firstname">
                <input type="text" name="lastname" class="form-control my-2 d-block" placeholder="Lastname">        
                <select name="country" class="form-control  d-block">
                    <option>Choose Country</option>
                    <option>Japan</option>
                    <option>Philippines</option>     
                </select>             
                <input type="text" name="city" class="form-control my-2 d-block" placeholder="City">
                <input type="text" name="zipcode" class="form-control my-2 d-block" placeholder="Zip Code">
                <select name="gender" class="form-control  d-block" >
                    <option>Choose your Gender</option>
                    <option>Male</option>
                    <option>Female</option>     
                </select>                 
            <br>
            <input type="submit" name="submit" class="btn btn-primary">  
        </form>
    </div>
</body>
</html>