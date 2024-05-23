<?php
   // The factorial of a number:
   function factorial($n){
      if($n==0) return 1;
      else return $n*factorial($n-1);
   }
   // The sum of numbers:
   function sum($n){
      if($n==0) return 0;
      else return $n+sum($n-1);
   }
   // A number in a power:
   function power($x,$n){
      if($n==0) return 1;
      else return $x*power($x,$n-1);
   }
   // Variables:
   $x=2;
   $n=5;
   // Calls the functions:
   echo "$n! = ",factorial($n),"\n";
   echo "1+2+...+$n = ",sum($n),"\n";
   echo "The number $x in the power $n: ",power($x,$n),"\n";
?>