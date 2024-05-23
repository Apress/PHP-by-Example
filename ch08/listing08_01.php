<?php
   // The parent class:
   class Alpha{
      // The field:
      public $number;
      // The method for assigning a value to the field:
      public function setNumber($number){
         $this->number=$number;
      }
   }
   // The child class:
   class Bravo extends Alpha{
      // The field:
      public $symbol;
      // The method for assigning a value to the field:
      public function setSymbol($symbol){
         $this->symbol=$symbol;
      }
      // The method for assigning values
      // to both fields:
      public function setAll($symbol,$number){
         // Calls the method described
         // in the parent class:
         $this->setSymbol($symbol);
         // Calls the inherited method:
         $this->setNumber($number);
      }
      // The method for displaying the fields:
      public function show(){
         // Calls the method described
         // in the parent class:
         echo "The field \$symbol: ",$this->symbol,"\n";
         // Calls the inherited method:
         echo "The field \$number: ",$this->number,"\n";
      }
   }
   // Creates an object:
   $obj=new Bravo;
   // Assigns values to the fields:
   $obj->setSymbol('A');
   $obj->setNumber(100);
   // Displays the fields:
   $obj->show();
   // Assigns values to the fields:
   $obj->setAll('B',200);
   // Displays the fields:
   $obj->show();
?>