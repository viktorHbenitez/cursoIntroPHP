<?php 

	/*METHOD = GET ENVIA VALORES POR URL VARIABLE $_GET
	USO: Solo para mostrar datos, N/A consulta base de datos
	NOTA: Medidas de seguridas restrinjida para que el usuario no cambie la URL injection de codigo
	*/

	if(!$_GET){

		//header = paginaMostrada no hay datos en el $_POST
		header('location:http://localhost/CursoPHP/formulario/formulario.php');
	}

	/*imprimmos el contenido de la variable $_GET
	Array ( [nombre] => viktor [genero] => masculino [year] => 1985 [comentario] => comentario viktor [terminos] => true ) */
	/*	print_r($_GET); */

	/*Accedemos al contenido del $_GET*/
	$nombre = $_GET['nombre'];
	$genero = $_GET['genero'];
	$year = $_GET['year'];
	$comentario =$_GET['comentario'];
	$terminos = $_GET['terminos'];
	
	/*
	$contenido = $_GET;
	print_r($contenido);
	Accediendo a los valores desde foreach
	foreach($contenido as $i) {
		echo "dato ".$i."  valor<br>";
	}
	*/
	
	/*Mostrando valor*/
	echo "<h2> Tu nombre es ".$nombre." de genero ".$genero." naciste en ".$year."</h2>";
	echo "<h3>Tu comentario fue : ".$comentario." </h3>";
 ?>