<?php
   class MyClass{
      public $code;
      function __construct($code){
         $this->code=$code;
      }
      function show(){
         echo "The field \$code: ",$this->code,"\n";
      }
   }
   $A=new MyClass(100);
   echo "The object \$A\n";
   $A->show();
   # Copies objects:
   $B=clone $A;
   echo "The object \$B\n";
   $B->show();
   $A->code=200;
   echo "The object \$A\n";
   $A->show();
   echo "The object \$B\n";
   $B->show();
?>