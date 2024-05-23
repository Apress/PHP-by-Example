<?php
   // Imports the file contents:
   require_once "listing09_12.php";
   // Creates aliases:
   use function MyUtils\show;
   use function MyUtils\display as disp;
   use MyUtils\MyClass as MyClass;
   // Uses aliases:
   show();
   disp();
   $obj=new MyClass();
?>