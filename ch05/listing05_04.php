<?php
   // A function with two arguments:
   function swap($a,$b){
      echo "Input: the arguments $a and $b\n";
      $x=$a;
      $a=$b;
      $b=$x;
      echo "Output: the arguments $a and $b\n";
   }
   // Variables:
   $A=100;
   $B=200;
   // The values of the variables:
   echo "\$A = $A and \$B = $B\n";
   // Calls the function:
   swap($A,$B);
   // Checks the values of the variables:
   echo "\$A = $A and \$B = $B\n";
?>