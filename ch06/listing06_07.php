<?php
   // A variable:
   $word="wind";
   // A multiline string:
   $text=<<<MYTEXT
   The mighty Dnieper roars and bellows,
   The $word in anger howls and raves,
   Down to the ground, it bends the willows,
   And mountain-high lifts up the waves.
   MYTEXT;
   echo $text;
?>