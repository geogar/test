<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Return Values</title>
  </head>
  <body>

    <?php

      function add($val1, $val2) {
        $sum = $val1 + $val2;
        return $sum;
      }
      
      $result1 = add(2, 3);
      $result2 = add(2, $result1);

      echo $result2;
      

    ?>
  
    
    

  </body>
</html>
