<?php
   // The parent class:
   class Alpha{
      // The private field:
      private $code;
      // The public method for assigning a value
      // to the field:
      public function set($code){
         $this->code=$code;
      }
      // The public method for getting
      // the value of the field:
      public function get(){
         return $this->code;
      }
   }
   // The child class:
   class Bravo extends Alpha{
      // The constructor:
      function __construct($code){
         // Calls the inherited methods:
         $this->set($code);
         echo "An object is created: ",$this->get(),"\n";
      }
   }
   // Creates an object of the child class:
   $obj=new Bravo(123);
   // Calls the inherited methods:
   $obj->set(321);
   echo "The field \$code: ",$obj->get(),"\n";
?>