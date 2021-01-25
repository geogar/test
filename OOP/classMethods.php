<?php
    // When we're working with procedural or non-object-oriented programming, 
    // we just call them functions. When they're inside a class, they're correctly called methods. 
    // A method is just a function inside a class, and in fact, 
    // you define them inside the class just like regular functions.

    class Person{
        public $first_name;
        public $last_name;
        

        // Our method is defined using the same function keyword that we would normally use, 
        // followed by the name of a function, parentheses to surround any arguments that might be there, 
        // and then curly braces around the function definition. You can see that our function's also 
        // returning a value back, just like a normal function would.
        public function say_hello(){
            return "Hello World!";
        }
    }


    // In every way, our class method is just like a function. What's different is the way that we refer to it. 
    // When we had an instance of customer before, and we wanted to talk about its properties, we use the arrow notation to refer to those.
    $customer = new Person;

    $customer->first_name = "Anna";
    echo $customer->first_name; //this will output Anna

    echo $customer->say_hello(); //this will output "Hello World"
    /// =-=-=-=-=-=-=-=-=-=-=-=000000000000000-=-=-=-=-=-=-=-=-=-=-=-

    
?>



