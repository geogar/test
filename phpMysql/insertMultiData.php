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

    $sql = "INSERT INTO myStudents (first_name, last_name, email) VALUES ('Joe', 'Johnson', 'joe.johnson@gmail.com');";
    $sql .= "INSERT INTO myStudents (first_name, last_name, email) VALUES ('Mary', 'Moe', 'mary@gmail.com');";
    $sql .= "INSERT INTO myStudents (first_name, last_name, email) VALUES ('Julie', 'Trump', 'julie@gmail.com');";

    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully!";
    } else {
        echo "Error creating records: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>