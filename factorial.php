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
					<br>
					<a href="datos.php"><p>DATOS</p>
					<br>
					<a href="calcular.php"><p>CALCULAR</p>
					<br>
					<a href="galeria.php"><p>GALERIA</p>	
					<br>
					<a href="formulario.html"><p>FORMULARIO</p>				
					<br>
					<a href="promedios.html"><p>CALIFICACIONES</p>											

					<br>
					<a href="parque.html"><p>PARQUE INFANTIL</p>	
					<br>
					<a href="colegio.html"><p>COLEGIO</p>	
					<br>
					<a href="comision.html"><p>COMISION</p>																			<br>
					<a href="factorial.php"><p>FACTORIAL</p>	
										<br>
					<a href="semaforo.html"><p>SEMAFORO</p>	
										<br>
					<a href="calculos.html"><p>CALCULOS</p>	
										<br>

				</ul>
			</nav>
		</div>
		<div class="col-sm-9 fillimg">

			<?php

				$_num1 = 4;
				$_num2 = 12;

				$ide = 1;

				while($_num1<=$_num2){

					$factor = $_num1 * $ide;

					echo "Factor ".$factor;
					echo "<br>";

					$ide += 1;					
					$_num1 += 1;

				}			

			?>

		</div>	
	</div>
</body>
<div class="row">
	<p class="color2">Jose lopez 2016</p>
</div>
</html>