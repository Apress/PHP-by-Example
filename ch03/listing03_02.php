<?php
   print("Enter a prime number from 1 to 5: ");
   // Reads a number:
   $number=(int)trim(fgets(STDIN));
   // Checks the value:
   if($number==2 || $number==3 || $number==5):
      print("You are correct!");
   else:
      print("You are wrong!");
   endif;
?>