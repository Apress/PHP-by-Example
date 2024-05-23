<?php
   // The arrays to compare:
   $A=["0"=>123,1=>true,2=>""];
   $B=["123",10,0];
   $C=[0=>123,"1"=>true,"2"=>""];
   $D=[0=>123,1=>true,3=>""];
   // Compares the arrays:
   if($A==$B){
      echo '$A==$B',"\n"; 
   }
   if($A!==$B){
      echo '$A!==$B',"\n"; 
   }
   if($A===$C){
      echo '$A===$C',"\n"; 
   }
   if($A!=$D){
      echo '$A!=$D',"\n"; 
   }
?>