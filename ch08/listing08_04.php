<?php
   // The parent class:
   class Alpha{
      // The field:
      public $number;
      // The constructor:
      function __construct($number){
         $this->number=$number;
         echo "The number: ",$this->number,"\n";
      }
      // The destructor:
      function __destruct(){
         echo "Deleted: the number ",$this->number,"\n";
      }
   }
   // The child class:
   class Bravo extends Alpha{
      // The field:
      public $symbol;
      // The constructor:
      function __construct($number,$symbol){
         echo "----------\n";
         parent::__construct($number);
         $this->symbol=$symbol;
         echo "The character: ",$this->symbol,"\n";
      }
      // The destructor:
      function __destruct(){
         echo "~~~~~~~~~~~~~~~~~~\n";
         parent::__destruct();
         echo "Deleted: the character ",$this->symbol,"\n";
      }
   }
   // Creates an object of the child class:
   $obj=new Bravo(200,'B');
?>