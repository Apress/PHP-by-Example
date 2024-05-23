<?php
   // The function calculates the sum of the arguments:
   function sum(){
      // The initial value of the sum:
      $s=0;
      // Iterates over the arguments and calculates the sum:
      foreach(func_get_args() as $a){
         $s+=$a;
      }
      // The result of the function:
      return $s;
   }
   // The function counts the arguments of a certain type:
   function count_type($type){
      // The number of passed arguments:
      $num=func_num_args();
      // The number of arguments of a certain type:
      $count=0;
      echo "Arguments at all: $num\n";
      // If there is one argument:
      if($num==1){
         echo "The search is over\n";
         // The function is terminated:
         return;
      }
      // Iterates over the arguments:
      for($k=1;$k<$num;$k++){
         // Checks the type of the argument:
         if(gettype(func_get_arg($k))==$type){
            $count++;
         }
      }
      // The result of calculations:
      echo "Arguments of the type $type: $count\n";
   }
   // Calls the function for calculating the sum:
   echo "[1] The sum: ",sum(5,9,6),"\n";
   echo "[2] The sum: ",sum(),"\n";
   echo "[3] The sum: ",sum(1,3,5,7,9),"\n";
   // Calls the function for calculating the number
   // of arguments of a certain type:
   count_type("integer",2,8,"12",3.5,2,"hello");
   count_type("integer");
   count_type("string",2,8,"12",3.5,2,"hello");
?>