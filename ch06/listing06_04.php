<?php
   // The function with a local variable:
   function show(){
       // The local variable:
       $A=100;
       echo "The local variable \$A = ",$A,"\n";
   }
   // The global variable:
   $A=200;
   // Calls the function:
   show();
   // Checks the value of the variable:
   echo "The global variable \$A = ",$A,"\n";
?>