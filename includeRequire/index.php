<?php 

	/*Separamos la logica de la vista*/
	/*Colocamos la logica la funcion suma*/
	function suma($numeroA,$numeroB){
		return $numeroA + $numeroB;
	}

	/*con la funcion Include Require incluimos el archivo (codigo) del archivo index.vista.php*/
	/*include('index.vista.php'); //Si no incluye el archivo marca un warning pero ejecuta el cigo seguido siin importar el error 
		include_once('index.vista.php');  Llamamos una sola vez al archivo asegurando agregar el codigo una sola vez
		require_once('index.vista.php');
	*/
		
	require('index.vista.php')  //Si no incluye el archivo marca un fatal error y no ejecuta el codigo siguiente





 ?>