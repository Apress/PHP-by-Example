<?php
   // The controlled code:
   try{
      echo "The value of the variable \$x: ";
      // Reads the value entered by the user
      // and the string with a command:
      $input="\$x=".trim(fgets(STDIN)).";";
      // Executes the command:
      eval($input);
      // Checks the variable:
      echo "\$x = $x\n";
   // If an error occurs:
   }catch(ParseError $e){
      echo "There was an error\n";
   }
   echo "The program is over\n";
?>