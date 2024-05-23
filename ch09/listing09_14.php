<?php
   // Creates an object based on the anonymous class:
   $obj=new class{
      // The private field:
      private $number;
      // The method for getting the value of the field:
      public function get(){
         return $this->number;
      }
      // The method for assigning a value to the field:
      public function set($number){
         $this->number=$number;
      }
   };
   // Operations with the objects:
   $obj->set(100);
   echo "\$number = ",$obj->get(),"\n";
?>