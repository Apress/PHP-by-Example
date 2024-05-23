<?php
   // The function to create an array based on a generator:
   function generator_to_array(Generator $gen){
      // An empty array:
      $array=[];
      foreach($gen as $a){
         // Adds an element to the array:
         $array[]=$a;
      }
      // The function result:
      return $array;
   }
   // A generator function:
   function nums($n){
      for($k=1;$k<=$n;$k++){
         yield $k;
      }
   }
   // Creates an array:
   $A=generator_to_array(nums(5));
   print_r($A);
?>