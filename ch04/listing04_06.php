<?php
   # An array:
   $A=[100,200,300];
   print("The initial array:\n");
   print_r($A);
   # Accessing the values by a variable:
   foreach($A as $v):
      $v++;
   endforeach;
   print("The first try:\n");
   # Checks the result:
   print_r($A);
   # Accessing the values by a reference:
   foreach($A as &$v):
      $v++;
   endforeach;
   print("The second try:\n");
   # Checks the result:
   print_r($A);
?>