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

    $sql = "DELETE FROM myStudents WHERE id=22;";
    
    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
        
    mysqli_close($conn);
    
    
?>