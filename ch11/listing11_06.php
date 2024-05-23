<?php
   // A generator function:
   function nums(){
      for($k=100;$k<=300;$k+=100){
         yield $k;
      }
   }
   // Creates a generator object:
   $nums=nums();
   // The controlled code:
   try{
      // The first use of the generator object:
      echo "The first use of the generator object:\n";
      foreach($nums as $n){
         echo $n," ";
      }
      // The second use of the generator object:
      echo "\nThe second use of the generator object:\n";
      foreach($nums as $n){
         echo $n," ";
      }
   }catch(Exception $e){
      echo "Something is wrong\n";
   }
?>