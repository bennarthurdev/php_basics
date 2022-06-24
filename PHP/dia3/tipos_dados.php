<!DOCTYPE html>
<html>
<head lang= "pt-br">
	<meta charset="utf-8">
</head>
<body>
<!--php code after of supertag ?php -->
<?php
	$const_value = $_GET["value"];
	if(isset($const_value))
		define("cons" , $const_value , True);
		echo "print the value of my const:".cons; 
	if(True != isset($const_value))
		echo "The const not be able to define!";
	
 ?>
</body> 
</html>