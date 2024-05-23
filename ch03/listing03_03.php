<?php
   print("Solving the equation Ax=B\n");
   // Reads the parameters:
   print("A = ");
   $A=(double)trim(fgets(STDIN));
   print("B = ");
   $B=(double)trim(fgets(STDIN));
   // Calculates the solution:
   if($A!=0){
      $x=$B/$A;
      print("x = ".$x);
   }
   elseif($B==0){
      print("The solution is any number");
   }
   else{
      print("There are no solutions");
   }
?>