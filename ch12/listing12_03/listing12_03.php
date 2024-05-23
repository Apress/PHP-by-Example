<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<h1>Welcome</h1>
<p>We are happy to greet you, <strong>
<?php
   if(empty($_POST["name"])){
      $name="Mister X";
   }
   else{
      $name=$_POST["name"];
   }
   echo $name;
?>
</strong>! It is a great honor for us.</p>
</body>
</html>