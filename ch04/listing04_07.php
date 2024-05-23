<?php
   // A multidimensional array:
   $A=[[1,2,3,4,5],["A","B","C"],[6,7,8,9]];
   echo "Array \$A:\n";
   // The contents of the array:
   print_r($A);
   echo "Array \$A:\n";
   // Iterates the elements (with the help of indexes):
   for($i=0;$i<count($A);$i++){
      for($j=0;$j<count($A[$i]);$j++){
         // Displays the value of the elements:
         echo $A[$i][$j]," ";
      }
      // Breaks the line:
      echo "\n";
   }
   // A multidimensional array:
   $B=array(7=>array("X"=>2,"Y"=>3),9=>array("D","E","F"));
   echo "Array \$B:\n";
   // The contents of the array:
   print_r($B);
   echo "Array \$B:\n";
   // Iterates the elements:
   foreach($B as $k1=>$v1){
      foreach($v1 as $k2=>$v2){
         // Displays the value of the element:
         echo "\$B[$k1][$k2] = $v2\n";
      }
   }
?>