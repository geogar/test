<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto">
        <form action="" method="post">
            <div class="row mt-5">
                <div class="col-md-6">
                    <input type="text" name="firstNum" id="inputFirstNum" class="form-control text-center" placeholder="Enter First Number: ">
                </div>
                <div class="col-md-6">
                    <input type="text" name="secondNum" id="inputSecondNum" class="form-control text-center" placeholder="Enter Second Number: ">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" id="radioAdd" value="addition">
                        <label class="form-check-label" for="addition">Addition</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" id="radioSubtract" value="subtraction">
                        <label class="form-check-label" for="subtraction">Subtraction</label>
                    </div>
                </div>
                <div class="col-md-2 mr-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" id="radioMultiply" value="multiplication">
                        <label class="form-check-label" for="multiplication">Multiplication</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" id="radioDivide" value="division">
                        <label class="form-check-label" for="division">Division</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" id="radioModulo" value="modulo">
                        <label class="form-check-label" for="modulo">Modulo</label>
                    </div>
                </div>
            </div>

            <button type="submit" name="calculate" class="d-block w-25 mx-auto mt-3  text-white btn btn-success">Calculate</button>

        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['calculate'])){
        function getFormula(){
            $operator = $_POST['operator'];
            $first_num = $_POST['firstNum'];
            $second_num = $_POST['secondNum'];

            if($operator == "addition"){
                $total = $first_num + $second_num;
            }else if($operator == "subtraction"){
                $total = $first_num - $second_num;
            }else if($operator == "multiplication"){
                $total = $first_num * $second_num;
            }else if($operator == "division"){
                $total = $first_num / $second_num;
            }else if($operator == "modulo"){
                $total = $first_num % $second_num;
            }

            return $total;
        }

        function displayTotal($result){
            echo "<h2 class='display-4 text-center mt-5'>Result is: $result</h2>";
        }

        $result = getFormula();
        displayTotal($result);
    }
?>