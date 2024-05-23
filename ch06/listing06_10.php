<?php
   // The full path to the file:
   $path="D:/books/php/mytext.txt";
   // We open the file for writing:
   $h=fopen($path,"wt");
   echo "Writing into the file.\n";
   echo "Enter text. To terminate, enter exit:\n";
   // The variable to count lines:
   $k=1;
   // Reads the string entered by the user:
   $line=trim(fgets(STDIN));
   while($line!=="exit"){
      // Writes the line number into the file:
      fwrite($h,"[$k] ");
      // Writes the line into the file:
      fwrite($h,$line."\n");
      // The new value for the counter:
      $k++;
      // Reads a new string:
      $line=trim(fgets(STDIN));
   }
   // Closes the file:
   fclose($h);
   echo "The program is over.";
?>