<?php
    include_once 'header.php';
?>

        <div class="jumbotron my-5">
            <?php
                if (isset($_GET['signup'])){
                    if ($_GET['signup'] == 'success'){

            ?>
                <div class="alert alert-success" role="alert">
                    SIGNUP SUCCESS!
                </div>
            <?php
            }
                }
            ?>
             <?php
                if (isset($_GET['login'])){
                    if ($_GET['login'] == 'fail'){

            ?>
            <div class="alert alert-danger" role="alert">
             Incorrect username/password
            </div>
            <?php
            }
                }
            ?>

            <h1 class="display-4">PLEASE LOGIN</h1>
            <hr class="my-4">
            <form action="login_inc.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="userName" class="form-control" required>

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
            </form>
            
        </div>


<?php
    include_once 'footer.php';
?>
