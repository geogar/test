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

     $sql = "SELECT * FROM mystudents INNER JOIN teachers ON myStudents.teacher_id = teachers.id WHERE teachers.id = 2;";

     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0){
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){
            echo "Teacher's Name: " . $row["teacher_fname"] . " " . $row["teacher_lname"] . " Student's Name: " . $row["first_name"] . " " . $row["last_name"] .  "<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);

?>