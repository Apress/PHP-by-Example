<?php
   # The class with the constructor and the destructor:
   class MyClass{
      # The field:
      public $code;
      # The constructor:
      function __construct($code=123){
         $this->code=$code;
         echo "The object is created: ",$this->code,"\n";
      }
      # The destructor:
      function __destruct(){
         echo "The object is deleted: ",$this->code,"\n";
      }
   }
   # Creates objects:
   $A=new MyClass();
   $B=new MyClass(321);
?>