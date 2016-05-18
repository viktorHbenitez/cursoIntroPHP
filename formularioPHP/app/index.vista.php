<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	
	<div class="wrap">
		
		<!-- htmlspecialchars($_SERVER['PHP_SELF']):: convertimos caracteres especiales, variable global del nombre de pagina en ejecucion -->
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<div class="form-group">
				<input type="text"  class="form-control" name="nombre" id="nombre" placeholder="Nombre: "/>
			</div>
			<div class="form-group">
				<input type="text" name="correo" class="form-control" id="correo" placeholder="Correo"/>
			</div>
			
				<textarea name="mensaje" id="mensaje" class="form-control" rows="3" placeholder="Mesaje"></textarea>
			<div class="form-group derecha">
				<input type="button"  name="submit" class="btn btn-warning" value="Enviar Correo"/>
				
			</div>
			
		</form>






	</div>
</body>
</html>