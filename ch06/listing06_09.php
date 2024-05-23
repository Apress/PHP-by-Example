<?php
   // The full path to the file:
   $path="D:/books/php/myfile.txt";
   // We open the file for reading
   // as the character stream:
   $h=fopen($path,"rt");
   // The variable to count lines:
   $k=1;
   // While the end of the file is not reached:
   while(!feof($h)){
      // Reads a string line:
      $line=fgets($h);
      // Displays the read line:
      echo "[$k] ",$line;
      // The new value for the counter:
      $k++;
   }
   // Closes the file:
   fclose($h);
?>