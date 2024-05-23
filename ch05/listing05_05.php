<?php
   // Passing arguments by reference:
   function swap(&$a,&$b){
      echo "Input: the arguments $a and $b\n";
      $x=$a;
      $a=$b;
      $b=$x;
      echo "Output: the arguments $a and $b\n";
   }
   $A=100;
   $B=200;
   echo "\$A = $A and \$B = $B\n";
   swap($A,$B);
   echo "\$A = $A and \$B = $B\n";
?>