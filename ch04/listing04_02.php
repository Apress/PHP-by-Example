<?php
   // Adds elements to the array:
   $A["Red"]=100;
   $A["Yellow"]=200;
   $A["Green"]=300;
   print("Array \$A:\n");
   // The contents of the array:
   print_r($A);
   // An array with three elements:
   $B=array(100=>"One hundred",200=>"Two hundred", 300=>"Three hundred");
   print("Array \$B:\n");
   // The contents of the array:
   print_r($B);
   // An array with elements and keys of different types:
   $C=[5=>"First","X"=>0,"Last"];
   print("Array \$C:\n");
   // The contents of the array:
   print_r($C);
?>