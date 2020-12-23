<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fruits = ["Apple", "Banana", "Orange"]; //how we make an array

        print_r($fruits); // display the keys and values

        echo "<br>";

        $fruits[] = "Mango"; //add new element
        print_r($fruits);

        echo "<br>";
        $fruits[0] = "Watermelon";// replace an element
        print_r($fruits);

        echo "<br>";
        echo "the second value inside the array is:" . $fruits[1]; // diplay a spicific value of an index

        echo "<p> There are ". count($fruits) . " elements inside this array"; // display the size of an array

    // for loop
    echo "<br>";
    $arrLength = count($fruits);

    for ($a = 0; $a < $arrLength; $a++){
        echo " " . $fruits[$a]. "<br>";
    }

    // for each
    echo "<br>";
    
    foreach($fruits as $value){
        echo " " .$value."<br>";
    }

    //Associative array

    $market = ["fruit" => "Banana", "vegetable" => "Lettuce", "Meat" => "pork"];

    echo "<pre>";
    print_r($market);
    echo "</pre>";

    echo $market["vegetable"];
    echo "<br>";


    foreach($market as $key => $value){
        echo "Key = " .$key. ", value = " .$value. "<br>";
    }




    ?>
</body>
</html>