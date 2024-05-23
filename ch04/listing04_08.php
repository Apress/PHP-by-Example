<?php
   // The initial array:
   $A=[1,[2,[3,4]]];
   print("Array \$A:\n");
   // Checks the contents of the array:
   print_r($A);
   // Assigns an array:
   $B=$A;
   print("Array \$B:\n");
   // Checks the contents of the array:
   print_r($B);
   // Changes the initial array:
   $A[0]="A";
   $A[1][0]="B";
   $A[1][1][0]="C";
   print("Array \$A:\n");
   // Checks the contents of the array:
   print_r($A);
   print("Array \$B:\n");
   // Checks the contents of the array:
   print_r($B);
?>