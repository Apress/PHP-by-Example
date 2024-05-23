<?php
   // The loop statement for iterating values:
   for($num=1;$num<=10;$num++){
      // The selection statement:
      $res=match($num){
         1=>"one",
         2,3,5,7=>"a prime number",
         4,6,8=>"an even number",
         9=>"nine",
         default=>"a great number"
      };
      // Prints the result:
      echo "[$num] ",$res,"\n";
   }
?>