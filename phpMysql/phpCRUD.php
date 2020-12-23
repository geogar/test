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

    //Inserting data to database
    if(isset($_POST['save'])){
        //Retrieve input from user
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];


        $sql = "INSERT INTO myStudents (first_name, last_name, email) VALUES ('$fName', '$lName', '$email')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully!";
        } else {
            echo "Error creating new record: " . mysqli_error($conn);
        }
    
    }

    //Delete data
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE FROM myStudents WHERE id=$id;";
    
        if (mysqli_query($conn, $sql)){
            echo "Record deleted successfully!";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    //defualt value
    $fName = '';
    $lName = '';
    $email= '';
    $update = false;
    $id = 0;


    //Shows it to the input
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $sql ="SELECT * FROM myStudents WHERE id = $id;";
        $result = mysqli_query($conn, $sql);
        $update = true;

        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $fName = $row['first_name'];
            $lName = $row['last_name'];
            $email = $row['email'];
        }

    }

    //Actual updating of the data
    if(isset($_POST['update'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        
        $sql = "UPDATE myStudents SET first_name='$fName', last_name='$lName', email='$email' WHERE id=$id;";

        if (mysqli_query($conn, $sql)){
            echo "Record updated Successfully!";
        } else {
            echo "Error updating record";
        }

    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email Adress</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM myStudents";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0){
                    //output data of each row
                    while($row = mysqli_fetch_assoc($result)){

            ?>
                <tr>
                    <th scope="row"><?php echo $row["id"]; ?></th>
                    <td><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["last_name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td>
                        <a href="phpCRUD.php?edit=<?php echo $row["id"]; ?>" class="btn btn-info">EDIT</a>
                        <a href="phpCRUD.php?delete=<?php echo $row["id"]; ?>" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>


            <?php            
                    }
                } else {
                    echo "0 results";
                }
                
            ?>
                
            </tbody>
        </table>
        <div class="row justify-content-center">
                <form action="" method="POST">
                    First Name <input type="text" name="fName" class="form-control" value="<?php echo $fName; ?>">
                    Last Name <input type="text" name="lName" class="form-control" value="<?php echo $lName; ?>">
                    Email <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                    <?php
                        if($update == true){
                    ?>
                        <input type="hidden" name="id" value ="<?php echo $id; ?>">
                        <button type="submit" name="update" class="btn btn-secondary my-3">UPDATE</button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="save" class="btn btn-primary my-3">SAVE</button>

                    <?php
                        }
                    ?>
                    
                </form>
        </div>
    
    </div>
</body>
</html>

<?php
    mysqli_close($conn);
?>