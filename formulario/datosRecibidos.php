<?php 

	/*METODO POST INFORMACION SENSIBLE YA QUE SE ENVIAN ATRAS DEL NAVEGADOR Y NO POR URL*/

	//Validacion si el usuario quiere ingresar la pagina datosRecibidos.php sin enviar datos formulario
	if(!$_POST){

		//header = paginaMostrada no hay datos en el $_POST
		header('location:http://localhost/CursoPHP/formulario/formulario.php');
	}

	/*Accedemos al arreglo creado cuando usamos el metodo POST
	 $_POST = arreglo del metodo post creada
	*/
	print_r($_POST); /*Array ( [nombre] => viktor [genero] => masculino [year] => 1985 [comentario] => comentario viktor [terminos] => true ) */
	
	/*Accedemos al contenido del arreglo*/
	$nombre = $_POST['nombre'];
	$genero = $_POST['genero'];
	$year = $_POST['year'];
	$comentario =$_POST['comentario'];
	$terminos = $_POST['terminos'];
	
	/*
	$contenido = $_POST;
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