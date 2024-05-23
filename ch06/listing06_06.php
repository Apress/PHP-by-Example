<?php
   // The function with a static variable:
   function calc(){
      // The static variable:
      static $value=0;
      $value+=100;
      return $value;
   }
   // Calls the function within the loop statement:
   for($k=1;$k<=5;$k++){
      echo "[$k] calc() -> ",calc(),"\n";
   }
?>