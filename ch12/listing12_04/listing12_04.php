<!DOCTYPE html>
<html>
<head>
<title>I know the button</title>
</head>
<body>
<h1>You have made a choice</h1>
<p>
You have clicked the <strong>
<?php
   if(isset($_POST["first"])) $button=$_POST["first"];
   else $button=$_POST["second"];
   echo $button;
?>
</strong> button.
</p>
</body>
</html>