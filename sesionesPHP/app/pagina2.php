<?php 
	session_start();
	if($_SESSION){	/*si existe una sesion creada*/
		$nombre = $_SESSION['nombre'];
		print_r($_SESSION); /*visualizar las variables de la session*/
		echo "<h1>Hola, $nombre<h1>";
	}else{
		echo "No has iniciado sesion";
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina dos</title>
</head>
<body>	
	<a href="cerrar.php">Cerrar Session</a>
</body>
</html>