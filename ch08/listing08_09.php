<?php
   // The first class:
   class Alpha{
      // The protected field:
      protected $number;
      // The constructor:
      function __construct($number){
         $this->number=$number;
         $this->show();
      }
      // The method for displaying the field:
      function show(){
         echo "Alpha: ",$this->number,"\n";
         $this->drawLine();
      }
      // The method for displaying a "line":
      function drawLine(){
         echo "----------------\n";
      }
   }
   // The second class:
   class Bravo extends Alpha{
      // The private field:
      protected $symbol;
      // The constructor:
      function __construct($number,$symbol){
         $this->symbol=$symbol;
         parent::__construct($number);
      }
      // Overrides the method:
      function show(){
         echo "Bravo: ",$this->number,"\n";
         echo "Bravo: ",$this->symbol,"\n";
         $this->drawLine();
      }
   }
   // The third class:
   class Charlie extends Bravo{
      // The private field:
      protected $text;
      // The constructor:
      function __construct($name,$symbol,$text){
         $this->text=$text;
         parent::__construct($name,$symbol);
      }
      // Overrides the method:
      function show(){
         echo "Charlie: ",$this->number,"\n";
         echo "Charlie: ",$this->symbol,"\n";
         echo "Charlie: ",$this->text,"\n";
         $this->drawLine();
      }
   }
   // Creates objects:
   $A=new Alpha(100);
   $B=new Bravo(200,'B');
   $C=new Charlie(300,'C',"Charlie");
?>