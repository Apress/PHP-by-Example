<?php
   print("Enter a number: ");
   # Reads a value and converts it
   # to the integer format:
   $number=(int)trim(fgets(STDIN));
   # The ternary operator is used:
   $word=($number%2==0)?"even":"odd";
   # The result of the test for even/odd:
   print("This is an $word number");
?>