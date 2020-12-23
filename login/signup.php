
<?php
    include_once 'header.php';
?>
    <div class="jumbotron my-5">
        <h1 class="display-4">SIGNUP!</h1>
        <hr class="my-4">
        <form action="signup_inc.php" method="POST">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" required>

            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="uid" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pwd" class="form-control" required>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">SIGNUP</button>
        </form>
    </div>



<?php
    include_once 'footer.php';
?>