<?php
   // An empty array:
   $A=array();
   print("Array \$A:\n");
   // The contents of the array:
   print_r($A);
   // Elements are added to the array:
   $A[0]="Red";
   $A[1]="Yellow";
   $A[2]="Green";
   print("Array \$A:\n");
   // The contents of the array:
   print_r($A);
   // An array with three integer elements:
   $B=array(100,200,300);
   print("Array \$B:\n");
   // The contents of the array:
   print_r($B);
   print("\$B = [ ");
   // Prints the elements one by one:
   for($k=0;$k<count($B);$k++){
      print($B[$k]." ");
   }
   print("]\n");
   // An array with elements of different types:
   $C=["First",2,3.3];
   print("Array \$C:\n");
   // The contents of the array:
   print_r($C);
?>