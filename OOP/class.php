<?php
    //A class is a collection of variables (properties) and functions (methods).
    //It is a template that is used to define objects.
    //A class provides the definition of an object. It describes it and it SERVES 
    //AS A TEMPLATE for creating new objects. Every class definition begins with the keyword 
    //class followed by the class name. Then you have curly braces that surround the class definition. 
    
    
    class Person {
        
    }
    
    $person1 = new Person; // instance of a class

    $person2 = new Person; // 2 instances of the Person class 

    //We can have as many of these instances as we want. Each one will be a unique object, 
    //but all of them will share the same class definition.
?>

<!-- 
Bootstrap has a starter template we can work on.
You pull off a new bootstrap template every time you create a new page. 
Each page is different, but they all came from the same template.
The structure and the blank spaces are going to be the same. We create new instances from our class definition, 
and then we fill out each one with different information so that they're unique.
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  </body>
</html>