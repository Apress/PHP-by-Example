<?php
   print("A day of the week: ");
   // Reads a day of the week:
   $day=trim(fgets(STDIN));
   // Checks the day of the week:
   switch($day){
      case "Monday":
      case "Tuesday":
      case "Wednesday":
      case "Thursday":
      case "Friday":
         print("It is a working day");
         break;
      case "Saturday":
      case "Sunday":
         print("It is a holiday");
         break;
      default:
         print("There is no such day");
   }
?>