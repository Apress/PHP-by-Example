<?php
   // A generator function with arguments:
   function numbers($count,$start,$step=1){
      for($k=1,$num=$start;$k<=$count;$k++,$num+=$step){
         yield $num;
      }
   }
   // Using the generator function:
   echo "[1]";
   foreach(numbers(5,1,2) as $n){ // Odd numbers
      echo " ".$n;
   }
   echo "\n[2]";
   foreach(numbers(7,3) as $n){ // Natural numbers
      echo " ".$n;
   }
   echo "\n[3]";
   foreach(numbers(6,10,-1) as $n){ // Reverse order
      echo " ".$n;
   }
?>