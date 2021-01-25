<?php
        $name = "Sasuke";
        $age = 29;
    
        echo "This Person is $age years old and has a name of $name <br>"; //procedural
    
        $name1 = "Hinata";
        $age1 = 22;
    
        echo "This Person is $age1 years old and has a name of $name1 <br>"; // What if I need to do this 1000X? 
        
        
        function introduce($name, $age){
            return "This Person is $age years old and has a name of $name <br>";
        }
    
        echo introduce($name, $age); // calling/execute a function
        echo introduce($name1, $age1);
        
        $name2 = "Minato";
        $age2 = 32;
        
        echo introduce($name2, $age2);//still procedural
?>