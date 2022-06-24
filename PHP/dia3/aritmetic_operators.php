<!DOCTYPE html>
<html>
<head lang= "pt-br">
	<meta charset="utf-8">
</head>
<body>
<!--php code after of supertag ?php -->
<?php
	$n1 = 5;
	$n2 = 10;
	$na = $_GET["a"];
	$nb = $_GET["b"];
	
	echo "A soma vale:". ($n1 + $n2); #se essa operação for realizada dentro da string, o resultado não será exibida ao usuário, mas sim a operação em si
	echo "</br>A subtracao vale:". ($n1 - $n2);
	echo "</br>A multiplicacao vale:". ($n1*$n2);
	echo "</br>A divisao vale:".($n1/$n2);
	echo "</br>O resto da divisao é:".($n1% $n2);
	$x = 1;
	while($x<=9){
		echo "</br>2<sup>$x</sup> e´:". pow(2, $x);//round, //ceil , //floor
		$x = $x+1;
	}
	
	/*
	*abs() -> valor absoluto
	*pow() -> potencia
	
	*/
 ?>
</body> 
</html>