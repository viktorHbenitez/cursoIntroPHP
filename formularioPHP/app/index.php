<?php

	$errores = "";
	$enviado = "";
	/*comprobar que el usuario presiono el boton de enviar creando la instancia en la memoria*/
	if (isset($_POST['submit'])) {
		/*validacion de cada uno de los datos recibidos, asiganos a variables*/
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];
		
		/*validacion del dato nombre*/
		/*1. verificacion no se encuentre vacio el textfield $nombre*/
		if (!empty($nombre)) {
			$nombre = trim($nombre);	/*2. quitamos espacios*/
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING); /*3. sanar o validar informacion filter_var($variable, tipo:filtro)*/
		}else{
			$errores .= "Por favor ingresa un nombre <br />";
		}	/*end if*/

		/*validacion del dato correo*/
		/*1. verificacion no este vacia la variable $correo*/
		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL); /*2. verificacion quita caracteres especiales*/
			if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {	/*3. verifica tenga el formato de un correo false correo invalido tru: regresa el nombre del correo*/
				$errores .= "Por favor ingresa un correo valido <br/>";
			}
		}else{
			$errores .= "Por favor ingrese un correo <br/>";
		}	/*endif*/

		/*validacion de la variable mensaje */
		if (!empty($mensaje)) {
			/*limpiamos el mensaje evitar injeccion de codigo*/
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);	/*elimina espacios*/
			$mensaje = stripcslashes($mensaje); /*elimina diagonales*/
		}else{
			$errores .= "Por favor ingresa el mensaje <br/>";
		}/*endif*/

		/*Preguntar si existen errores*/
		if (!$errores) {
			/*preparamos para enviar los datos*/
			$enviar_destino = "victorHbenitez85@hotmail.com"; /*correo a enviar los datos del formulario*/
			$asunto = "Correo enviado desde miPaginaWeb";/*cualquier asunto (puede ser dinamico)*/
			$mensajePreparado = "De: $nombre \n";
			$mensajePreparado .= "Correo: $correo \n";
			$mensajePreparado .= "Mensaje: $mensaje \n";

			/* mail():: funcion para enviar los datos a un correo electronico*/
			/* Los archivos deben estar subidos a un hosting aplicar la funcion mail()*/
			/*mail($enviar_destino, $asunto, $mensajePreparado);*/
			$enviado = "true";
		}

	}


	/*traer codigo html del formulario separacion vista - logica*/
	require('index.vista.php');
 ?>

