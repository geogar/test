<?php
    include_once 'header.php';
    require_once 'dbConnect.php';
?>



<div class="jumbotron my-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">USERNAME</th>
                <th scope="col">Email Address</th>
 
            </tr>
        </thead>
        <tbody>
            <?php 
                //displaying data from the database
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0){
                    //output data of each row
                    while($row = mysqli_fetch_assoc($result)){  
            ?>
                <tr>
                    <td scope='row'><?php echo $row['id']; ?></td>
                    <td><?php echo $row['usersName']; ?></td>
                    <td><?php echo $row['usersUID']; ?></td>
                    <td><?php echo $row['usersEmail']; ?></td>

                </tr>
                                
            <?php        
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </tbody>
    </table>



<?php
    include_once 'footer.php';
?>