<?php
   // A generator function:
   function colors(){
      yield "Red";
      yield "Yellow";
      yield "Green";
   }
   // Calls the generator function:
   $color=colors();
   // Using the generator function:
   for($k=1;$k<=3;$k++){
      // We get the current value:
      echo "[$k] ",$color->current(),"\n";
      // The shift to the next value:
      $color->next();
   }
?>