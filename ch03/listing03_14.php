<?php
   // The loop statement for iterating numbers:
   for($num=1;$num<=10;$num++){
      // The selection statement:
      $res=match(true){
         ($num<=3)=>"a small number",
         ($num<8)=>"just a number",
         ($num>=5)=>"a great number"
      };
      // Prints the result:
      echo "[$num] ",$res,"\n";
   }
?>