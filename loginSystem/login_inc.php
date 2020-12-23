<?php

require_once 'dbConnect.php';

if (isset($_POST['submit'])){
    $uid = $_POST["userName"];
    $pwd = $_POST["password"];

    $sql = "SELECT * FROM users WHERE usersUid = '$uid'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $fName = $row['usersName'];
        $pwdhashed = $row['usersPwd'];
        
        $checkPwd = password_verify($pwd, $pwdhashed);

            if ($checkPwd === false){
                header("location: login.php?login=fail");
            } else {
                session_start();
                $_SESSION["userid"] = $row['usersId'];
                $_SESSION["userUid"] = $row['usersUid'];
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