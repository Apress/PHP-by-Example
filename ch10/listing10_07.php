<?php
   // The exception class:
   class MyException extends Exception{}
   echo "The equation Ax=B\n";
   // Reads the parameters:
   echo "A = ";
   $A=(double)trim(fgets(STDIN));
   echo "B = ";
   $B=(double)trim(fgets(STDIN));
   // The outer block of the controlled code:
   try{
      // The inner block of the controlled code:
      try{
         // Throws an exception:
         if($A==0) throw new MyException();
         // The root of the equation:
         $x=$B/$A;
         // Displays the result:
         echo "The root is \$x = $x\n";
      // Handles the exceptions of the inner block:
      }catch(MyException $e){
         // Rethrows the thrown exception:
         if($B==0) throw $e;
         echo "There are no roots\n";
      }
   // Handles the exceptions of the outer block:
   }catch(MyException $e){
      echo "Any number is a root\n";
   }
   echo "The problem is solved\n";
?>