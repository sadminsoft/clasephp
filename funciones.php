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
				</ul>
			</nav>
		</div>
		<div class="col-sm-9 fillimg">

		<?php

			$resultado = 0;

			function calculos($tipo,$var1,$var2){

				switch ($tipo) {
					case 1:
						$resultado=$var1*$var2;
						break;
					case 2:
						$resultado=$var1/$var2;
						break;
					case 3:
						$resultado=$var1-$var2;
						break;
					case 4:
						$resultado=$var1+$var2;
						break;
					
					default:
						echo "Error";
						break;
				}

				return $resultado;
			}

			echo "resultado multiplicar: ".calculos(1,2,5);
			echo "<br>";
			echo "resultado dividir: ".calculos(2,2,5);
			echo "<br>";
			echo "resultado restar: ".calculos(3,2,5);
			echo "<br>";
			echo "resultado sumar: ".calculos(4,2,5);

		?>

		</div>	
	</div>
</body>
<div class="row">
	<p class="color2">Jose lopez 2016</p>
</div>
</html>