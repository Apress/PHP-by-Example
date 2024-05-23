<?php
   // A generator function:
   function gen(){
      echo "A generator function is executed\n";
      yield 123;
   }
   // A generator object:
   $gen=gen();
   echo "A generator object is created\n";
   // Gets the value from the generator:
   echo $gen->current(),"\n";
?>