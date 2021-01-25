<?php
    // require_once "Person.php"

    // $person1 = new Person("Hinata" , 23);
    // $peroson1->introduce();

    //With inheritance
    require_once "Employee.php";

    $person1 = new Employee("George" , 23, "Kredo");
    echo $person1->introduce(); //Abstraction / Encapsulation or grouping
    echo $person1->getEmployer(); //show this after the method has been introduced in employee.php


?>