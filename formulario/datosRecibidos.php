<?php 

	/* VARIABLE GLOBAL $_SERVER['REQUEST_METHOD']*/
	// Validacion con que metodos se estan recibiendo los datos Solo si existe un formulario
	/*if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		echo "Los datos se estan recibiendo a traves del metodo POST";
	}else{
		echo "Los datos se estan recibiendo a traves del metodo GET";
	}*/

	/* Otra forma de validacion de envio de datos
		isset() = si la variable esta instanciada o almacenada en memoria (declarada):: True/False
		Se usa verificar mas de un formulario
	*/
	if (isset($_POST['enviar'])) { /*Si fue declarada y fue instanciada en memoria*/
	 echo "Los datos se enviaron correctamente <br>";
	 print_r($_POST['enviar']	);
	}

	
 ?>