<?php
   // The names of the Musketeers:
   $athos="Athos";
   $porthos="Porthos";
   $aramis="Aramis";
   print("A name from \"The Three Musketeers\": ");
   // Reads the name:
   $name=trim(fgets(STDIN));
   // Checks the name:
   switch($name){
      case $athos:
         print("Yes, Athos is a Musketeer");
         break;
      case $porthos:
         print("Yes, Porthos is a Musketeer");
         break;
      case $aramis:
         print("Yes, Aramis is a Musketeer");
         break;
      default:
         print("Strange. Is this a fourth Musketeer?");
   }
?>