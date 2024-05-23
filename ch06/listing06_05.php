<?php
   // The function:
   function show(){
      // The global variable:
      global $A;
      // Displays the value of the variable:
      echo "[1] In the function: \$A = ",$A,"\n";
      // The new value:
      $A=200;
      echo "[2] In the function: \$A = ",$A,"\n";
   }
   // The global variable:
   $A=100;
   // Calls the function:
   show();
   // Checks the value of the variable:
   echo "The variable \$A = ",$A,"\n";
?>