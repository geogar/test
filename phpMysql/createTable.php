<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kredo_school";

    //Create connection

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn){
        die("Connection failed" . mysqli_connect_error());
    }

    // sql to create table

    $sql = "Create TABLE myStudents (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50)
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table myStudents created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>