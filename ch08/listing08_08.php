<?php
   // The class with a field:
   class MyClass{
      public $calc;
   }
   // A variable:
   $number=9;
   // Creates an object:
   $obj=new MyClass;
   // A function is assigned to the field:
   $obj->calc=function($n){
      return $n*$n;
   };
   // Checks the result:
   echo "Argument $number: ",($obj->calc)($number),"\n";
   // A function is assigned to the field:
   $obj->calc=function($n){
      return sqrt($n);
   };
   // Checks the result:
   echo "Argument $number: ",($obj->calc)($number),"\n";
?>