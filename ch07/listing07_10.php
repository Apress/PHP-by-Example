<?php
   // The class:
   class MyClass{
      // The public field:
      public $number=321;
      // The private field:
      private $code=100;
      // The method to access the private field:
      public function get(){
         return $this->code;
      }
      // The method handles the access
      // to the non-existing field:
      public function __get($name){
         if(isset($this->$name)) return $this->$name/2;
         return 123;
      }
   }
   // Creates objects:
   $obj=new MyClass();
   // The reference to the public field:
   echo "\$number: ",$obj->number,"\n";
   // The reference to the private field:
   echo "\$code: ",$obj->code,"\n";
   echo "get(): ",$obj->get(),"\n";
   // The reference to the non-existing field:
   echo "\$value: ",$obj->value,"\n";
?>