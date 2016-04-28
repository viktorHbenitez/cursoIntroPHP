<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


	<title>Formularios en php</title>
</head>
<body>
	<div class="container-fluid">
		
		<h1>Uso de formularios en PHP</h1>

		<form action="" method="">    <!-- action = archivoDestino.php  method= Get / Post -->
			<div class="form-group">
				<label for="nombreUsuario">Nombre Usuario:</label>
				<input type="text" id="nombreUsuario"  class="form-control" placeholder="Ingrese un nombre" name="nombre"/>
			</div>	<!-- .form-group type=name value= N/A texto dinamico escrito por el usuario -->
			<div class="from-group">
				<label for="hombre">Hombre</label>
				<input type="radio" name="genero" value="masculino" id="hombre" class="" cheked/>
			</div>  <!-- .form-group type=radio button name=variableEnvia  value= valorEnviado -->
			<div class="radio">
				<label>
					<input type="radio" name="genero" id="mujer" value="femenino"/>Femenino
				</label>
			</div>	<!-- .radio-->
			<select class="form-control"name="year" id="year">  <!-- name= variableEnviaValor -->
				<option value="1985">1985</option>
				<option value="2000">1990</option>
				<option value="2000">2000</option>
				<option value="2005">2005</option>
				<option value="2010">2010</option>
				<option value="2015">2015</option>
			</select>  <!-- .form-control -->
			<div class="form-group">
				<label form="comentario"></label>
				<textarea class="form-control" rows="3" cols="3" name="comentario" id="comentario">
				
				</textarea>	<!-- .form-control -->		
			</div>	<!-- form-group -->
			<div class="checkbox">
				<label>
					<input type="checkbox" name="terminos" value="true" id="terminos"> Aceptas los terminos?
				</label>
			</div>	<!-- .checkbox-->
			<input type="submit" value="Enviar" class="btn btn-primary" />	<!-- .btn btn-primary -->

		</form>  <!-- endFormulario -->


	</div>
	
</body>
</html>