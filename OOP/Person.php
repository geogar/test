<?php
    // class Person{
    //     public $name;
    //     public $age;

    //     public function introduce(){
    //         return "This Person is $this->age years old and has a name of $this->name <br>";
    //     }
    // }

    // $Person1 = new Person; //instance of a class // by instantiating a class Person, you can now access the variables and functions insice
    // $Person1->name = "Luffy";
    // $Person1->age = 29;
    // echo $Person1->introduce();

    class Person{
        public $name;
        public $age;

        public function __construct($name, $age){ // I can pass in arguments to the instance itself // always public
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(){
            return "This Person is $this->age years old and has a name of $this->name <br>";
        }
    }

    // $Person1 = new Person("Luffy", 25); //instance of a class // by instantiating a class Person, you can now access the variables and functions insice
    // echo $Person1->introduce();
    // $Person1 = new Person("Gaara", 22); 
    // echo $Person1->introduce();

?>