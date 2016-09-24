<!DOCTYPE html>
<html>
<head>
	<title>Registro de Datos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/clasephp.css">
</head>
<body>
	<div class="row" id="maqueta">
		<center><img src="img/banner.jpg" class="imgalt"></center>		
	</div>
	<div class="row" id="maqueta">
		<h2 class="color">Clase: PHP Registro de Datos</h2>	
		<h4 class="colorx">Maquetacion</h4>	
	</div>
	<div class="row" id="maqueta2">
		<div class="col-sm-3">
			<nav>
				<ul>
					<a href="index.php"><p>INICIO</p>				
					<a href="datos.php"><p>DATOS</p>
					<a href="calcular.php"><p>CALCULAR</p>
					<a href="galeria.php"><p>GALERIA</p>	
					<a href="formulario.html"><p>FORMULARIO</p>				
					<a href="promedios.html"><p>CALIFICACIONES</p>											
					<a href="parque.html"><p>PARQUE INFANTIL</p>	
					<a href="colegio.html"><p>COLEGIO</p>	
					<a href="comision.html"><p>COMISION</p>															
					<a href="factorial.php"><p>FACTORIAL</p>	
					<a href="semaforo.html"><p>SEMAFORO</p>	
					<a href="calculos.html"><p>CALCULOS</p>	
					<a href="matricez.php"><p>MATRICES</p>	
					<a href="funciones.php"><p>FUNCIONES</p>						
					<a href="clases.php"><p>OBJETOS CLASES</p>											
					<a href="ejemplo.php"><p>OBJETOS CLASES 2</p>
					<a href="prueba2.php"><p>PRUEBA CLASES 3</p>		
				</ul>
			</nav>
		</div>
		<div class="col-sm-9 fillimg">


		<?php

			$_numeros = array("casa","patito");

			echo "elemento 1 ".$_numeros[0];
			echo "<br>";
			echo "elemento 1 ".$_numeros[1];
			echo "<br>";

			$arrayName = array("izusu"=>"2001" , "Mazda"=>"2015" , "toyota"=>"2016");

		/*	echo "modelo ".$arrayName["izusu"];
			echo "<br>";
			echo " Mazda modelo ".$arrayName["Mazda"];;
			echo "<br>";			
			echo " toyota modelo ".$arrayName["toyota"];;
			echo "<br>";
		*/

			foreach ($arrayName as $key => $value) {
				echo "llave-".$key." valor ".$value;
				echo "<br>";
			}

		?>

		</div>	
	</div>
</body>
<div class="row">
	<p class="color2">Jose lopez 2016</p>
</div>
</html>