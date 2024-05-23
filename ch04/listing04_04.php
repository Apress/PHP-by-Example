<?php
   // An array:
   $A=[5=>100,"Two hundred",300];
   print("Array \$A:\n");
   print_r($A);
   // Iterates over the elements in the array:
   foreach($A as $k=>$v):
      print("\$A[$k] = $v");
      // Checks the element type:
      if(gettype($v)=="string"){
         print(" - delete\n");
         // Deletes the element from the array:
         unset($A[$k]);
      }else{
         print(" - remain\n");
      }
   endforeach;
   print("Array \$A:\n");
   print_r($A);
?>