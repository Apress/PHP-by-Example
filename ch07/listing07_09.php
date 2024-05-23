<?php
   // The class with a special method:
   class MyClass{
      // The method:
      public function show($txt){
         echo $txt."\n";
      }
      // The special method:
      public function __call($name,$args){
         if(strlen($name)>5){
            echo "The arguments: ",sizeof($args),"\n";
            echo "The $name() method does not exist!\n";
         }else{
            for($k=0;$k<sizeof($args);$k++){
               echo "[",$k+1,"] $args[$k]\n";
            }
         }
      }
   }
   // An object of the class:
   $obj=new MyClass();
   // Calls an existing method:
   $obj->show("The MyClass class");
   // Calls the non-existing methods:
   $obj->display("Alpha");
   $obj->hello("Bravo","Charlie","Delta");
?>