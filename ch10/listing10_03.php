<?php
   // The exception class is created by inheriting
   // the Exception class:
   class MyException extends Exception{
      // A reference to an object:
      private $error;
      // The constructor:
      function __construct($msg,$error){
         // Calls the constructor of the parent class:
         parent::__construct($msg);
         // Assigns a value to the field:
         $this->error=$error;
      }
      // The method to cast the object to a string:
      function __toString(){
         $txt="The message: ".$this->getMessage()."\n";
         $txt.=$this->error->__toString();
         return $txt;
      }
   }
   // The class for odd numbers:
   class Odd{
      // A private field:
      private $number;
      // The constructor:
      function __construct($number){
         $this->number=$number; 
      }
      // The method for casting the object to a string:
      function __toString(){
         return "The number ".$this->number." is odd\n";
      }
   }
   // The class for even numbers:
   class Even{
      // A private field:
      private $number;
      // The constructor:
      function __construct($number){
         $this->number=$number;
      }
      // The method for casting the object to a string:
      function __toString(){
         return "The number ".$this->number." is even\n";
      }
   }
   // The loop statement:
   for($count=1;$count<=3;$count++){
      // The message:
      $msg="attempt ".$count;
      // The prompt to enter a number:
      echo "Enter a number: ";
      // Reads the number:
      $number=(int)trim(fgets(STDIN));
      // The controlled code:
      try{
         // If the number is entered:
         if($number%2==0){
            // Throws an exception:
            throw new MyException($msg,new Even($number));
         }else{ // If the number is odd
            // Throws an exception:
            throw new MyException($msg,new Odd($number));
         }
      // Handles the exception:
      }catch(MyException $e){
         echo $e;
      }
   }
?>