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

    $sql = "SELECT * FROM myStudents";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "ID: " . $row["id"] . " First Name: " . $row["first_name"] . " Last Name: " . $row["last_name"] . " Email Address: " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>