<?php
   # The description of a class:
   class MyClass{
      public $code;
      function __construct($code){
         $this->code=$code;
      }
      function show(){
         echo "The field \$code: ",$this->code,"\n";
      }
   }
   # Creates an object:
   $A=new MyClass(100);
   echo "The object \$A\n";
   $A->show();
   # Assigns objects:
   $B=$A;
   echo "The object \$B\n";
   $B->show();
   # Changes the value of the field of the initial object:
   $A->code=200;
   echo "The object \$A\n";
   $A->show();
   echo "The object \$B\n";
   $B->show();
?>