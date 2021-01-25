<?php
    class Person{
        public $first_name;
        public $last_name;
        
        public function full_name(){
            //return $first_name . " " .$last_name;
            //Outside the class: $variable-> //Inside the class: $this->
            return $this->first_name . " " .$this->last_name;
        }
    }

    $person_1 = new Person;
    $person_1->first_name = "Hinata";
    $person_1->last_name = "Hyuga";
    echo $person_1->full_name(); // undefined variable 
    //What's going on is that "first_name" and "last_name" are just simple variable names in PHP, 
    //and PHP does not know that it is looking for an object and meet properties of the object. 
    //It's treating them like simple variables. What we need is some way for the "full_name" 
    //method to refer to this current instance and then be able to get a property from there, 
    //the same way we did with "$person_1" when we were outside the class.
?>