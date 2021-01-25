<?php

// Class Properties - Properties are simply variables to hold object values. 
// These are also frequently referred to as attributes, class variables, or instance variables,

    class Student {
        public $first_name; // public is an access modifier. Will explain that later
        public $last_name;
        public $employed = "No"; //defualt value being set
        
    }

    new Student; // creating an instance but not storing it to any variable where we can reference it
    $student1 = new Student; // storing it to a variable where we can reference it
    $student1->first_name = "Kakashi"; // setting the value of a property
    $student1->last_name = "Hatake"; 

    echo $student1->first_name. "<br>";
    echo $student1->last_name. "<br>";
    echo $student1->employed. "<br>";
    // The way that we SET VALUES TO THESE ATTRIBUTES, and read them back, is by first creating an instance of the object, 
    // and then using arrow notation to reference the property. So here, I have the customer variable at the beginning, 
    // followed by the arrow notation, that's the minus sign and then the greater than sign, together they make an arrow, 
    // followed by the property name, in this case, first_name. Notice that the property name does not have a dollar sign in front of it. 
    // The dollar sign is only in front of the variable itself, $student1. 
    // The arrow notation takes the place of the dollar sign, we don't need to have it. 
    // It knows that we're talking about a property, and it knows that that property is a variable, 
    // so there's no reason to put the dollar sign in front of it again.

    // Properties is where object-oriented programming gets its power, because now, 
    // each of our instances that we create can be different and unique. 
    // We can have a thousand instances of the person object, and every single one of 
    // them can have a different first name and a last name, 
    // and therefore behave differently because of it

    $student2 = new Student; // 2 instances of the object
    $student2->first_name = "Itachi"; // setting the value of a property
    $student2->last_name = "Uchiha"; 
    $student2->employed = "Yes";

    echo $student2->first_name. "<br>";
    echo $student2->last_name. "<br>";
    echo $student2->employed. "<br>";
    
    // Alright, now I have two instances of the object, and they're different, 
    // they're different because the properties have different values in them. 
    // So, the same class, the same object, but a different instance of that object, 
    // with different properties,
?>