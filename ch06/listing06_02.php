<?php
   // The variable with an integer value:
   $number=123;
   // The value of the variable is a string with a name
   // of another variable:
   $reference="number";
   echo "\$\$reference = ",$$reference,"\n";
   // The new value of the variable $number:
   $$reference=321;
   echo "\$number = ",$number,"\n";
   // The variable with a string value:
   $A="Alpha";
   // Assigns a value to the variable $Alpha:
   $$A=100;
   echo "\$Alpha = ",$Alpha,"\n";
   // The new value of the variable $Alpha:
   $Alpha=200;
   echo "\$\$A = ",$$A,"\n";
   // The new value of the variable $A:
   $A='Bravo';
   // Assigns a value to the variable $Bravo:
   $$A=300;
   echo "\$Alpha = ",$Alpha,"\n";
   echo "\$Bravo = ",$Bravo,"\n";
?>