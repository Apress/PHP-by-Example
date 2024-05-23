<?php
   // To switch to the hard typing mode, we need
   // to uncomment the next statement:
   # declare(strict_types=1);
   // The type of arguments and result
   // is specified explicitly:
   function power(float $x,int $n): string{
      for($s=1,$k=1;$k<=$n;$s*=$x,$k++);
      return "The number $x in the power $n: ".$s."\n";
   }
   // Calls the function:
   echo power(3,4);
   echo power(1.5,2.7);
   echo power("2","10.1");
?>