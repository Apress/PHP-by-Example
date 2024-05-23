<!DOCTYPE html>
<html>
<head>
<title>Coffee</title>
</head>
<body>
<h1>Your coffee is ready</h1>
<p>
<?php
   // The function defines text with information
   // about sugar content:
   function getsugar($spoons){
      switch($spoons){
         case 1: return "with a spoon of sugar";
         case 2: return "with two spoons of sugar";
         case 3: return "with three spoons of sugar";
         case 4: return "with four spoons of sugar";
         case 5: return "with five spoons of sugar";
         default: return "no sugar";
      }
   }
   // Defines a drink:
   $coffee=$_POST["coffee"];
   // Determines the sugar content:
   $sugar=getsugar($_POST["sugar"]);
   // The text to add to the document:
   $txt="It will be coffee <em>$coffee</em> $sugar.";
   // Adding text to the document:
   echo $txt;
?>
</p>
<hr>
<p>Good luck and come again!</p>
</body>
</html>