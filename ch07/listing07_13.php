<?php
   class MyClass{
      // The private field:
      private $name;
      function __construct(public $code,$name){
         // The field is assigned a value:
         $this->name=$name;
         echo "The object is created: $code and $name\n";
      }
      function show(){
         echo "The field \$code = ",$this->code,"\n";
         echo "The field \$name = ",$this->name,"\n";
      }
   }
   $obj=new MyClass(123,"MyClass");
   $obj->show();
?>