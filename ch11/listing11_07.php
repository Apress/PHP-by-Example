<?php
   function nums(){
      for($k=100;$k<=300;$k+=100){
         yield $k;
      }
   }
   try{
      echo "The first use of the generator object:\n";
      foreach(nums() as $n){
         echo $n," ";
      }
      echo "\nThe second use of the generator object:\n";
      foreach(nums() as $n){
         echo $n," ";
      }
   }catch(Exception $e){
      echo "Something is wrong\n";
   }
?>