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
		<h4 class="colorx">Registros de Datos</h4>	
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
				$_nombre = "Jose faustino Lopez";
				$_edad = "41";
				$_pasatiemo = "Programar, dibujar, Estudiar, Ver Peliculas";

				echo "Mi Nombre es ".$_nombre;
				echo "<br>";
				echo "Mi edad es ".$_edad;
				echo "<br>";
				echo "Mi pasatiempo es ",$_pasatiemo;				
			?>
			<img src="img/spiderman.jpg">
		</div>	
	</div>
</body>
<div class="row">
	<p class="color2">Jose lopez 2016</p>
</div>
</html>