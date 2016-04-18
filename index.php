<?php 

	echo "Funciones utiles para arreglos <br>";

	//funcion extract() extare los elementos asociativos como si fueran variables
	//extrae las key como si fueran variables con su rrespectivo valor
	echo "Funciones: extract() <br>";
	//declaracion de un arreglo asociativo
	$amigo = array('telefono' => 2434312033,'edad' => 26,'pais' => 'Mexico');
	//funcion que convierte las llaves en variables
	extract($amigo);
	echo "Telefono: ".$telefono;
	echo "<br>";
	echo "Edad: ".$edad;
	echo "<br>";
	echo "Pais: ".$pais;
	echo "<br>";

	echo "Funciones utiles para arreglos <br>";
	echo "<br>";
	echo "Funcion array_pop() Deletes the last element 	of an array";
	echo "<br>";

	//Declaracion del arreglo
	$diaSemana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
	
	//Recorremos el arreglo
	/*for ($i=0; $i < $tamanoArreglo; $i++) { 
		echo $diaSemana[$i]."<br>";
	}*/

	//Recorrer con foreach
	foreach ($diaSemana as $dia) {
		echo $dia."<br>";
	}
	//Deletes the las element of an array
	//$lastDay = array_pop($diaSemana);
	$tamanoArreglo = count($diaSemana);
	echo "<hr>";
	for($i=0; $i < $tamanoArreglo;$i++){
		echo $diaSemana[$i]."<br>";
	}
	echo "<hr>";
	//echo $lastDay."<br/>";

	//Funcion join('caracter / String',array); concatena cualquier elemento string o caracter y lo muestra sin  necesidad de un ciclo
	echo join(' - ',$diaSemana);
	echo "<br>";

	//funcion count(): Permite conocer cuantos elementos tenemos en nuestro arreglo
	echo "El arreglo diaSemana tiene ".count($diaSemana)." dias<br/>";
	echo "<br>";

	echo "Funcion::sort()<br>";
	//funcion sort(): Permite ordenar nuestro arreglo de forma ascendente
	/*sort($diaSemana);

	foreach ($diaSemana as $dia) {
		# code...
		echo $dia."<br/>";
	}
	*///Funcion array_reverse(): Muestra el arreglo de forma invertida
	$arreglo_reverse = array_reverse($diaSemana);
	echo join(' , ',$arreglo_reverse);





 ?>