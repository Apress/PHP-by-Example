<?php
   // The exception classes:
   class AnyNumberException extends Exception{
      // The constructor:
      function __construct(){
         parent::__construct("Any number is a root\n");
      }
   }
   class NoRootsException extends Exception{
      // The constructor:
      function __construct(){
         parent::__construct("There are no roots\n");
      }
   }
   echo "The equation Ax=B\n";
   echo "A = ";
   $A=(double)trim(fgets(STDIN));
   echo "B = ";
   $B=(double)trim(fgets(STDIN));
   try{
      if($A==0&$B==0) throw new AnyNumberException();
      if($A==0&$B!=0) throw new NoRootsException();
      $x=$B/$A;
      echo "The root is \$x = $x\n";
   }catch(AnyNumberException|NoRootsException $e){
      echo $e->getMessage();
   }
   echo "The problem is solved\n";
?>