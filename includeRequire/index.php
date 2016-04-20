<?php 

	//funcion que nos realiza una suma: Logica de la pagina
	function suma($numero1,$numero2){
		return $numero1 + $numero2;

	}


	//Incluye codigo o archivo pero sin suspender la ejecucion al existir un problema
	/*include 'index.vista.php';*/
	//Incluye codigo en la pagina pero si exite un problema termina el codigo existente despues de la inclucion del codigo
	require 'index.vista.php';




 ?>