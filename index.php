<?php 

	/*Funciones para cadenas de texto
		htmlspecialchars(String) = Convertir caracteres especial en entidades html
	*/
		$caracteresEspeciales = ' < > & "" ';
		//  htmlspecialchars Ayuda a que no se realizen injecciones a nuestras paginas web

		// Convirtiendo los caracteres especiales en elementos del DOM
		echo htmlspecialchars($caracteresEspeciales);	
		echo '<br>';
		echo '<br>';
		//FUNCION : trim() Elimina los espacios en blanco tanto al inicio como al final

		$textoTrim = '      Ejemplo de texto     ';
		
		echo "Texto original".$textoTrim."sin usarla funcion trim()";
		echo '<br>';
		echo '<br>';
		echo "Texto".trim($textoTrim)."usando la funcion trim()";

		//strlen() = calcula el tamano de un String

		$textoString = 'viktor hugo';
		echo '<br>';
		echo "La palabra ".$textoString. " 	tiene ".strlen($textoString)." caracteres";

		//substr() = regresa un intervalo de caracteres de un String
		$textoIntervalo = 'viktor hugo';
		echo '<br>';
		echo "de la palabra ".$textoIntervalo. "Se va a estraer la palabra viktor=".substr($textoIntervalo,0,6);
		
		//strtoupper() strtolower() converti un String en mayusculas y minusculas
		echo "<br>";
		echo "<br>";
		echo 'strtoupper() strtolower() ';
		echo "<br>";
		$textOrigin = 'vikToR huGo benItez';
		echo "El texto original es ".$textOrigin;
		echo "<br>";
		echo "Texto con la funcion strtoupper: ".strtoupper($textOrigin);
		echo "<br>";
		echo "Texto con la funcion strtolower: ".strtolower($textOrigin);


		echo "<br>";
		//strpos() permite buscar un caracter en un String
		$textoBuscar = 'Texto en el que se buscara una letra';
		echo "<br>";
		echo "<br>";
		echo 'buscamos la letra s '.strpos($textoBuscar,'s');
		echo "<br>";


 ?>