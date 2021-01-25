<?php
    class FoodWarmer{
        public $brand;
        public $color;
        public $setTimer;
        public $price;

        public function turnOn(){
            $result = "The $this->brand Food Warmer is turned on <br>";
            return $result;
        }

        public function setTimer(){
            $result = "The timer for $this->brand FoodWarmer has been set into $this->setTimer <br>";
            return $result;
        }

        public function heatFood(){
            $result = "The food inside $this->brand FoodWarmer is already hot <br><br><br>";
            return $result;
        }

    }

    $foodWarmer1 = new FoodWarmer;
    $foodWarmer1->brand = "Panasonic";
    $foodWarmer1->color = "white";
    $foodWarmer1->setTimer = "10mins";
    $foodWarmer1->price = 10000;

    echo $foodWarmer1->turnOn();
    echo $foodWarmer1->setTimer();
    echo $foodWarmer1->heatFood();

    $foodWarmer2 = new FoodWarmer;
    $foodWarmer2->brand = "Hitachi";
    $foodWarmer2->color = "black";
    $foodWarmer2->setTimer = "5mins";
    $foodWarmer2->price = 10000;

    echo $foodWarmer2->turnOn();
    echo $foodWarmer2->setTimer();
    echo $foodWarmer2->heatFood();

?>
