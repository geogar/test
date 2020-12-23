<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn){
        die("Connection failed" . mysqli_connect_error());
    }

    $sql = "SELECT * FROM myStudents";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: " . $row["id"] . " First Name: " . $row["first_name"] . " Last Name: " . $row["last_name"] . " Email Address: " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
?>