<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            background-color:#1E1E1E;
        }
    </style>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MY COMPANY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">ABOUT US</a>
                </li>
                
                <?php
                    if(isset($_SESSION['userUid'])){
                        $name = $_SESSION['usersName'];
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo "Welcome $name"; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">LOG OUT</a>
                </li>
                <?php  
                    } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="signUp.php">SIGN UP</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
                <?php
                    }
                ?>
              
                </ul>
                
            </div>
        </div>
    </nav>
    
    <div class="container">