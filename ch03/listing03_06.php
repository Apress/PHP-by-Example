<?php
   print("A number to check: ");
   // Reads a number:
   $number=(int)trim(fgets(STDIN));
   // The divisor for the number:
   $A=2;
   // Text with the check result:
   $result="It is a prime number";
   do{
      // Checks whether the numbers are divisible:
      if($number%$A==0){
         // Changes the message:
         $result="The number can be divided by $A";
         // The termination of the loop statement:
         break;
      }
      // The next divisor:
      $A++;
   }while($A<=sqrt($number));
   // The result:
   print($result);
?>