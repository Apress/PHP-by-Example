<?php
   // The exception classes:
   class AnyNumberException extends Exception{}
   class NoRootsException extends Exception{}
   echo "The equation Ax=B\n";
   // Reads the parameters:
   echo "A = ";
   $A=(double)trim(fgets(STDIN));
   echo "B = ";
   $B=(double)trim(fgets(STDIN));
   // The controlled code:
   try{
      // If the first parameter is zero:
      if($A==0){
         // If the second parameter is zero:
         if($B==0) throw new AnyNumberException();
         // If the second parameter is nonzero:
         else throw new NoRootsException();
      }
      // The root of the equation:
      $x=$B/$A;
      // Displays the result:
      echo "The root is \$x = $x\n";
   // Handles the exceptions:
   }catch(AnyNumberException $e){
      echo "Any number is a root\n";
   }catch(NoRootsException $e){
      echo "There are no roots\n";
   }
   echo "The problem is solved\n";
?>