<?php
   function gen(){
      echo "A generator function is executed\n";
      yield 123;
   }
   $gen=gen();
   // Executes the initial code of the generator function:
   $gen->rewind();
   echo "A generator object is created\n";
   echo $gen->current(),"\n";
?>