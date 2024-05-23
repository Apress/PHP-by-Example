<?php
   // A generator function:
   function nums($n){
      // The sum:
      $sum=0;
      // Gets the values:
      for($k=0;$k<$n;$k++){
         $number=yield;
         $sum+=$number;
      }
      // The result of the generator:
      return $sum;
   }
   // How many numbers:
   $n=5;
   // A generator object:
   $nums=nums($n);
   for($k=1;$k<=$n;$k++){
      echo "[$k] The number: ";
      // Reads a number:
      $num=(double)trim(fgets(STDIN));
      // Passes the value to the object:
      $nums->send($num);
   }
   // The sum:
   echo "The sum: ",$nums->getReturn(),"\n";
?>