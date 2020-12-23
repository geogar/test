<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container mx-auto mt-5">
        <form action="" method="post" class="mx-auto">
            <div class="row">
                <div class="form-group col-md-12">
                    <h2 class="display-4 text-center">How many books to save?</h2>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mx-auto">
                    <input type="text" name="books_arrLength" id="inputBookLength" class="form-control form-control-lg text-center border border-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mx-auto">
                <input type="submit" name="submit" value="Submit" class="btn btn-success form-control text-uppercase">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $books_arrLength = $_POST['books_arrLength'];

        echo "<br>";
        echo "<div class='container mx-auto mt-5'>";
        echo "<form method='post' action=''>";
            for($a = 0; $a < $books_arrLength; $a++){
                echo "<div class='row'>
                            <div class='form-group col-md-6 mx-auto'>
                                <input type='text' name='bookName[]' id='inputBookName' class='form-control form-control-lg text-center' placeholder='Book Name'>
                            </div>
                    </div>";
                echo "<div class='row'>
                            <div class='form-group col-md-6 mx-auto'>
                                <input type='text' name='bookAuthor[]' id='inputBookAuthor' class='form-control form-control-lg text-center' placeholder='Book Author'>
                            </div>
                    </div>";
                echo "<br>";
            }
            // echo "<input type='hidden' name='books_arrLength' value='$books_arrLength'><br>";
            echo "<div class='row'>
                    <div class='col-md-3 mx-auto'>
                    <input type='submit' name='save' value='Save' class='btn btn-primary form-control text-uppercase'>
                </div>
                </div>";
        echo "</form>";
        echo "</div>";
    }

    if(isset($_POST['save'])){
        $book_Name = $_POST['bookName'];
        $book_Author = $_POST['bookAuthor'];

        $books_arrLength = count($book_Name);

        echo "<br>";
        echo "<br>";

        echo "<table class='table table-bordered table-hover w-50 mx-auto text-center'>";
        echo "
        <thead class ='thead-dark'>
        <tr>
            <th>Book Name</th>
            <th>Book Author</th>
        </tr>
        </thead>";
        echo "<tbody>";
        for($i = 0; $i < $books_arrLength; $i++){
            echo 
            "<tr>
                <td>".$book_Name[$i]."</td>
                <td>".$book_Author[$i]."</td>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
?>