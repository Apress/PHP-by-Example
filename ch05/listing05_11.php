<?php
   // The function is assigned to a variable:
   $A=function($n){
      for($s=0,$k=1;$k<=$n;$k++){
         $s+=$k*$k;
      }
      return $s;
   };
   // Variables:
   $n=4;
   $x=5;
   $y=10;
   // Calls the functions by a variable:
   echo "\$A($n) -> ",$A($n),"\n";
   // Assigning functions:
   $B=$A;
   // The variable gets a function as a value:
   $A=function($x,$y){
      return $x+$y;
   };
   // Calls the functions by variables:
   echo "\$B($n) -> ",$B($n),"\n";
   echo "\$A($x,$y) -> ",$A($x,$y),"\n";
?>