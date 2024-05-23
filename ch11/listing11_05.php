<?php
   // A generator function:
   function randoms($n){
      // The initial value for the sum:
      $sum=0;
      for($k=1;$k<=$n;$k++){
         // A random number from 1 to 9:
         $number=rand(1,9);
         yield $number;
         // Adds a new term for the sum:
         $sum+=$number;
      }
      // The result is the sum of numbers:
      return $sum;
   }
   // A generator object:
   $rnd=randoms(5);
   // Generates random numbers:
   foreach($rnd as $r){
      echo $r," ";
   }
   // Using the generator result:
   echo "\nThe sum: ",$rnd->getReturn(),"\n";
?>