<?php
        
    

    if(isset($_POST['submit']){

        $userInputUsername = $_POST['userName'];
        $userInputpassword = $_POST['password'];;

        $sql = "SELECT * FROM accounts WHERE username = '$userInputUsername' AND password = '$userInputpassword'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];
            $password = $row['password'];
        } else {
            echo "USERNAME Doesn't exist";
        }
        
    })
    


    session_start();
    
    

   
    
    mysqli_close($conn);
    
    


?>