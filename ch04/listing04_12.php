<?php
   // The first array:
   $K=range(3,5);
   print("Array \$K:\n");
   print_r($K);
   // The second array:
   $A=["X"=>100,"Y"=>200,"Z"=>300];
   print("Array \$A:\n");
   print_r($A);
   // The third array:
   $B=array_keys($A);
   print("Array \$B:\n");
   print_r($B);
   // The fourth array:
   $C=array_combine($K,$B);
   print("Array \$C:\n");
   print_r($C);
   array_pop($C);
   print("Array \$C:\n");
   print_r($C);
   array_push($C,"A","B");
   print("Array \$C:\n");
   print_r($C);
   // The fifth array:
   $D=array_slice($C,0,3);
   print("Array \$D:\n");
   print_r($D);
   // The sixth array:
   $E=array_slice($C,-3,2);
   print("Array \$E:\n");
   print_r($E);
?>