<?php
   // The initial variable:
   $A=100;
   // A copy of the variable:
   $B=$A;
   // A reference to the variable:
   $R=&$A;
   // Checks the values:
   echo "The initial values:\n";
   echo "\$A = $A\n";
   echo "\$B = $B\n";
   echo "\$R = $R\n";
   // Changes the value of the variable:
   $A=200;
   // Checks the values:
   echo "The new values:\n";
   echo "\$A = $A\n";
   echo "\$B = $B\n";
   echo "\$R = $R\n";
   // Deletes the variable:
   unset($A);
   // Checks the values:
   echo "After deleting the variable \$A:\n";
   echo "\$B = $B\n";
   echo "\$R = $R\n";
   // Changes the reference:
   $R=&$B;
   // Checks the values:
   echo "Now \$R refers to \$B:\n";
   echo "\$B = $B\n";
   echo "\$R = $R\n";
   // Changes the value through the reference:
   $R=300;
   // Checks the values:
   echo "After changing the value:\n";
   echo "\$B = $B\n";
   echo "\$R = $R\n";
?>