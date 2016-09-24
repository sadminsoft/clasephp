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
		<h4 class="colorx">Calcular Datos</h4>	
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
				</ul>
			</nav>
		</div>
		<div class="col-sm-9 fillimg">

			<?php
				$_v1=2;
				$_v2=1;

				$_suma  = $_v1 + $_v2;
				$_resta = $_v1 - $_v2;
				$_mult  = $_v1 * $_v2;
				$_div   = $_v1 / $_v2;

				echo "Primer valor ".$_v1;
				echo "<br>";
				echo "segund valor ".$_v2;
				echo "<br>";

				echo "Sumatoria es ".$_suma;
				echo "<br>";
				echo "la Resta es ".$_resta;
				echo "<br>";
				echo "la Multiplicacion es ".$_mult;
				echo "<br>";
				echo "La division es ".$_div;
				echo "<br>";


			?>

		</div>	
	</div>
</body>
<div class="row">
	<p class="color2">Jose lopez 2016</p>
</div>
</html>