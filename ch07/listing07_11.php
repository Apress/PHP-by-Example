<?php
   // The class description:
   class MyClass{
      // The public field:
      public $number;
      // The private field:
      private $code;
      // The method to access the private field:
      public function get(){
         return $this->code;
      }
      // The method to assign a value
      // to the private field:
      public function set($code){
         $this->code=$code;
      }
      // The special method is called when
      // assigning a value to the inaccessible field:
      public function __set($name,$arg){
         if(isset($this->$name)) $this->$name=$arg/2;
         else $this->$name=2*$arg;
      }
   }
   // Creates an object:
   $obj=new MyClass();
   // Assigns values to the fields:
   $obj->number=123;
   $obj->set(321);
   // Checks the values of the fields:
   echo "\$number: ",$obj->number,"\n";
   echo "\$code: ",$obj->get(),"\n";
   // Assigns a value to the private field:
   $obj->code=100;
   // Assigns a value to the non-existing field:
   $obj->value=100;
   // Checks the values of the fields:
   echo "\$code: ",$obj->get(),"\n";
   echo "\$value: ",$obj->value,"\n";
?>