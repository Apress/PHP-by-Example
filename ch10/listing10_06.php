<?php
   // The exception classes:
   class RedException extends Exception{}
   class GreenException extends Exception{}
   class BlueException extends Exception{}
   class OtherException extends Exception{}
   // Reads the name of a color:
   echo "Your favorite color: ";
   $color=strtolower(trim(fgets(STDIN)));
   // The outer block of the controlled code:
   try{
      // The inner block of the controlled code:
      try{
         // Makes a selection:
         switch($color){
            case "red":
               throw new RedException();
            case "green":
               throw new GreenException();
            case "blue":
               throw new BlueException();
            default:
               throw new OtherException(); 
         } // Handles the exceptions of the inner block:
      }catch(RedException $e){
         echo "Red is beautiful\n";
      }catch(GreenException $e){
         echo "Green is wonderful\n";
      }catch(BlueException $e){
         echo "Blue is stylish\n";
      }finally{  // The block is always executed
         echo "Thank you for the answer\n";
      }
      echo "You have a good taste\n";
   } // Handles the exceptions of the outer block:
   catch(OtherException $e){
      echo "I don't know this color\n";
   }
   echo "The program is over\n";
?>