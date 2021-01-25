<?php
    class Student {
        public $firstName;
        public $lastName;
        public $country = 'None';

        protected $registrationId;
        private $tuition = 0.00;

        public function fullName(){
            return $this->firstName . " " . $this->lastName;
        }

        public function helloWorld(){ //So the whole world can say hello.
            return "Hello World";
        }
        
        protected function helloFamily(){ // Hello family is only something that my family can say. That means my, this class, and its sub classes.
            return "Hello World";
        }

        private function helloMe(){ //   private. Only I can call this hello here
            return "Hello World";
        }

    }

    //creating a subclass to access protected method and properties
    // class PartTimeStudent extends Student{
    //     public function hello_parent(){
    //         return $this->hello_family();
    //     }
    // }



    $student1 = new Student;
    $student1->firstName = "Hinata";
    $student1->lastName = "Hyuga";

    //echo $student1->registrationId;
    //echo $student1->tuition;
    echo $student1->fullName() ."<br>";

    echo $student1->helloWorld() ."<br>";
    //echo $student1->helloFamily() ."<br>";
    //echo $student1->helloMe() ."<br>";


?>