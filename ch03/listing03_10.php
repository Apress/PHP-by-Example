<?php
   print("Enter a number: ");
   # Reads the number:
   $number=(int)trim(fgets(STDIN));
   # Checks the numbers for divisibility:
   switch($number%4):
      case 0:
         print("The number can be divided by 4");
         break;
      case 2:
         print("The number can be divided by 2");
         break;
      default:
         print("The number can not be divided by 2");
   endswitch;
?>