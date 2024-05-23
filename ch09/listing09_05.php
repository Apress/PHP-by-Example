<?php
   // The first trait:
   trait First{
      private $number;
      function show(){
         echo "\$number = ",$this->number,"\n";
         echo "\$symbol = ",$this->symbol,"\n";
      }
   }
   // The second trait:
   trait Second{
      function set($number,$symbol){
         $this->number=$number;
         $this->symbol=$symbol;
      }
   }
   // Including the traits in the class:
   class MyClass{
      use First,Second;
      private $symbol;
      function __construct($number,$symbol){
         $this->set($number,$symbol);
         $this->show();
      }
   }
   // Creates an object of the class:
   $obj=new MyClass(100,'A');
?>