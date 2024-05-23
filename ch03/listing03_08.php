<?php
   // How many numbers to calculate:
   $n=15;
   // The first and second numbers:
   $a=$b=1;
   // Prints numbers:
   print("$a $b");
   // Calculates other numbers:
   for($k=3;$k<=$n;$k++):
      // The new pair of numbers:
      $b=$a+$b;
      $a=$b-$a;
      // Prints the new number:
      print(" ".$b);
   endfor;
?>