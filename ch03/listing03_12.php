<?php
   // Variables:
   $number=10;
   $k=1;
   // A label:
   start:
   print($k." ");
   // The new value:
   $k++;
   if($k<=$number){
      // Jumps to the label:
      goto start;
   }
?>