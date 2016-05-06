<?php 
	/*	Validacion se enviaron los datos del formulario
		isset($_POST['enviar']) = Si fue enviado el formulario
	*/
	$errores = "";

	if (isset($_POST['enviar'])) {
		/*asignamos los datos enviados a variables*/
		$nombre = $_POST['nombre']; 
		$correo = $_POST['correo']; 
		$genero = $_POST['genero']; 
		/*	1. condicional empy() ::verificamos que los campos no se envien vacios 
			2. trim() ::eliminas los espacios de los datos recibidos	
			3. htmlspecialchars():: convertimos los campos en caracteres de texto 
			4. stripcslashes() :: elimina las diagonales 
			otra opcion: filter_var(variable, FILTER_SANITIZE_STRING) :: REMUEVE SIGNOS html impide injeccion de codigo
		*/
		
		if (!empty($nombre)) {
			/*$nombre = trim($nombre);
			echo $nombre." trim()<br>";
			$nombre = htmlspecialchars($nombre);
			echo $nombre." htmlspecialchars <br>";
			$nombre = stripcslashes($nombre);
			echo $nombre." stripcslashes <br>";*/
			$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
			echo "Nombre: ".$nombre."<br>";
		}else{
			$errores .="Se necesita llenar el campo nombre <br>" ;
		} /*endIf*/

		if(!empty($correo)){

			$correo = filter_var($correo, FILTER_SANITIZE_STRING);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){ /*Si no tiene la estructura de un correo*/
				$errores.= "Introduzca un correo valido <br>";
			}else{
				echo "Correo electronico: ".$correo;
			} /*endIf*/

		}else{
			$errores.= " Necesita llenar el campo correo <br>";
		} 


	} /*endIf*/

	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css"/>

	<title>Formularios en php</title>
</head>
<body>
	<div class="container-fluid">
		
		<h1>Validacion de un formulario </h1>
		<h2><small>Eliminar injeccion de codigo y campos en blanco</small></h2>
		
		<hr>
		<p class="lead"> 
			Envia los datos y se verifica por que metodo se enviaron los datos GET / POST
		</p>
		<!-- echo htmlspecialchars($_SERVER['PHP_SELF']) Regresa el nombre del archivo en ejecucion -->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">    <!-- action = archivoDestino.php  method= Get / Post -->
			<div class="form-group">
				<label for="nombreUsuario">Nombre Usuario:</label>
				<input type="text" id="nombreUsuario"  class="form-control" placeholder="Ingrese un nombre" name="nombre" title="Se necesita un nombre" /> <!-- required= ingresarDatoObligatorio -->
			</div>	<!-- .form-group type=name value= N/A texto dinamico escrito por el usuario -->
			
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Introduce un correo electronico" class="form-control" />
			</div>	<!-- .form-group -->
			<div class="radio">
				<label>
					<input type="radio" name="genero" value="hombre" checked> Masculino 		
				</label>
			</div> <!-- .radio -->

			<div class="radio">
				<label>
					<input type="radio" name="genero" id="mujer" value="femenino"/>Femenino
				</label>
			</div>	<!-- .radio-->
			
			<?php if(!empty($errores)): ?>
				<!-- Se ejecutara el codigo que se encuentre aqui -->
				<div class="error"> <?php echo $errores; ?></div>
			<?php endif; ?>
			<input type="submit" value="Enviar" class="btn btn-primary" name="enviar"/>	<!-- .btn btn-primary -->

		</form>  <!-- endFormulario -->


	</div>
	
</body>
</html>