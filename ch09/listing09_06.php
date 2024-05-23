<?php
   // The interface:
   interface MyInterface{
      function show();
   }
   // The classes that implement the interface:
   class Alpha implements MyInterface{
      function show(){
         echo "The class Alpha\n";
      }
   }
   class Bravo implements MyInterface{
      function show(){
         echo "The class Bravo\n";
      }
   }
   // The function with an argument of the interface type:
   function display(MyInterface $obj){
      // Calls the method from the object:
      $obj->show();
   }
   // Creates objects:
   $A=new Alpha();
   $B=new Bravo();
   // Passes the objects to the function as an argument:
   display($A);
   display($B);
?>