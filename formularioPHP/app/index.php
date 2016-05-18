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
			/*3. verifica tenga el formato de un correo false correo invalido tru: regresa el nombre del correo*/
			if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
				$errores .= "Por favor ingresa un correo valido";
			}

		}else{
			$errores .= "Por favor ingrese un correo <br/>";
		}	/*endif*/
	}


	/*traer codigo html del formulario*/
	require('index.vista.php');
 ?>

