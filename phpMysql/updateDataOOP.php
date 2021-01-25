<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }

    $sql = "UPDATE myStudents SET email='johnsmith@gmail.com' WHERE id=21;";
    
    if ($conn->query($sql)){
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
        
    $conn->close();


?>