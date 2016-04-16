<?php 


	//Calcular el area de un triangulo con funciones
	//formula del triangulo A = (base * altura) / 2


	function calcular($base,$altura){
		//calculamos el area
		$area = ($base * $altura) / 2;

		//retornando el valor
		return $area;
	}

	$resultado = calcular(10,10);
	echo var_dump($resultado);
	
	echo "El area del tringualo es ".$resultado." metros cuadrados";


 ?>