<?php
   // The parent class:
   class Alpha{
      // The protected field:
      protected $code;
   }
   // The child class:
   class Bravo extends Alpha{
      // The method for assigning a value to the field:
      public function set($code){
         $this->code=$code;
      }
      // The method for displaying the field:
      public function show(){
         echo "The field \$code = ",$this->code,"\n";
      }
   }
   // Creates an object of the child class:
   $obj=new Bravo;
   // Assigns a value to the field:
   $obj->set(123);
   // Displays the field:
   $obj->show();
?>