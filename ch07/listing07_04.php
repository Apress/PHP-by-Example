<?php
   # A class with static members:
   class MyClass{
      # A static field:
      public static $name;
      # Static methods:
      static function rename($name){
         self::$name=$name;
      }
      static function hello(){
         echo "The name: ",self::$name,"\n";
      }
   }
   # The value of the static field:
   MyClass::$name="Alpha";
   // Calls the static methods:
   MyClass::hello();
   MyClass::rename("Bravo");
   MyClass::hello();
?>