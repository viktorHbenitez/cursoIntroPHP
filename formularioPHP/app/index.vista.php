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
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<div class="form-group">
				<input type="text"  class="form-control" name="nombre" id="nombre" placeholder="Nombre persona:" value="<?php if(!$enviado && isset($nombre)) echo $nombre; ?>" />
			</div>
			<div class="form-group">
				<input type="text" name="correo" class="form-control" id="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo; ?>" />
			</div>
			
				<textarea name="mensaje" id="mensaje" class="form-control" rows="3" placeholder="Mesaje"> <?php if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>
			
			<?php if (!empty($errores)): ?> <!-- si la variable errores no esta vacia (tiene contenido)-->
				<div class="alert error">
					<?php echo $errores; ?>	<!-- mostramos los errores almacenados en la variable $errores -->
				</div>
			<?php elseif ($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif ?>
			
			<div class="form-group derecha">
				<input type="submit"  name="submit" class="btn btn-warning" value="Enviar Correo"/>
			</div>
			
		</form>






	</div>
</body>
</html>