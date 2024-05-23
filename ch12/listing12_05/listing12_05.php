<!DOCTYPE html>
<html>
<head>
<title>Your order</title>
</head>
<body>
<h1>Your order is ready</h1>
<p>You ordered:</p>
<?php
   // Defines a drink:
   $drink=$_POST["drinks"];
   // Is it necessary to add milk:
   if(isset($_POST["milk"])) $milk=$_POST["milk"];
   else $milk="do not add";
   // Is it necessary to add sugar:
   if(isset($_POST["sugar"])) $sugar=$_POST["sugar"];
   else $sugar="do not add";
   // The text to add to the document:
   $txt=<<<MYTEXT
   <ul>
   <li>The drink: <strong>$drink</strong></li>
   <li>Milk: <strong>$milk</strong></li>
   <li>Sugar: <strong>$sugar</strong></li>
   </ul>
   MYTEXT;
   // Adds the text to the document:
   echo $txt;
?>
<hr>
<p>Thank you for your choice!</p>
</body>
</html>