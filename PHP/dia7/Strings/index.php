<html>
	<head>
		<meta charset = "utf-8">
	</head>
	
	<body>
		<?PHP
			//Display all ocorrences of substr in string
			$offset = 0;
			while(($offset = strpos('Brasil Pentacampeao' , 'a' , $offset + 1) ) != 0 )
			{
				echo($offset.',');
				
			}
		?>
		
	</body>
</html>