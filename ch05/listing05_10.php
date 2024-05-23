<?php
   // The string variables:
   $first='$A=2*3+4;';
   $second="\$B=2*\$A-5;";
   // Calls eval():
   eval($first);
   eval($second);
   echo 'The statement for $x: ';
   // Calls eval():
   eval(trim(fgets(STDIN)));
   // Checks the result:
   echo "\$x = $x\n";
?>