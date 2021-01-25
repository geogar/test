<?php
    require_once "Person.php";

    class Employee extends Person{  // inheritance
        //havn't put anything but Employee can inherit or use 
        //the codes in Person class. From Variables to Functions
        //We can customize this code while inheriting the propertis of Person class
        public $employer;

        public function __construct($name, $age, $employer){ // we customized, edit or overide the code which is one of the type of Polymorphism
            $this->name = $name;
            $this->age = $age;
            $this->employer = $employer;
        }

        public function getEmployer(){
            return "My Employer is $this->employer";
        }
    }
?>