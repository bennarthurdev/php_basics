<html>
<head>
	<meta charset="utf-8">
	<title>Control Structures </title>

</head>
<body>
<script>
	function Bool(){
		var x = get.elementbyId
	}
</script>
<?php 
	#for each
	//your navgation will get all elements of array declared before, see a example:
	$myvector = array(1, 2 , 3 , 4);
	foreach($myvector as $x){
		echo('<p style="font-size:24px;">vector element have this value here: '.$x.'</p>');
	}
	$i = -1;
	#while
	while($i <= 5){
		$i++;
		if ($i == 4){
			//break;
			continue;
		}
		echo($i.'<br>');
		//if not have this here -> reckless loop -> server breaks
	}
	#do while
	#$i = 6;
	do{
		echo($i);
		$i++;
	}while($i<5);// condition are be anilysed after of block of code.
	$x = false;
	$x = $_GET['submit'];
	echo('<h1>Wait for...</h1>');
	echo('<h2>Loading the game</h2>');
	echo('<p>Press exit to quit</p>');
	echo('<button>EXIT</button>');
?>
<>

</body>
</html>