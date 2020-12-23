
<?php
    include_once 'header.php';
?>

        <div class="jumbotron my-5">
            <!-- Alert when password is incorrect -->
            <?php 
                if(isset($_GET['login'])){ 
                    if($_GET['login'] == 'fail'){
            ?>
                <div class="alert alert-danger" role="alert">
                    Incorrect username/password!
                </div>
            <?php 
                    }
                } 
            ?>
            
            <!-- Alert when signup is success -->
            <?php 
                if(isset($_GET['signup'])){ 
                    if($_GET['signup'] == 'success'){
            ?>
                <div class="alert alert-success" role="alert">
                    SIGNUP SUCCESS!
                </div>
            <?php 
                    }
                } 
            ?>
            

            <h1 class="display-4">Please Login</h1>
           
            <hr class="my-4">
            <form action="login_inc.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" required id="" name="userName">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" required name="password">
                </div>
                <a href="signup.php" class="my-2 float-right" for="exampleCheck1">Sign up</a>
                <button type="submit" name="submit" class="btn btn-info">LOGIN</button>
            </form>
        </div>
<?php
    include_once 'footer.php';
?>