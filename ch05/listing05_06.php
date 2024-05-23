<?php
   // All arguments of the function
   // have values by default:
   function show($first="Alpha",$second="Bravo"){
      echo "The first argument: ",$first,"\n";
      echo "The second argument: ",$second,"\n\n";
   }
   // Not all arguments of the function
   // have values by default:
   function display($x,$y=200,$z=300){
      echo "The first number: ",$x,"\n";
      echo "The second number: ",$y,"\n";
      echo "The third number: ",$z,"\n\n";
   }
   // Calls the functions:
   show();         # No arguments
   show("A");      # One argument
   show("A","B");  # Two arguments
   display(100);   # One argument
   display(1,2);   # Two arguments
   display(1,2,3); # Three arguments
?>