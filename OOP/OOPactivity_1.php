<?php

class Motorcycle {
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight_kg; 
    
    public function name(){
        echo "Brand: " . $this->brand . " <br />Model: " . $this->model . " <br />Year: " . $this->year . "<br /> Description: " .$this->description . "<br>";
    }

    public function weight_lbs(){
        $weightInPounds = $this->weight_kg * 2.2046226218;
        return $weightInPounds;
    }

    public function set_weight_lbs($value){
        $this->weight_kg = $value / 2.2046226218;
    }
}

    $motorcycle1 = new Motorcycle; 
    $motorcycle1->brand = "Honda";
    $motorcycle1->model = "CBR 1000RR";
    $motorcycle1->year = "2020";
    $motorcycle1->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, at?";
    $motorcycle1->weight_kg = "150";

    $motorcycle1->name();
    $motorcycle1WeightInLbs = $motorcycle1->weight_lbs();
    echo "Motorcycle's wieght in pounds is $motorcycle1WeightInLbs <br>";

    $motorcycle1->set_weight_lbs(10);
    echo "Wieght of the motorcycle in KILOGRAMS: $motorcycle1->weight_kg <br>";
    echo "Wieght of the motorcycle in POUNDS: " . $motorcycle1->weight_lbs() ."<br>";
?>

