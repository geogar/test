<?php
    class Product{
        private $name;

        public function setName($value) {
            $this->name = $value;
        }

        public function getName(){
            return $this->name;
        }
    }

    $product1 = new Product;
    //$product1->$name = "dog cage";
    $product1->setName("dog cage");
    echo $product1->getName();
?>