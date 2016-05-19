<?php
	session_start();	/*agregar en todas las paginas se pase la variable*/ 
	$_SESSION['nombre'] = 'Viktor';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones en php</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<h1>Sesiones en PHP</h1>
	<h3>Son variables que podemos usar en varias paginas</h3>
	<h4>Pagina de inicio</h4>
	<a href="pagina2.php"> Ir a la pagina 2</a>
	
</body>
</html>