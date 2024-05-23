<?php
   // The parent class:
   class Base{
      public $number;
   }
   // The first interface:
   interface Alpha{
      function show();
   }
   // The second interface:
   interface Bravo{
      function set($number);
   }
   // The child class inherits the parent class
   // and implements two interfaces:
   class MyClass extends Base implements Alpha,Bravo{
      function set($number){
         $this->number=$number;
      }
      function show(){
         echo "\$number = ",$this->number,"\n";
      }
   }
   // Creates an object:
   $obj=new MyClass;
   // Checks the result:
   $obj->set(123);
   $obj->show();
?>