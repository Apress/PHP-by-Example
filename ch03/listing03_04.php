<?php
   // The upper limit of the sum:
   $n=100;
   // The initial value of the sum:
   $s=0;
   // A term for the sum:
   $k=1;
   // Calculates the sum:
   while($k<=$n){
      $s+=$k; // Adds the term
      $k++;   // The new term
   }
   // The result of the calculation:
   print("1+2+...+$n=$s");
?>