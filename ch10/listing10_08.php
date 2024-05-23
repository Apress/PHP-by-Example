<?php
   // The function for handling exceptions:
   function handler(){
      echo "There was an error!";
   }
   // Sets the handler function for exceptions:
   set_exception_handler('handler');
   // Displays a message:
   echo "An error is about to occur...\n";
   // Throws an exception:
   throw new Exception();
   // This statement is not executed:
   echo "This message will not be displayed!";
?>