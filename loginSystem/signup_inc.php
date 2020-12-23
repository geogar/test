<?php
require_once 'dbConnect.php';

if (isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES ('$name', '$email', '$uid', '$pwdHashed')";
    
    if (mysqli_query($conn, $sql)) {
        header("location: login.php?signup=success");
    } else {
        header("location: signup.php?signup=fail");
    }

    mysqli_close($conn);

} else {
    header("location: signup.php");
}