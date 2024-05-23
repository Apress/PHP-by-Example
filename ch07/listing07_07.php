<?php
   // A class:
   class MyClass{
      // The private field:
      private $code;
      // The method for reading the field value:
      function get(){
         return $this->code;
      }
      // The method for assigning a value to the field:
      function set($code){
         $this->code=$code;
      }
      // The private constructor:
      private function __construct($code){
         $this->set($code);
      }
      // The static method for creating objects:
      static function create($code){
         return new self($code);
      }
   }
   // Creates an object:
   $obj=MyClass::create(100);
   // Checks the field:
   echo "The field: ",$obj->get(),"\n";
   // Assigns a value to the field:
   $obj->set(200);
   // Checks the field:
   echo "The field: ",$obj->get(),"\n";
?>