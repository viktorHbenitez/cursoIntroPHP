<?php 

	/*METHOD = GET ENVIA VALORES POR URL VARIABLE $_GET
	USO: Solo para mostrar datos, N/A consulta base de datos
	NOTA: Medidas de seguridas restrinjida para que el usuario no cambie la URL injection de codigo
	
	FUNCION EVITA INJECCION CODIGO
		htmlspecialchars() = convierte codigo html a String::html a caracteres
	*/
	if(!$_GET){
		//header = paginaMostrada no hay datos en el $_POST
		header('location:http://localhost/CursoPHP/formulario/formulario.php');
	}

	/*imprimmos el contenido de la variable $_GET
	Array ( [nombre] => viktor [genero] => masculino [year] => 1985 [comentario] => comentario viktor [terminos] => true ) */
	/*	print_r($_GET); */

	/*Accedemos al contenido del $_GET
	Usamos el metodo htmlspecialchars() para convertir caracteres especiales a caracteres normales de texto
	*/
	/*Validacion $_GET tenga datos del usuario y no esten vacios*/
	if ($nombre) {
		htmlspecialchars($nombre = $_GET['nombre']);
		# code...
	}else{
		echo "Se debe ingresar un dato en el campo nombre <br>";
	}
	htmlspecialchars($genero = $_GET['genero']);
	htmlspecialchars($year = $_GET['year']);
	htmlspecialchars($comentario =$_GET['comentario']);	
	htmlspecialchars($terminos = $_GET['terminos']);	
	
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