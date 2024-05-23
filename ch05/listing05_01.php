<?php
   // The function declaration:
   function show($argument){
      echo "Calling the function show()\n";
      echo "The argument type: ",gettype($argument),"\n";
      echo "The argument value: $argument\n\n";
   }
   // Calls the function:
   show(123);
   SHOW("We learn PHP");
   Show(2.5);
?>