<?php
   // The first interface:
   interface Alpha{
      function show();
   }
   // The second interface:
   interface Bravo{
      function set($val);
   }
   // The class implements two interfaces:
   class MyClass implements Alpha,Bravo{
      private $num;
      function __construct($val){
         $this->set($val);
      }
      function set($val){
         $this->num=$val;
      }
      function show(){
         echo "\$num = ",$this->num,"\n";
      }
   }
   // Creates an object of the class:
   $obj=new MyClass(100);
   // Checks the result:
   $obj->show();
   $obj->set(200);
   $obj->show();
?>