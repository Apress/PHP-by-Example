<?php
   # The parent class:
   class Alpha{
      # The public method:
      function hello(){
         print("The class Alpha\n");
      }
      # The method calls another method:
      function show(){
         $this->hello();
      }
      # The constructor:
      function __construct(){
         print("Creates an object:\n");
         # Calls the method:
         $this->hello();
         print("----------------\n");
      }
   }
   # The child class:
   class Bravo extends Alpha{
      # Overrides the method:
      function hello(){
         print("The class Bravo\n");
      }
   }
   # Creates an object of the child class:
   $obj=new Bravo;
   # Calls the inherited method:
   $obj->show();
?>