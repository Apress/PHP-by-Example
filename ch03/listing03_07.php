<?php
   // The count of terms:
   $n=100;
   // Calculates the sum of odd numbers:
   for($s=0,$k=1;$k<=$n;$k++){
      $s+=2*$k-1;
   }
   // Prints the result:
   print("1+3+...+".(2*$n-1)."=$s");
?>