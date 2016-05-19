<?php 
	if(isset($_COOKIE['font-size'])){
		$tamaño = htmlspecialchars($_COOKIE['font-size']);	
	}else{
		$tamaño = '15px';
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Texto</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<style>
		p{
			font-size: <?php echo $tamaño; ?> 
		}


	</style>
</head>
<body>
	<h1>Cambiar el texto del parrafo con la cookie almacenada</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	
</body>
</html>