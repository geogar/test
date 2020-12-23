
<?php
    include_once 'header.php';
?>

        <div class="jumbotron my-5">
        

            <h1 class="display-4">SIGNUP!</h1>
           
            <hr class="my-4">
            <form action="signup_inc.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" required id="" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="text" class="form-control" required id="" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" required id="" name="uid">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" required name="pwd">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">SIGNUP</button>
            </form>
        </div>
<?php
    include_once 'footer.php';
?>