<?php
   // A generator function:
   function colors(){
      $colors=["Red","Yellow","Green"];
      foreach($colors as $clr){
         yield $clr;
      }
   }
   // Using the generator function:
   foreach(colors() as $color){
      echo $color,"\n";
   }
?>