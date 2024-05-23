<?php
   // A function with three arguments:
   function show($first,$second,$third){
      echo "The first argument: $first\n";
      echo "The second argument: $second\n";
      echo "The third argument: $third\n";
      echo "--------------------\n";
   }
   // Passing arguments by position:
   show(100,200,300);
   // Passing arguments by name:
   show(second:200,third:300,first:100);
   // The mixed scheme of passing arguments:
   show(100,third:300,second:200);
?>