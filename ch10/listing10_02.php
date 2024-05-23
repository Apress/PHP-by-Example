<?php
   echo "Enter a number: ";
   // Reads a number:
   $number=(int)trim(fgets(STDIN));
   // The controlled code:
   try{
      // If the number is positive:
      if($number>0){
         // Throws an exception:
         throw new Exception("A positive number");
      }
      // If the number is negative:
      if($number<0){
         // Throws an exception:
         throw new Exception("A negative number");
      }
      // The statement is executed
      // if no exception is thrown:
      echo "The zero";
   }catch(Exception $e){ // Handling the exception
      // Displays a message:
      echo $e->getMessage();
   }
?>