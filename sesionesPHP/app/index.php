<?php
	/*Crear cookie almacena hasta 4mb*/
	setcookie('font-size', '50px', time() + 60 * 60 * 24 * 30, '/');	/* setcookie(parametroGuardar, valorUsuario, tiempoDuracionCookie, lugarAlmacenamiento) time() regresa el tiempo actual cookie:duracion 30 dias*/
 	/*Remover una cookie colocamos una fecha expirada (cambiar + por -)*/
	/*setcookie('font-size', '50px', time() - 60 * 60 * 24 * 30, 'cookie/');  setcookie(parametroGuardar, valorUsuario, tiempoDuracionCookie, lugarAlmacenamiento) time() regresa el tiempo actual cookie:duracion 30 dias*/
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manejo de cookies en PHP</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<h1>Manejo de cookies en PHP</h1>
	<h3>Cookie Seteada</h3>
	<p>Se creara una cookie donde se pueda guardar las preferencias del usuario</p>
	<a href="texto.php">Pagina con el valor de la cookie</a>
	
</body>
</html>