<?php
   // Includes the file contents into the program:
   require_once "listing09_08.php";
   // The function description:
   function hello(){
      echo "The function hello()\n";
   }
   // Creates an object from the imported namespace:
   $obj=new MyUtils\MyClass();
   // Calls a method from the object:
   $obj->show();
   // Calls the function described in the program:
   hello();
   // Calls the function from the imported namespace:
   MyUtils\hello();
?>