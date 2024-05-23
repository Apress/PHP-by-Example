<?php
   // The function calculates the factorial:
   function factorial($n){
      $s=1;
      for($k=2;$k<=$n;$k++){
         $s*=$k;
      }
      return $s;
   }
   // The function calculates a number in a power:
   function power($x,$n){
      $s=1;
      for($k=1;$k<=$n;$k++){
         $s*=$x;
      }
      return $s;
   }
   // The function checks whether a number is even/odd:
   function test($number){
      if($number%2==0){
         return "even";
      }else{
         return "odd";
      }
   }
   // Variables:
   $z=2;
   $num=10;
   // Calls the function:
   $res=power($z,$num);
   echo "Calculate $z in the power $num: $res\n";
   // Calls the function:
   echo "$num! = ",factorial($num),"\n";
   // Calls the function:
   echo "The number $num is ".test($num)."\n";
   $num--; # Decreases the variable by one
   echo "The number $num is ".test($num)."\n";
?>