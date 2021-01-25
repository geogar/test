<?php

require_once 'dbConnect.php';

if (isset($_POST['submit'])){
    $uid = $_POST["userName"];
    $pwd = $_POST["password"];

    $sql = "SELECT * FROM users WHERE usersUID = '$uid'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $fName = $row['usersName'];
        $pwdhashed = $row['usersPWD'];
        
        $checkPwd = password_verify($pwd, $pwdhashed);

            if ($checkPwd === false){
                header("location: login.php?login=fail");
            } else {
                session_start();
                $_SESSION["id"] = $row['id'];
                $_SESSION["usersUID"] = $row['usersUID'];
                $_SESSION["usersName"] = $row['usersName'];
                header("location: index.php");
            }

        } else {
        header("location: login.php?login=fail");
    }

    mysqli_close($conn);

} else {
    header("location: login.php");
}