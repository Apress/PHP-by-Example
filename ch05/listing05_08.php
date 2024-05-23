<?php
   function sum(...$nums){
      $s=0;
      foreach($nums as $a){
         $s+=$a;
      }
      return $s;
   }
   function count_type($type,...$args){
      $num=sizeof($args)+1;
      $count=0;
      echo "Arguments at all: $num\n";
      if($num==1){
         echo "The search is over\n";
         return;
      }
      for($k=0;$k<sizeof($args);$k++){
         if(gettype($args[$k])==$type){
            $count++;
         }
      }
      echo "Arguments of the type $type: $count\n";
   }
   echo "[1] The sum: ",sum(5,9,6),"\n";
   echo "[2] The sum: ",sum(),"\n";
   echo "[3] The sum: ",sum(1,3,5,7,9),"\n";
   count_type("integer",2,8,"12",3.5,2,"hello");
   count_type("integer");
   count_type("string",2,8,"12",3.5,2,"hello");
?>